@extends('admin.layout')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Dashboard</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white rounded-2xl border border-slate-100 p-5">
            <div class="text-sm text-slate-500">Services</div>
            <div class="text-3xl font-bold">{{ $stats['services'] }}</div>
        </div>
        <div class="bg-white rounded-2xl border border-slate-100 p-5">
            <div class="text-sm text-slate-500">Projects</div>
            <div class="text-3xl font-bold">{{ $stats['projects'] }}</div>
        </div>
        <div class="bg-white rounded-2xl border border-slate-100 p-5">
            <div class="text-sm text-slate-500">News</div>
            <div class="text-3xl font-bold">{{ $stats['news'] }}</div>
        </div>
        <div class="bg-white rounded-2xl border border-slate-100 p-5">
            <div class="text-sm text-slate-500">Messages</div>
            <div class="text-3xl font-bold">{{ $stats['messages'] }}</div>
            <div class="text-xs text-slate-500 mt-1">Unread: {{ $stats['unread_messages'] }}</div>
        </div>
    </div>
@endsection
