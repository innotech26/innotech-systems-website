<?php

namespace App\Http\Controllers;

use App\Models\NewsPost;
use App\Models\Project;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::published()
            ->orderBy('sort_order')
            ->orderBy('title')
            ->take(4)
            ->get();

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

        return view('welcome', compact('services', 'projects', 'news'));
    }
}
