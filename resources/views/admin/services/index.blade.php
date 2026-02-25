@extends('admin.layout')

@section('content')
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">Services</h1>
        <a href="{{ route('admin.services.create') }}" class="px-4 py-2 rounded-lg bg-brand-cyan text-brand-dark font-semibold">Add Service</a>
    </div>

    <div class="bg-white rounded-2xl border border-slate-100 overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-slate-50 text-slate-600">
                <tr>
                    <th class="text-left px-4 py-3">Title</th>
                    <th class="text-left px-4 py-3">Published</th>
                    <th class="text-left px-4 py-3">Order</th>
                    <th class="text-right px-4 py-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($services as $service)
                    <tr class="border-t">
                        <td class="px-4 py-3 font-medium">{{ $service->title }}</td>
                        <td class="px-4 py-3">{{ $service->is_published ? 'Yes' : 'No' }}</td>
                        <td class="px-4 py-3">{{ $service->sort_order }}</td>
                        <td class="px-4 py-3 text-right">
                            <a href="{{ route('admin.services.edit', $service) }}" class="text-brand-primary font-semibold">Edit</a>
                            <form method="POST" action="{{ route('admin.services.destroy', $service) }}" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="ml-3 text-red-600" onclick="return confirm('Delete this service?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="px-4 py-6 text-center text-slate-500" colspan="4">No services yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
