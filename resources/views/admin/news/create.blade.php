@extends('admin.layout')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Add News</h1>
    <form method="POST" action="{{ route('admin.news.store') }}" class="space-y-5" enctype="multipart/form-data">
        @csrf
        <div>
            <label class="block text-sm font-semibold mb-2" for="title">Title</label>
            <input id="title" name="title" type="text" required class="w-full rounded-xl border border-slate-200 px-4 py-3" value="{{ old('title') }}">
        </div>
        <div>
            <label class="block text-sm font-semibold mb-2" for="excerpt">Excerpt</label>
            <textarea id="excerpt" name="excerpt" rows="3" required class="w-full rounded-xl border border-slate-200 px-4 py-3">{{ old('excerpt') }}</textarea>
        </div>
        <div>
            <label class="block text-sm font-semibold mb-2" for="body">Body</label>
            <textarea id="body" name="body" rows="6" class="w-full rounded-xl border border-slate-200 px-4 py-3">{{ old('body') }}</textarea>
        </div>
        <div>
            <label class="block text-sm font-semibold mb-2" for="image_url">Image URL</label>
            <input id="image_url" name="image_url" type="url" class="w-full rounded-xl border border-slate-200 px-4 py-3" value="{{ old('image_url') }}">
        </div>
        <div>
            <label class="block text-sm font-semibold mb-2" for="image_file">Upload Image</label>
            <label for="image_file" class="flex flex-col items-center justify-center gap-2 rounded-xl border border-dashed border-slate-300 bg-slate-50 px-4 py-6 text-sm text-slate-500 cursor-pointer">
                <span>Drag & drop or click to upload</span>
                <span class="text-xs">PNG, JPG up to 2MB</span>
            </label>
            <input id="image_file" name="image_file" type="file" accept="image/*" class="hidden">
        </div>
        <div>
            <label class="block text-sm font-semibold mb-2" for="published_at">Published Date</label>
            <input id="published_at" name="published_at" type="date" class="w-full rounded-xl border border-slate-200 px-4 py-3" value="{{ old('published_at') }}">
        </div>
        <label class="inline-flex items-center gap-2">
            <input type="checkbox" name="is_published" value="1" class="rounded" checked>
            <span class="text-sm">Published</span>
        </label>
        <div>
            <button type="submit" class="px-5 py-2 rounded-lg bg-brand-cyan text-brand-dark font-semibold">Save</button>
        </div>
    </form>
@endsection
