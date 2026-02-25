<?php

namespace App\Http\Controllers;

use App\Models\NewsPost;

class NewsController extends Controller
{
    public function index()
    {
        $news = NewsPost::published()
            ->orderByDesc('published_at')
            ->orderByDesc('created_at')
            ->get();

        return view('news', compact('news'));
    }
}
