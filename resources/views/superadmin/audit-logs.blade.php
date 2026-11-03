@extends('superadmin.layout')

@section('title', 'Audit Logs')
@section('page-subtitle', 'Administrator activity')
@section('audit-logs-active', 'bg-cream-50 text-forest-900 shadow-sm')

@section('content')
  <section class="mb-8 rounded-3xl bg-forest-900 p-8 text-cream-50 sm:p-10">
    <p class="text-xs font-semibold uppercase tracking-[0.24em] text-sage-300">Monitoring</p>
    <h1 class="mt-3 font-serif text-3xl font-medium sm:text-4xl">Audit Logs</h1>
    <p class="mt-3 max-w-2xl text-sm leading-relaxed text-cream-100/80">A complete trail of the changes administrators make to content, users, and settings.</p>
  </section>
  <section class="grid gap-4 sm:grid-cols-2">
    <article class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-cream-200">
      <p class="text-xs font-semibold uppercase tracking-[0.24em] text-ink-600">Activity</p>
      <h2 class="mt-3 font-serif text-xl font-medium text-forest-900">Who changed what</h2>
      <p class="mt-3 text-sm text-ink-600">Trace edits, deletions, and publishing actions back to each administrator.</p>
    </article>
    <article class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-cream-200">
      <p class="text-xs font-semibold uppercase tracking-[0.24em] text-ink-600">Exports</p>
      <h2 class="mt-3 font-serif text-xl font-medium text-forest-900">Compliance-ready records</h2>
      <p class="mt-3 text-sm text-ink-600">Export audit history for reporting and accountability reviews.</p>
    </article>
  </section>
@endsection
