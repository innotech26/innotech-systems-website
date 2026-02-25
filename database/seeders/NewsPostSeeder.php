<?php

namespace Database\Seeders;

use App\Models\NewsPost;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NewsPostSeeder extends Seeder
{
    public function run(): void
    {
        $news = [
            [
                'title' => 'New AI Reporting Module Released',
                'excerpt' => 'Automated analytics to help teams make faster, data-driven decisions.',
                'body' => 'We have launched a new AI reporting module that provides automated analytics and insight dashboards for leadership teams.',
                'image_url' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1200&q=80',
                'is_published' => true,
                'published_at' => now()->subDays(1),
            ],
            [
                'title' => 'Government Service Portal Phase 2',
                'excerpt' => 'Expanded features for online permits and digital document processing.',
                'body' => 'Phase 2 introduces online permits, improved tracking, and digital document processing for agencies.',
                'image_url' => 'https://images.unsplash.com/photo-1556761175-129418cb2dfe?auto=format&fit=crop&w=1200&q=80',
                'is_published' => true,
                'published_at' => now()->subDays(8),
            ],
            [
                'title' => 'Partnering With Local Universities',
                'excerpt' => 'Supporting internships and mentorships for emerging tech talent.',
                'body' => 'We are partnering with local universities to support internships and mentorships for upcoming tech talent.',
                'image_url' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1200&q=80',
                'is_published' => true,
                'published_at' => now()->subDays(20),
            ],
        ];

        foreach ($news as $post) {
            NewsPost::updateOrCreate(
                ['slug' => Str::slug($post['title'])],
                $post + ['slug' => Str::slug($post['title'])]
            );
        }
    }
}
