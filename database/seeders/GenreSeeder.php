<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'name' => 'Hip Hop',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pop',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'R&B',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Rock',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Country / Folk',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Alternative / Indie',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Lofi / Lounge / Ambient',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'EDM',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'House/Techno',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jazz',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Reggae',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Disco / Funk',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Other',
                'created_at' => date('Y-m-d H:i:s')
            ],
        ];

        Genre::insert($data);
    }
}