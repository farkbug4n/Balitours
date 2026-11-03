@extends('superadmin.layout')

@section('title', 'All Users')
@section('page-subtitle', 'Platform users')
@section('users-active', 'bg-cream-50 text-forest-900 shadow-sm')

@section('content')
  <section class="mb-8 rounded-3xl bg-forest-900 p-8 text-cream-50 sm:p-10">
    <p class="text-xs font-semibold uppercase tracking-[0.24em] text-sage-300">Access control</p>
    <h1 class="mt-3 font-serif text-3xl font-medium sm:text-4xl">All Users</h1>
    <p class="mt-3 max-w-2xl text-sm leading-relaxed text-cream-100/80">Search every account on the platform and change roles or account status when needed.</p>
  </section>
  <section class="grid gap-4 sm:grid-cols-2">
    <article class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-cream-200">
      <p class="text-xs font-semibold uppercase tracking-[0.24em] text-ink-600">Accounts</p>
      <h2 class="mt-3 font-serif text-xl font-medium text-forest-900">Every registered account</h2>
      <p class="mt-3 text-sm text-ink-600">Browse tourists, residents, and staff across the entire platform.</p>
    </article>
    <article class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-cream-200">
      <p class="text-xs font-semibold uppercase tracking-[0.24em] text-ink-600">Moderation</p>
      <h2 class="mt-3 font-serif text-xl font-medium text-forest-900">Suspend or restore access</h2>
      <p class="mt-3 text-sm text-ink-600">Suspend abusive accounts or reactivate users after review.</p>
    </article>
  </section>
@endsection
