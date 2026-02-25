<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderByDesc('created_at')->get();

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'summary' => ['required', 'string'],
            'category' => ['nullable', 'string', 'max:255'],
            'image_url' => ['nullable', 'url'],
            'image_file' => ['nullable', 'image', 'max:2048'],
            'published_at' => ['nullable', 'date'],
            'is_featured' => ['nullable'],
            'is_published' => ['nullable'],
        ]);

        $data['slug'] = Str::slug($data['title']);
        $data['is_featured'] = $request->boolean('is_featured');
        $data['is_published'] = $request->boolean('is_published');
        $data['image_url'] = $this->storeImage($request) ?? $data['image_url'];

        Project::create($data);

        return redirect()->route('admin.projects.index')->with('status', 'Project created.');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'summary' => ['required', 'string'],
            'category' => ['nullable', 'string', 'max:255'],
            'image_url' => ['nullable', 'url'],
            'image_file' => ['nullable', 'image', 'max:2048'],
            'published_at' => ['nullable', 'date'],
            'is_featured' => ['nullable'],
            'is_published' => ['nullable'],
        ]);

        $data['slug'] = Str::slug($data['title']);
        $data['is_featured'] = $request->boolean('is_featured');
        $data['is_published'] = $request->boolean('is_published');
        $data['image_url'] = $this->storeImage($request) ?? $data['image_url'];

        $project->update($data);

        return redirect()->route('admin.projects.index')->with('status', 'Project updated.');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.projects.index')->with('status', 'Project deleted.');
    }

    private function storeImage(Request $request): ?string
    {
        if (! $request->hasFile('image_file')) {
            return null;
        }

        $path = $request->file('image_file')->store('uploads/projects', 'public');

        return Storage::url($path);
    }
}
