<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin\Threshold;

class ThresholdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    const THRESHOLDS = [
        [
            'tier'                  => 'Small Tier',
            'price'                 => 2.50,
            'coins'                 => 5,
            'tiktok_plays_min'      => 0,
            'tiktok_plays_max'      => 1000,
            'story_views_min'       => 0,
            'story_views_max'       => 2000,
            'reels_views_min'       => 0,
            'reels_views_max'       => 2500,
            'instagram_posts_min'   => 0,
            'instagram_posts_max'   => 500
        ],
        [
            'tier'                  => 'Medium Tier',
            'price'                 => 7.50,
            'coins'                 => 15,
            'tiktok_plays_min'      => 1000,
            'tiktok_plays_max'      => 10000,
            'story_views_min'       => 2000,
            'story_views_max'       => 5000,
            'reels_views_min'       => 2500,
            'reels_views_max'       => 15000,
            'instagram_posts_min'   => 500,
            'instagram_posts_max'   => 1000
        ],
        [
            'tier'                  => 'Large Tier',
            'price'                 => 12.50,
            'coins'                 => 25,
            'tiktok_plays_min'      => 10000,
            'tiktok_plays_max'      => 30000,
            'story_views_min'       => 5000,
            'story_views_max'       => 8000,
            'reels_views_min'       => 15000,
            'reels_views_max'       => 30000,
            'instagram_posts_min'   => 1000,
            'instagram_posts_max'   => 3000
        ],
        [
            'tier'                  => 'Large Tier',
            'price'                 => 17.50,
            'coins'                 => 35,
            'tiktok_plays_min'      => 30000,
            'tiktok_plays_max'      => 50000,
            'story_views_min'       => 8000,
            'story_views_max'       => 15000,
            'reels_views_min'       => 30000,
            'reels_views_max'       => 50000,
            'instagram_posts_min'   => 3000,
            'instagram_posts_max'   => 8000
        ],
        [
            'tier'                  => 'Large Tier',
            'price'                 => 25.00,
            'coins'                 => 50,
            'tiktok_plays_min'      => 50000,
            'tiktok_plays_max'      => 80000,
            'story_views_min'       => 15000,
            'story_views_max'       => 20000,
            'reels_views_min'       => 50000,
            'reels_views_max'       => 80000,
            'instagram_posts_min'   => 8000,
            'instagram_posts_max'   => 15000
        ],
        [
            'tier'                  => 'Large Tier',
            'price'                 => 35.00,
            'coins'                 => 70,
            'tiktok_plays_min'      => 80000,
            'tiktok_plays_max'      => 100000,
            'story_views_min'       => 20000,
            'story_views_max'       => 25000,
            'reels_views_min'       => 80000,
            'reels_views_max'       => 100000,
            'instagram_posts_min'   => 15000,
            'instagram_posts_max'   => 20000
        ],
        [
            'tier'                  => 'Mega Tier',
            'price'                 => 50.00,
            'coins'                 => 100,
            'tiktok_plays_min'      => 100000,
            'tiktok_plays_max'      => 250000,
            'story_views_min'       => 25000,
            'story_views_max'       => 35000,
            'reels_views_min'       => 100000,
            'reels_views_max'       => 250000,
            'instagram_posts_min'   => 20000,
            'instagram_posts_max'   => 30000
        ],
        [
            'tier'                  => 'A-List Tier',
            'price'                 => 100.00,
            'coins'                 => 200,
            'tiktok_plays_min'      => '250000+',
            'tiktok_plays_max'      => '',
            'story_views_min'       => '35000+',
            'story_views_max'       => '',
            'reels_views_min'       => '250000+',
            'reels_views_max'       => '',
            'instagram_posts_min'   => '30000+',
            'instagram_posts_max'   => ''
        ],
    ];

    public function run(): void
    {
        foreach(self::THRESHOLDS as $key => $value) {
            Threshold::create([
                'tier'                  => $value['tier'],
                'price'                 => $value['price'],
                'coins'                 => $value['coins'],
                'tiktok_plays_min'      => $value['tiktok_plays_min'],
                'tiktok_plays_max'      => $value['tiktok_plays_max'],
                'story_views_min'       => $value['story_views_min'],
                'story_views_max'       => $value['story_views_max'],
                'reels_views_min'       => $value['reels_views_min'],
                'reels_views_max'       => $value['reels_views_max'],
                'instagram_posts_min'   => $value['instagram_posts_min'],
                'instagram_posts_max'   => $value['instagram_posts_max']
            ]);
        }
    }
}
