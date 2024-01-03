<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GlobalSetting extends Model
{
    protected $table = 'global_settings';

    protected $fillable = [
        'basic_info',
        'contact_email',
        'facebook_link',
        'twitter_link',
        'instagram_link'
    ];
}