<?php

namespace Database\Seeders;

use App\Models\ContactMessage;
use Illuminate\Database\Seeder;

class ContactMessageSeeder extends Seeder
{
    public function run(): void
    {
        ContactMessage::updateOrCreate(
            ['email' => 'client@example.com', 'message' => 'We need a new website for our organization.'],
            [
                'name' => 'Jane Client',
                'phone' => '+265 999000111',
                'service' => 'Web Development',
                'is_read' => false,
            ]
        );

        ContactMessage::updateOrCreate(
            ['email' => 'partner@example.com', 'message' => 'Interested in API integration for payments.'],
            [
                'name' => 'Peter Partner',
                'phone' => '+265 888123456',
                'service' => 'API Integration',
                'is_read' => true,
            ]
        );
    }
}
