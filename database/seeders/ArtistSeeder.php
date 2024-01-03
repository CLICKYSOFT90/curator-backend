<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ArtistSeeder extends Seeder
{
    public function run()
    {
        $profile = asset('/assets/demo-profile-images/1.jpeg');
        $cover = asset('/assets/demo-cover-images/1.jpeg');

        $profilePicPath = storage_path('app/public/assets/images/profile-images/');
        $coverPicPath = storage_path('app/public/assets/images/cover-images/');

        if(!File::isDirectory($profilePicPath)) {
            File::makeDirectory($profilePicPath, 0777, true, true);
        }

        if(!File::isDirectory($coverPicPath)) {
            File::makeDirectory($coverPicPath, 0777, true, true);
        }

        $profileImageName = time(). '.jpg';
        $coverImageName = time(). '.jpg';
        Image::make($profile)->save($profilePicPath.'/'.$profileImageName);
        Image::make($cover)->save($coverPicPath.'/'.$coverImageName);

        User::create([
            'role_id' => User::ARTIST_ID,
            'country_id' => 22,
            'first_name' => 'J.',
            'last_name' => 'Cole',
            'display_name' => 'J.Cole',
            'email' => 'artist@test.com',
            'password' => '123',
            'date_of_birth' => '1996-11-13',
            'profile_image' => $profileImageName,
            'cover_image' => $coverImageName,
            'about_me' => 'Ipsa laudantium molestias eos sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam recusandae alias error harum maxime adipisci amet laborum. Perspiciatis minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit quibusdam sed amet tempora.',
            'coins' => '0.00',
            'spotify_link' => 'https://google.com/',
            'youtube_link' => 'https://google.com/',
            'soundcloud_link' => 'https://google.com/',
            'facebook_link' => 'https://google.com/',
            'twitter_link' => 'https://google.com/',
            'instagram_link' => 'https://google.com/',
            'tiktok_link' => 'https://google.com/',
            'website_link' => 'https://google.com/',
            'is_active' => 1,
            'is_verified' => 1,
            'is_completed' => 1
        ]);
    }
}