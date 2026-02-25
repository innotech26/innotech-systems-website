@extends('admin.layout')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Contact Messages</h1>

    <div class="bg-white rounded-2xl border border-slate-100 overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-slate-50 text-slate-600">
                <tr>
                    <th class="text-left px-4 py-3">From</th>
                    <th class="text-left px-4 py-3">Service</th>
                    <th class="text-left px-4 py-3">Date</th>
                    <th class="text-right px-4 py-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($messages as $message)
                    <tr class="border-t {{ $message->is_read ? '' : 'bg-brand-cyan/10' }}">
                        <td class="px-4 py-3">
                            <div class="font-medium">{{ $message->name }}</div>
                            <div class="text-xs text-slate-500">{{ $message->email }}</div>
                        </td>
                        <td class="px-4 py-3">{{ $message->service }}</td>
                        <td class="px-4 py-3">{{ $message->created_at->format('M j, Y') }}</td>
                        <td class="px-4 py-3 text-right">
                            <a href="{{ route('admin.messages.show', $message) }}" class="text-brand-primary font-semibold">View</a>
                            <form method="POST" action="{{ route('admin.messages.destroy', $message) }}" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="ml-3 text-red-600" onclick="return confirm('Delete this message?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="px-4 py-6 text-center text-slate-500" colspan="4">No messages yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
