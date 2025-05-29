<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GoogleMeet;

class GoogleMeetSeeder extends Seeder
{
    public function run()
    {
        $links = [
            'https://meet.google.com/aaa-bbbb-ccc1',
            'https://meet.google.com/aaa-bbbb-ccc2',
            'https://meet.google.com/aaa-bbbb-ccc3',
            'https://meet.google.com/aaa-bbbb-ccc4',
            'https://meet.google.com/aaa-bbbb-ccc5',
            'https://meet.google.com/aaa-bbbb-ccc6',
        ];

        foreach ($links as $link) {
            GoogleMeet::create(['link' => $link]);
        }
    }
}
