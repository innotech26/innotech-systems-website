<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' => 'Web Development',
                'description' => 'Responsive, high-performance websites using Laravel, Node.js, and React.',
                'image_url' => 'https://images.unsplash.com/photo-1487014679447-9f8336841d58?auto=format&fit=crop&w=800&q=80',
                'sort_order' => 1,
                'is_published' => true,
            ],
            [
                'title' => 'Mobile Apps',
                'description' => 'Cross-platform (Android & iOS) applications developed using Flutter.',
                'image_url' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?auto=format&fit=crop&w=800&q=80',
                'sort_order' => 2,
                'is_published' => true,
            ],
            [
                'title' => 'Desktop Apps',
                'description' => 'Custom desktop solutions tailored to organizational workflows.',
                'image_url' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80',
                'sort_order' => 3,
                'is_published' => true,
            ],
            [
                'title' => 'Graphic & UI/UX',
                'description' => 'Digital branding, user interface design, and promotional creatives.',
                'image_url' => 'https://images.unsplash.com/photo-1526498460520-4c246339dccb?auto=format&fit=crop&w=800&q=80',
                'sort_order' => 4,
                'is_published' => true,
            ],
            [
                'title' => 'AI & Data Analytics',
                'description' => 'AI-assisted reporting and intelligent insights for decision-making.',
                'image_url' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80',
                'sort_order' => 5,
                'is_published' => true,
            ],
            [
                'title' => 'API Integration',
                'description' => 'Seamless system automation and secure data flow via APIs.',
                'image_url' => 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=800&q=80',
                'sort_order' => 6,
                'is_published' => true,
            ],
            [
                'title' => 'IT Training',
                'description' => 'Practical training programs building real-world technical skills.',
                'image_url' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=800&q=80',
                'sort_order' => 7,
                'is_published' => true,
            ],
            [
                'title' => 'ICT Supply',
                'description' => 'Supply and support of computers, networking equipment, and hardware.',
                'image_url' => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=800&q=80',
                'sort_order' => 8,
                'is_published' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                ['slug' => Str::slug($service['title'])],
                $service + ['slug' => Str::slug($service['title'])]
            );
        }
    }
}
