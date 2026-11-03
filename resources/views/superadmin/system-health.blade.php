@extends('superadmin.layout')

@section('title', 'System Health')
@section('page-subtitle', 'Service status')
@section('system-health-active', 'bg-cream-50 text-forest-900 shadow-sm')

@section('content')
  <section class="mb-8 rounded-3xl bg-forest-900 p-8 text-cream-50 sm:p-10">
    <p class="text-xs font-semibold uppercase tracking-[0.24em] text-sage-300">Monitoring</p>
    <h1 class="mt-3 font-serif text-3xl font-medium sm:text-4xl">System Health</h1>
    <p class="mt-3 max-w-2xl text-sm leading-relaxed text-cream-100/80">Monitor the web application, database, queue workers, and storage in one view.</p>
  </section>
  <section class="grid gap-4 sm:grid-cols-2">
    <article class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-cream-200">
      <p class="text-xs font-semibold uppercase tracking-[0.24em] text-ink-600">Services</p>
      <h2 class="mt-3 font-serif text-xl font-medium text-forest-900">Live service status</h2>
      <p class="mt-3 text-sm text-ink-600">Check whether each core service is operational, degraded, or down.</p>
    </article>
    <article class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-cream-200">
      <p class="text-xs font-semibold uppercase tracking-[0.24em] text-ink-600">Resources</p>
      <h2 class="mt-3 font-serif text-xl font-medium text-forest-900">Capacity and storage</h2>
      <p class="mt-3 text-sm text-ink-600">Track disk usage, uploaded media size, and database growth over time.</p>
    </article>
  </section>
@endsection
