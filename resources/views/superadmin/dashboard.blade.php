@extends('superadmin.layout')

@section('title', 'Dashboard')
@section('page-subtitle', 'Platform overview')
@section('dashboard-active', 'bg-cream-50 text-forest-900 shadow-sm')

@section('content')
  <section class="mb-8 overflow-hidden rounded-3xl bg-forest-900 p-8 shadow-sm sm:p-10">
    <p class="text-xs font-semibold uppercase tracking-[0.24em] text-sage-300">Super admin overview</p>
    <h1 class="mt-3 font-serif text-3xl font-medium text-cream-50 sm:text-4xl">Welcome back, Super Admin.</h1>
    <p class="mt-3 max-w-2xl text-sm leading-relaxed text-cream-100/80">
      Oversee every administrator, role, and system service across BaliTour — from access control to platform health and backups.
    </p>
  </section>

  <section class="mb-8 grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
    <article class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-cream-200">
      <div class="flex items-center justify-between">
        <p class="text-xs font-semibold uppercase tracking-[0.24em] text-ink-600">Admins</p>
        <span class="rounded-full bg-sage-300/40 px-2 py-1 text-[11px] font-semibold text-forest-800">+2</span>
      </div>
      <p class="mt-4 font-serif text-4xl font-medium text-forest-900">12</p>
      <p class="mt-2 text-sm text-ink-600">Administrator accounts with panel access.</p>
    </article>
    <article class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-cream-200">
      <div class="flex items-center justify-between">
        <p class="text-xs font-semibold uppercase tracking-[0.24em] text-ink-600">Total users</p>
        <span class="rounded-full bg-sage-300/40 px-2 py-1 text-[11px] font-semibold text-forest-800">+4.2%</span>
      </div>
      <p class="mt-4 font-serif text-4xl font-medium text-forest-900">3,910</p>
      <p class="mt-2 text-sm text-ink-600">Tourists, residents, and staff combined.</p>
    </article>
    <article class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-cream-200">
      <div class="flex items-center justify-between">
        <p class="text-xs font-semibold uppercase tracking-[0.24em] text-ink-600">Uptime</p>
        <span class="rounded-full bg-sage-300/40 px-2 py-1 text-[11px] font-semibold text-forest-800">30 days</span>
      </div>
      <p class="mt-4 font-serif text-4xl font-medium text-forest-900">99.9%</p>
      <p class="mt-2 text-sm text-ink-600">Platform availability this month.</p>
    </article>
    <article class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-cream-200">
      <div class="flex items-center justify-between">
        <p class="text-xs font-semibold uppercase tracking-[0.24em] text-ink-600">Security alerts</p>
        <span class="rounded-full bg-amber-100 px-2 py-1 text-[11px] font-semibold text-amber-700">Needs action</span>
      </div>
      <p class="mt-4 font-serif text-4xl font-medium text-forest-900">3</p>
      <p class="mt-2 text-sm text-ink-600">Flagged login attempts to review.</p>
    </article>
  </section>

  <section class="grid gap-6 xl:grid-cols-[1.5fr_1fr]">
    <div class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-cream-200 sm:p-8">
      <div class="flex items-center justify-between gap-4">
        <div>
          <p class="text-xs font-semibold uppercase tracking-[0.24em] text-ink-600">Quick actions</p>
          <h2 class="mt-2 font-serif text-2xl font-medium text-forest-900">Manage the platform</h2>
        </div>
        <span class="hidden rounded-full bg-cream-100 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-ink-600 sm:inline-flex">Super admin</span>
      </div>

      <div class="mt-6 grid gap-4 sm:grid-cols-2">
        <a href="/superadmin/admins" class="rounded-2xl border border-cream-200 bg-cream-50 p-5 transition hover:-translate-y-0.5 hover:border-forest-800/20 hover:shadow-sm">
          <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-forest-900 text-cream-50">
            <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="9" cy="8" r="3.2"/><path d="M2.5 20a6.5 6.5 0 0 1 13 0"/><path d="m16 11 1.5 1.5L21 9"/></svg>
          </div>
          <p class="mt-3 text-base font-semibold text-forest-900">Admin accounts</p>
          <p class="mt-1 text-sm text-ink-600">Create, suspend, or remove administrators.</p>
        </a>
        <a href="/superadmin/roles" class="rounded-2xl border border-cream-200 bg-cream-50 p-5 transition hover:-translate-y-0.5 hover:border-forest-800/20 hover:shadow-sm">
          <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-forest-900 text-cream-50">
            <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="8" cy="15" r="4"/><path d="m10.8 12.2 8.7-8.7M17 6l2.5 2.5M14.5 8.5 16 10"/></svg>
          </div>
          <p class="mt-3 text-base font-semibold text-forest-900">Roles &amp; permissions</p>
          <p class="mt-1 text-sm text-ink-600">Define what each role is allowed to do.</p>
        </a>
        <a href="/superadmin/audit-logs" class="rounded-2xl border border-cream-200 bg-cream-50 p-5 transition hover:-translate-y-0.5 hover:border-forest-800/20 hover:shadow-sm">
          <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-forest-900 text-cream-50">
            <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M14 3H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9l-6-6Z"/><path d="M14 3v6h6M8 13h8M8 17h5"/></svg>
          </div>
          <p class="mt-3 text-base font-semibold text-forest-900">Audit logs</p>
          <p class="mt-1 text-sm text-ink-600">Trace every change made by administrators.</p>
        </a>
        <a href="/superadmin/backups" class="rounded-2xl border border-cream-200 bg-cream-50 p-5 transition hover:-translate-y-0.5 hover:border-forest-800/20 hover:shadow-sm">
          <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-forest-900 text-cream-50">
            <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><ellipse cx="12" cy="5.5" rx="7.5" ry="2.5"/><path d="M4.5 5.5v6c0 1.4 3.4 2.5 7.5 2.5s7.5-1.1 7.5-2.5v-6M4.5 11.5v6c0 1.4 3.4 2.5 7.5 2.5s7.5-1.1 7.5-2.5v-6"/></svg>
          </div>
          <p class="mt-3 text-base font-semibold text-forest-900">Backups</p>
          <p class="mt-1 text-sm text-ink-600">Schedule and restore database snapshots.</p>
        </a>
      </div>
    </div>

    <div class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-cream-200 sm:p-8">
      <p class="text-xs font-semibold uppercase tracking-[0.24em] text-ink-600">System health</p>
      <h2 class="mt-2 font-serif text-2xl font-medium text-forest-900">Service status</h2>
      <ul class="mt-6 space-y-3">
        <li class="flex items-center justify-between gap-3 rounded-2xl border border-cream-200 bg-cream-50 p-4">
          <span class="flex items-center gap-3 text-sm font-semibold text-forest-900"><span class="h-2 w-2 shrink-0 rounded-full bg-sage-400"></span>Web application</span>
          <span class="text-xs font-semibold text-ink-600">Operational</span>
        </li>
        <li class="flex items-center justify-between gap-3 rounded-2xl border border-cream-200 bg-cream-50 p-4">
          <span class="flex items-center gap-3 text-sm font-semibold text-forest-900"><span class="h-2 w-2 shrink-0 rounded-full bg-sage-400"></span>Database</span>
          <span class="text-xs font-semibold text-ink-600">Operational</span>
        </li>
        <li class="flex items-center justify-between gap-3 rounded-2xl border border-cream-200 bg-cream-50 p-4">
          <span class="flex items-center gap-3 text-sm font-semibold text-forest-900"><span class="h-2 w-2 shrink-0 rounded-full bg-amber-500"></span>Queue worker</span>
          <span class="text-xs font-semibold text-amber-700">Degraded</span>
        </li>
        <li class="flex items-center justify-between gap-3 rounded-2xl border border-cream-200 bg-cream-50 p-4">
          <span class="flex items-center gap-3 text-sm font-semibold text-forest-900"><span class="h-2 w-2 shrink-0 rounded-full bg-sage-400"></span>Last backup</span>
          <span class="text-xs font-semibold text-ink-600">Today, 02:00</span>
        </li>
      </ul>
      <a href="/superadmin/system-health" class="mt-6 inline-flex items-center gap-1.5 text-sm font-semibold text-forest-900 hover:text-forest-700">
        View system health
        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
    </div>
  </section>

  <section class="mt-6 grid gap-6 xl:grid-cols-[1.5fr_1fr]">
    <div class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-cream-200 sm:p-8">
      <div class="flex flex-wrap items-center justify-between gap-4">
        <div>
          <p class="text-xs font-semibold uppercase tracking-[0.24em] text-ink-600">Access control</p>
          <h2 class="mt-2 font-serif text-2xl font-medium text-forest-900">Administrator accounts</h2>
        </div>
        <a href="/superadmin/admins" class="inline-flex items-center gap-1.5 text-sm font-semibold text-forest-900 hover:text-forest-700">
          Manage admins
          <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
      </div>
      <div class="mt-6 overflow-x-auto">
        <table class="min-w-full divide-y divide-cream-200 text-left text-sm">
          <thead class="bg-cream-50 text-ink-600">
            <tr>
              <th class="whitespace-nowrap px-4 py-3 text-xs font-semibold uppercase tracking-[0.14em]">Admin</th>
              <th class="whitespace-nowrap px-4 py-3 text-xs font-semibold uppercase tracking-[0.14em]">Role</th>
              <th class="whitespace-nowrap px-4 py-3 text-xs font-semibold uppercase tracking-[0.14em]">Last login</th>
              <th class="whitespace-nowrap px-4 py-3 text-xs font-semibold uppercase tracking-[0.14em]">Status</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-cream-200">
            <tr>
              <td class="whitespace-nowrap px-4 py-4"><p class="font-medium text-forest-900">Maria Santos</p><p class="text-xs text-ink-600">maria.santos@balingasag.gov.ph</p></td>
              <td class="whitespace-nowrap px-4 py-4"><span class="rounded-full bg-forest-900/10 px-2.5 py-1 text-xs font-semibold text-forest-900">Admin</span></td>
              <td class="whitespace-nowrap px-4 py-4 text-ink-600">10 minutes ago</td>
              <td class="whitespace-nowrap px-4 py-4"><span class="inline-flex items-center gap-1.5 text-ink-600"><span class="h-1.5 w-1.5 rounded-full bg-sage-400"></span>Active</span></td>
            </tr>
            <tr>
              <td class="whitespace-nowrap px-4 py-4"><p class="font-medium text-forest-900">Carlo Mendoza</p><p class="text-xs text-ink-600">carlo.mendoza@balingasag.gov.ph</p></td>
              <td class="whitespace-nowrap px-4 py-4"><span class="rounded-full bg-forest-900/10 px-2.5 py-1 text-xs font-semibold text-forest-900">Admin</span></td>
              <td class="whitespace-nowrap px-4 py-4 text-ink-600">Yesterday</td>
              <td class="whitespace-nowrap px-4 py-4"><span class="inline-flex items-center gap-1.5 text-ink-600"><span class="h-1.5 w-1.5 rounded-full bg-sage-400"></span>Active</span></td>
            </tr>
            <tr>
              <td class="whitespace-nowrap px-4 py-4"><p class="font-medium text-forest-900">Liza Bautista</p><p class="text-xs text-ink-600">liza.bautista@balingasag.gov.ph</p></td>
              <td class="whitespace-nowrap px-4 py-4"><span class="rounded-full bg-forest-900/10 px-2.5 py-1 text-xs font-semibold text-forest-900">Admin</span></td>
              <td class="whitespace-nowrap px-4 py-4 text-ink-600">12 days ago</td>
              <td class="whitespace-nowrap px-4 py-4"><span class="inline-flex items-center gap-1.5 text-ink-600"><span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span>Suspended</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-cream-200 sm:p-8">
      <p class="text-xs font-semibold uppercase tracking-[0.24em] text-ink-600">Audit trail</p>
      <h2 class="mt-2 font-serif text-2xl font-medium text-forest-900">Recent admin activity</h2>
      <ul class="mt-6 space-y-3">
        <li class="flex items-start gap-3 rounded-2xl border border-cream-200 bg-cream-50 p-4">
          <span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-sage-400"></span>
          <p class="text-sm text-ink-600"><span class="font-semibold text-forest-900">Maria Santos</span> published the event “Kagay-anon Festival”.</p>
        </li>
        <li class="flex items-start gap-3 rounded-2xl border border-cream-200 bg-cream-50 p-4">
          <span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-forest-800"></span>
          <p class="text-sm text-ink-600"><span class="font-semibold text-forest-900">Carlo Mendoza</span> updated 3 destination listings.</p>
        </li>
        <li class="flex items-start gap-3 rounded-2xl border border-cream-200 bg-cream-50 p-4">
          <span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-amber-500"></span>
          <p class="text-sm text-ink-600"><span class="font-semibold text-forest-900">5 failed logins</span> detected for liza.bautista@balingasag.gov.ph.</p>
        </li>
      </ul>
      <a href="/superadmin/audit-logs" class="mt-6 inline-flex items-center gap-1.5 text-sm font-semibold text-forest-900 hover:text-forest-700">
        View audit logs
        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
    </div>
  </section>
@endsection
