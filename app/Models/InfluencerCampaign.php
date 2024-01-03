<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InfluencerCampaign extends Model
{
    protected $table = 'influencer_campaigns';

    const PLATFORM_TYPES = [
        'TikTok',
        'Instagram',
        'Both'
    ];

    const LOCATIONS = [
        'Global',
        'North America'
    ];

    const INFLUENCER_CATEGORIES = [
        'LGBTQ+',
        'Religion',
        'Cosplay',
        'Cars',
        'Education',
        'Food / Beverage',
        'Fitness',
        'Nature',
        'Lip Syncing',
        'Dancing',
        'Fashion',
        'Makeup',
        'Gaming',
        'Memes/Trends',
        'Pets',
        'Sports Highlights',
        'Arts & Crafts',
        'Reaction Videos',
        'Other'
    ];

    const TIKTOK = 'TikTok';

    const INSTAGRAM = 'Instagram';

    const BOTH = 'Both';

    protected $fillable = [
        'user_id',
        'campaign_id',
        'song_language_id',
        'platform_type',
        'tiktok_account_link',
        'tiktok_reel_link',
        'instagram_account_link',
        'instagram_reel_link',
        'artist_name',
        'feature_artist',
        'track_title',
        'location',
        'influencer_category',
        'has_concept',
        'concept',
        'concept_link',
        'has_tag_account',
        'has_tag_account_link',
        'has_hashtag',
        'hashtag'
    ];
}