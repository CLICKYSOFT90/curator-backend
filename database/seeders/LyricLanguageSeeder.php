<?php

namespace Database\Seeders;

use App\Models\LyricLanguage;
use Illuminate\Database\Seeder;

class LyricLanguageSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'name' => 'Latin',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'French',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Dutch',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Arab',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'German',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Korean',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Japanese',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cantonese',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Indian',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Russian',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Australian',
                'created_at' => date('Y-m-d H:i:s')
            ]
        ];

        LyricLanguage::insert($data);
    }
}