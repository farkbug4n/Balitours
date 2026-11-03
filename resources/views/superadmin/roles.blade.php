@extends('superadmin.layout')

@section('title', 'Roles & Permissions')
@section('page-subtitle', 'Role management')
@section('roles-active', 'bg-cream-50 text-forest-900 shadow-sm')

@section('content')
  <section class="mb-8 rounded-3xl bg-forest-900 p-8 text-cream-50 sm:p-10">
    <p class="text-xs font-semibold uppercase tracking-[0.24em] text-sage-300">Access control</p>
    <h1 class="mt-3 font-serif text-3xl font-medium sm:text-4xl">Roles &amp; Permissions</h1>
    <p class="mt-3 max-w-2xl text-sm leading-relaxed text-cream-100/80">Define what tourists, residents, and administrators are allowed to see and change.</p>
  </section>
  <section class="grid gap-4 sm:grid-cols-2">
    <article class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-cream-200">
      <p class="text-xs font-semibold uppercase tracking-[0.24em] text-ink-600">Roles</p>
      <h2 class="mt-3 font-serif text-xl font-medium text-forest-900">Platform roles</h2>
      <p class="mt-3 text-sm text-ink-600">Super admin, admin, resident, and tourist roles with clearly scoped capabilities.</p>
    </article>
    <article class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-cream-200">
      <p class="text-xs font-semibold uppercase tracking-[0.24em] text-ink-600">Permissions</p>
      <h2 class="mt-3 font-serif text-xl font-medium text-forest-900">Fine-grained access</h2>
      <p class="mt-3 text-sm text-ink-600">Control which admin modules each role can open, edit, or publish.</p>
    </article>
  </section>
@endsection
