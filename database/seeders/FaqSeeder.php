<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'question' => "What is Lorem Ipsum?",
                'answer' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsumhas been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled.",
                'is_active' => 1,
                'is_popular' => 1,
                'is_global' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id'=>2,
                'question' => "Why do we use it?",
                'answer' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsumhas been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled.",
                'is_active' => 1,
                'is_popular' => 1,
                'is_global' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id'=>3,
                'question' => "What does it comes from?",
                'answer' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsumhas been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled.",
                'is_active' => 1,
                'is_popular' => 1,
                'is_global' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];

        Faq::insert($data);

    }
}
