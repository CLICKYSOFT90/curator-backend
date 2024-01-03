<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampaignSubmittedUser extends Model
{
    protected $table = 'campaign_submitted_users';

    const SUBMISSION_TYPES = [
        'Curator',
        'Influencer',
        'PlayListing Floor'
    ];

    const WILL_SHARE = [
        'Day',
        'Week',
        'Month',
        'Custom'
    ];

    const SHARED_ON = [
        'Spotify',
        'Youtube',
        'Blogs',
        'Tiktok',
        'Instagram',
        'Twitter',
        'SoundCloud'
    ];

    const STATUSES = [
        'Pending',
        'Listening',
        'Approved',
        'Rejected',
        'Shared',
        'Expired'
    ];

    const CURATOR = 'Curator';

    const INFLUENCER = 'Influencer';

    const PLAY_LISTING_FLOOR = 'PlayListing Floor';

    const PENDING = 'Pending';

    const LISTENING = 'Listening';

    const APPROVED = 'Approved';

    const REJECTED = 'Rejected';

    const SHARED = 'Shared';

    const EXPIRED = 'Expired';

    protected $fillable = [
        'campaign_id',
        'user_id',
        'submission_type',
        'listing_message',
        'activity_message',
        'add_to_playlist',
        'will_share',
        'will_share_date',
        'feedback',
        'about',
        'shared_on',
        'shared_link',
        'status'
    ];


    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function scopeIsCurator($query)
    {
        return $query->where('submission_type', self::CURATOR);
    }

    public function getCuratorCampaignDetail(){
        return $this->belongsTo(CuratorCampaign::class,'campaign_id','id');
    }

}