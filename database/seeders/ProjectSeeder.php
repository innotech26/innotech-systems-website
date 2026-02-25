<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Digital Service Portal',
                'summary' => 'Citizen-facing portal for online submissions, payments, and case tracking.',
                'category' => 'Government',
                'image_url' => 'https://images.unsplash.com/photo-1487058792275-0ad4aaf24ca7?auto=format&fit=crop&w=1200&q=80',
                'is_featured' => true,
                'is_published' => true,
                'published_at' => now()->subDays(10),
            ],
            [
                'title' => 'Healthcare Data System',
                'summary' => 'Secure patient workflows with analytics dashboards for leadership.',
                'category' => 'Health',
                'image_url' => 'https://images.unsplash.com/photo-1581091012184-5c56d69a3e5d?auto=format&fit=crop&w=1200&q=80',
                'is_featured' => true,
                'is_published' => true,
                'published_at' => now()->subDays(18),
            ],
            [
                'title' => 'SME Commerce Suite',
                'summary' => 'Inventory, sales, and payment integrations for local businesses.',
                'category' => 'Retail',
                'image_url' => 'https://images.unsplash.com/photo-1556761175-129418cb2dfe?auto=format&fit=crop&w=1200&q=80',
                'is_featured' => false,
                'is_published' => true,
                'published_at' => now()->subDays(25),
            ],
        ];

        foreach ($projects as $project) {
            Project::updateOrCreate(
                ['slug' => Str::slug($project['title'])],
                $project + ['slug' => Str::slug($project['title'])]
            );
        }
    }
}
