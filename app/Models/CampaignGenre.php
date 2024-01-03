<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampaignGenre extends Model
{
    protected $table = 'campaign_genres';

    protected $fillable = [
        'campaign_id',
        'campaign_detail_id',
        'genre_id',
        'sub_genre_id'
    ];
}