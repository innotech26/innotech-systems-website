<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsPostController extends Controller
{
    public function index()
    {
        $news = NewsPost::orderByDesc('created_at')->get();

        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'excerpt' => ['required', 'string'],
            'body' => ['nullable', 'string'],
            'image_url' => ['nullable', 'url'],
            'image_file' => ['nullable', 'image', 'max:2048'],
            'published_at' => ['nullable', 'date'],
            'is_published' => ['nullable'],
        ]);

        $data['slug'] = Str::slug($data['title']);
        $data['is_published'] = $request->boolean('is_published');
        $data['image_url'] = $this->storeImage($request) ?? $data['image_url'];

        NewsPost::create($data);

        return redirect()->route('admin.news.index')->with('status', 'News post created.');
    }

    public function edit(NewsPost $news)
    {
        return view('admin.news.edit', ['newsPost' => $news]);
    }

    public function update(Request $request, NewsPost $news)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'excerpt' => ['required', 'string'],
            'body' => ['nullable', 'string'],
            'image_url' => ['nullable', 'url'],
            'image_file' => ['nullable', 'image', 'max:2048'],
            'published_at' => ['nullable', 'date'],
            'is_published' => ['nullable'],
        ]);

        $data['slug'] = Str::slug($data['title']);
        $data['is_published'] = $request->boolean('is_published');
        $data['image_url'] = $this->storeImage($request) ?? $data['image_url'];

        $news->update($data);

        return redirect()->route('admin.news.index')->with('status', 'News post updated.');
    }

    public function destroy(NewsPost $news)
    {
        $news->delete();

        return redirect()->route('admin.news.index')->with('status', 'News post deleted.');
    }

    private function storeImage(Request $request): ?string
    {
        if (! $request->hasFile('image_file')) {
            return null;
        }

        $path = $request->file('image_file')->store('uploads/news', 'public');

        return Storage::url($path);
    }
}
