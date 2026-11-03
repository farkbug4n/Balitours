@extends('superadmin.layout')

@section('title', 'Backups')
@section('page-subtitle', 'Data protection')
@section('backups-active', 'bg-cream-50 text-forest-900 shadow-sm')

@section('content')
  <section class="mb-8 rounded-3xl bg-forest-900 p-8 text-cream-50 sm:p-10">
    <p class="text-xs font-semibold uppercase tracking-[0.24em] text-sage-300">Platform</p>
    <h1 class="mt-3 font-serif text-3xl font-medium sm:text-4xl">Backups</h1>
    <p class="mt-3 max-w-2xl text-sm leading-relaxed text-cream-100/80">Schedule database backups and restore snapshots to keep BaliTour data safe.</p>
  </section>
  <section class="grid gap-4 sm:grid-cols-2">
    <article class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-cream-200">
      <p class="text-xs font-semibold uppercase tracking-[0.24em] text-ink-600">Schedule</p>
      <h2 class="mt-3 font-serif text-xl font-medium text-forest-900">Automated snapshots</h2>
      <p class="mt-3 text-sm text-ink-600">Configure daily or weekly backups of the database and uploaded media.</p>
    </article>
    <article class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-cream-200">
      <p class="text-xs font-semibold uppercase tracking-[0.24em] text-ink-600">Restore</p>
      <h2 class="mt-3 font-serif text-xl font-medium text-forest-900">Recover with confidence</h2>
      <p class="mt-3 text-sm text-ink-600">Roll back to a previous snapshot after accidental data loss.</p>
    </article>
  </section>
@endsection
