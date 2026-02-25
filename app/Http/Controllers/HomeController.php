<?php

namespace App\Http\Controllers;

use App\Models\NewsPost;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::published()
            ->orderByDesc('is_featured')
            ->orderByDesc('published_at')
            ->orderByDesc('created_at')
            ->take(3)
            ->get();

        $news = NewsPost::published()
            ->orderByDesc('published_at')
            ->orderByDesc('created_at')
            ->take(3)
            ->get();

        return view('welcome', compact('projects', 'news'));
    }
}
