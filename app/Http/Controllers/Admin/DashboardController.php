<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\NewsPost;
use App\Models\Project;
use App\Models\Service;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'services' => Service::count(),
            'projects' => Project::count(),
            'news' => NewsPost::count(),
            'messages' => ContactMessage::count(),
            'unread_messages' => ContactMessage::where('is_read', false)->count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
