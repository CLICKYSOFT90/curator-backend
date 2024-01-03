<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $table = 'users';

    const ROLES = [
        'Artist',
        'Label',
        'Curator',
        'Influencer'
    ];

    const ARTIST        = 'Artist';
    const LABEL         = 'Label';
    const CURATOR       = 'Curator';
    const INFLUENCER    = 'Influencer';

    const ARTIST_ID     = 1;
    const LABEL_ID      = 2;
    const CURATOR_ID    = 3;
    const INFLUENCER_ID = 4;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role_id',
        'country_id',
        'first_name',
        'last_name',
        'display_name',
        'email',
        'password',
        'verification_code',
        'is_active',
        'is_verified',
        'date_of_birth',
        'profile_image',
        'cover_image',
        'about_me',
        'coins',
        'spotify_link',
        'youtube_link',
        'soundcloud_link',
        'facebook_link',
        'twitter_link',
        'instagram_link',
        'tiktok_link',
        'website_link',
        'platform_type',
        'followers',
        'referred',
        'is_completed',
        'instagram_followers',
        'tiktok_followers',
        'availability',
        'from_date',
        'to_date'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function password(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Hash::make($value),
        );
    }

    protected function profileImage(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => !empty($value) ? asset('storage/assets/images/profile-images/'.$value) : asset('assets/front/images/profile-images/default.png'),
        );
    }

    protected function coverImage(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => !empty($value) ? $value : 'default.png',
        );
    }

    public function getFullNameAttribute() {
        return $this->first_name. ' ' . $this->last_name;
    }

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeIsActive($query)
    {
        return $query->where('is_active', 1);
    }

    public function scopeIsVerified($query)
    {
        return $query->where('is_verified', 1);
    }

    public function scopeIsCompleted($query)
    {
        return $query->where('is_completed', 1);
    }

    public function getCountry()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function userGenres(){
        return $this->hasMany(UserFavoriteGenre::class,'user_id');
    }

}
