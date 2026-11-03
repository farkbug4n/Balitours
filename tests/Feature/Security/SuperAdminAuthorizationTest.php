<?php

namespace Tests\Feature\Security;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class SuperAdminAuthorizationTest extends TestCase
{
    use RefreshDatabase;

    public function test_super_admin_is_redirected_to_super_admin_dashboard_after_login(): void
    {
        User::factory()->create([
            'email' => 'super@example.com',
            'password' => Hash::make('Secret123!'),
            'role' => 'superadmin',
        ]);

        $this->post('/login', [
            'login' => 'super@example.com',
            'password' => 'Secret123!',
        ])->assertRedirect('/superadmin/dashboard');
    }

    public function test_guests_cannot_access_super_admin_panel(): void
    {
        $this->get('/superadmin/dashboard')->assertRedirect('/login');
    }

    public function test_admin_and_tourist_users_cannot_access_super_admin_panel(): void
    {
        foreach (['tourist', 'resident', 'admin'] as $role) {
            $user = User::factory()->create(['role' => $role]);

            $this->actingAs($user)->get('/superadmin/dashboard')->assertStatus(403);
        }
    }

    public function test_super_admin_can_access_all_super_admin_pages(): void
    {
        $superAdmin = User::factory()->create(['role' => 'superadmin']);

        foreach (['dashboard', 'admins', 'roles', 'users', 'audit-logs', 'system-health', 'backups', 'settings'] as $page) {
            $this->actingAs($superAdmin)
                ->get("/superadmin/{$page}")
                ->assertOk()
                ->assertSee('Municipality of Balingasag · Super Admin', false);
        }
    }

    public function test_super_admin_can_access_admin_panel(): void
    {
        $superAdmin = User::factory()->create(['role' => 'superadmin']);

        $this->actingAs($superAdmin)->get('/admin/dashboard')->assertOk();
    }
}
