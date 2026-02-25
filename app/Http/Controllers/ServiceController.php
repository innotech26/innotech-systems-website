<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::published()
            ->orderBy('sort_order')
            ->orderBy('title')
            ->get();

        return view('services', compact('services'));
    }
}
