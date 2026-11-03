@extends('superadmin.layout')

@section('title', 'Global Settings')
@section('page-subtitle', 'Platform configuration')
@section('settings-active', 'bg-cream-50 text-forest-900 shadow-sm')

@section('content')
  <section class="mb-8 rounded-3xl bg-forest-900 p-8 text-cream-50 sm:p-10">
    <p class="text-xs font-semibold uppercase tracking-[0.24em] text-sage-300">Platform</p>
    <h1 class="mt-3 font-serif text-3xl font-medium sm:text-4xl">Global Settings</h1>
    <p class="mt-3 max-w-2xl text-sm leading-relaxed text-cream-100/80">Configure platform-wide options that apply to every administrator and visitor.</p>
  </section>
  <section class="grid gap-4 sm:grid-cols-2">
    <article class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-cream-200">
      <p class="text-xs font-semibold uppercase tracking-[0.24em] text-ink-600">General</p>
      <h2 class="mt-3 font-serif text-xl font-medium text-forest-900">Site identity</h2>
      <p class="mt-3 text-sm text-ink-600">Manage the site name, logo, contact details, and maintenance mode.</p>
    </article>
    <article class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-cream-200">
      <p class="text-xs font-semibold uppercase tracking-[0.24em] text-ink-600">Security</p>
      <h2 class="mt-3 font-serif text-xl font-medium text-forest-900">Authentication policies</h2>
      <p class="mt-3 text-sm text-ink-600">Set password rules, login throttling, and session timeouts for all users.</p>
    </article>
  </section>
@endsection
