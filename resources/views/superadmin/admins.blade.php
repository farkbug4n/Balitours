@extends('superadmin.layout')

@section('title', 'Admin Accounts')
@section('page-subtitle', 'Administrator management')
@section('admins-active', 'bg-cream-50 text-forest-900 shadow-sm')

@section('content')
  <section class="mb-8 rounded-3xl bg-forest-900 p-8 text-cream-50 sm:p-10">
    <p class="text-xs font-semibold uppercase tracking-[0.24em] text-sage-300">Access control</p>
    <h1 class="mt-3 font-serif text-3xl font-medium sm:text-4xl">Admin Accounts</h1>
    <p class="mt-3 max-w-2xl text-sm leading-relaxed text-cream-100/80">Create, suspend, and remove administrator accounts for the Balingasag tourism panel.</p>
  </section>
  <section class="grid gap-4 sm:grid-cols-2">
    <article class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-cream-200">
      <p class="text-xs font-semibold uppercase tracking-[0.24em] text-ink-600">Directory</p>
      <h2 class="mt-3 font-serif text-xl font-medium text-forest-900">Every administrator in one place</h2>
      <p class="mt-3 text-sm text-ink-600">Review who has admin access, when they last signed in, and their account status.</p>
    </article>
    <article class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-cream-200">
      <p class="text-xs font-semibold uppercase tracking-[0.24em] text-ink-600">Onboarding</p>
      <h2 class="mt-3 font-serif text-xl font-medium text-forest-900">Invite new administrators</h2>
      <p class="mt-3 text-sm text-ink-600">Grant panel access to municipal staff with a secure, verified account.</p>
    </article>
  </section>
@endsection
