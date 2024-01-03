<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PlayListingFloorCampaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'campaign_days',
        'coins_per_month',
        'price_per_month',
        'coins_per_week',
        'price_per_week',
        'added_by',
        'is_active'
    ];
}
