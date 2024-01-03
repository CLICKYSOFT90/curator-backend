<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $table = 'campaigns';

    const SUBMISSION_TYPES = [
        'Curator',
        'Influencer',
        'PlayListing Floor'
    ];

    const SUBMIT_OPTIONS = [
        'Manually',
        'Automated'
    ];

    const STATUSES = [
        'Draft',
        'Completed'
    ];

    const CURATOR = 'Curator';

    const INFLUENCER = 'Influencer';

    const PLAY_LISTING_FLOOR = 'PlayListing Floor';

    const MANUALLY = 'Manually';

    const AUTOMATED = 'Automated';

    const DRAFT = 'Draft';

    const COMPLETED = 'Completed';

    protected $fillable = [
        'user_id',
        'submission_type',
        'submit_option',
        'status'
    ];

    public function scopeIsCurator($query)
    {
        return $query->where('submission_type', self::CURATOR);
    }

    public function scopeIsInfluencer($query)
    {
        return $query->where('submission_type', self::INFLUENCER);
    }

    public function scopeIsPlayListing($query)
    {
        return $query->where('submission_type', self::PLAY_LISTING_FLOOR);
    }

    public function getCuratorCampaignDetail(){
        return $this->hasOne(CuratorCampaign::class);
    }

    public function getInfluencerCampaignDetail(){
        return $this->hasOne(InfluencerCampaign::class);
    }
    public function userCampaignResponse(){
        return $this->hasMany(CampaignSubmittedUser::class)->where('status','!=','Pending');
    }
    public function userCampaignApprove(){
        return $this->hasMany(CampaignSubmittedUser::class)->whereIn('status',['Approved','Shared']);
    }

}