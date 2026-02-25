@extends('admin.layout')

@section('content')
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">News</h1>
        <a href="{{ route('admin.news.create') }}" class="px-4 py-2 rounded-lg bg-brand-cyan text-brand-dark font-semibold">Add News</a>
    </div>

    <div class="bg-white rounded-2xl border border-slate-100 overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-slate-50 text-slate-600">
                <tr>
                    <th class="text-left px-4 py-3">Title</th>
                    <th class="text-left px-4 py-3">Published</th>
                    <th class="text-right px-4 py-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($news as $post)
                    <tr class="border-t">
                        <td class="px-4 py-3 font-medium">{{ $post->title }}</td>
                        <td class="px-4 py-3">{{ $post->is_published ? 'Yes' : 'No' }}</td>
                        <td class="px-4 py-3 text-right">
                            <a href="{{ route('admin.news.edit', $post) }}" class="text-brand-primary font-semibold">Edit</a>
                            <form method="POST" action="{{ route('admin.news.destroy', $post) }}" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="ml-3 text-red-600" onclick="return confirm('Delete this news post?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="px-4 py-6 text-center text-slate-500" colspan="3">No news yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
