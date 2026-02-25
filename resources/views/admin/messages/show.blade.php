@extends('admin.layout')

@section('content')
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">Message Details</h1>
        <a href="{{ route('admin.messages.index') }}" class="text-brand-primary font-semibold">Back</a>
    </div>

    <div class="bg-white rounded-2xl border border-slate-100 p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <div class="text-sm text-slate-500">Name</div>
                <div class="font-semibold">{{ $message->name }}</div>
            </div>
            <div>
                <div class="text-sm text-slate-500">Email</div>
                <div class="font-semibold">{{ $message->email }}</div>
            </div>
            <div>
                <div class="text-sm text-slate-500">Phone</div>
                <div class="font-semibold">{{ $message->phone }}</div>
            </div>
            <div>
                <div class="text-sm text-slate-500">Service</div>
                <div class="font-semibold">{{ $message->service }}</div>
            </div>
            <div>
                <div class="text-sm text-slate-500">Received</div>
                <div class="font-semibold">{{ $message->created_at->format('F j, Y, g:i a') }}</div>
            </div>
        </div>

        <div class="mt-6">
            <div class="text-sm text-slate-500 mb-2">Message</div>
            <p class="text-slate-700 leading-relaxed">{{ $message->message }}</p>
        </div>
    </div>
@endsection
