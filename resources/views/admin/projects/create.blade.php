@extends('admin.layout')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Add Project</h1>
    <form method="POST" action="{{ route('admin.projects.store') }}" class="space-y-5" enctype="multipart/form-data">
        @csrf
        <div>
            <label class="block text-sm font-semibold mb-2" for="title">Title</label>
            <input id="title" name="title" type="text" required class="w-full rounded-xl border border-slate-200 px-4 py-3" value="{{ old('title') }}">
        </div>
        <div>
            <label class="block text-sm font-semibold mb-2" for="summary">Summary</label>
            <textarea id="summary" name="summary" rows="4" required class="w-full rounded-xl border border-slate-200 px-4 py-3">{{ old('summary') }}</textarea>
        </div>
        <div>
            <label class="block text-sm font-semibold mb-2" for="category">Category</label>
            <input id="category" name="category" type="text" class="w-full rounded-xl border border-slate-200 px-4 py-3" value="{{ old('category') }}">
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
        <div class="flex items-center gap-6">
            <label class="inline-flex items-center gap-2">
                <input type="checkbox" name="is_featured" value="1" class="rounded">
                <span class="text-sm">Featured</span>
            </label>
            <label class="inline-flex items-center gap-2">
                <input type="checkbox" name="is_published" value="1" class="rounded" checked>
                <span class="text-sm">Published</span>
            </label>
        </div>
        <div>
            <button type="submit" class="px-5 py-2 rounded-lg bg-brand-cyan text-brand-dark font-semibold">Save</button>
        </div>
    </form>
@endsection
