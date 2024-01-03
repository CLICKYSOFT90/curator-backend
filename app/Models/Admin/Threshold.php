<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Threshold extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'tier',
        'price',
        'coins',
        'tiktok_plays_min',
        'tiktok_plays_max',
        'story_views_min',
        'story_views_max',
        'reels_views_min',
        'reels_views_max',
        'instagram_posts_min',
        'instagram_posts_max',
        'added_by',
        'is_active'
    ];
}
