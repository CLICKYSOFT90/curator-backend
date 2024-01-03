<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->unsignedInteger('id', true);
            $table->unsignedInteger('role_id')->default(0);
            $table->unsignedInteger('country_id')->nullable()->default(0);
            $table->string('first_name', 255)->nullable()->default(null);
            $table->string('last_name', 255)->nullable()->default(null);
            $table->string('display_name', 255)->nullable()->default(null);
            $table->string('email', 255)->unique();
            $table->string('password', 255);
            $table->string('verification_code', 50)->nullable();
            $table->tinyInteger('is_active')->nullable()->default(0);
            $table->tinyInteger('is_verified')->nullable()->default(0);
            $table->date('date_of_birth')->nullable()->default(null);
            $table->string('profile_image', 255)->nullable()->default(null);
            $table->string('cover_image', 255)->nullable()->default(null);
            $table->longText('about_me')->nullable()->default(null);
            $table->double('coins', 8, 2)->nullable()->default(0);
            $table->text('spotify_link')->nullable()->default(null);
            $table->text('youtube_link')->nullable()->default(null);
            $table->text('soundcloud_link')->nullable()->default(null);
            $table->text('facebook_link')->nullable()->default(null);
            $table->text('twitter_link')->nullable()->default(null);
            $table->text('instagram_link')->nullable()->default(null);
            $table->text('tiktok_link')->nullable()->default(null);
            $table->text('website_link')->nullable()->default(null);
            $table->enum('platform_type', ['Blogs','Instagram Editor','Twitter','Spotify Playlist','Youtuber','Soundcloud Repost','Tiktok','Facebook','Both'])->nullable()->default(null);
            $table->integer('followers')->nullable()->default(0);
            $table->integer('instagram_followers')->nullable()->default(0);
            $table->integer('tiktok_followers')->nullable()->default(0);
            $table->integer('referred')->nullable()->default(0);
            $table->tinyInteger('is_completed')->nullable()->default(0);
            $table->tinyInteger('availability')->nullable()->default(null);
            $table->date('from_date')->nullable()->default(null);
            $table->date('to_date')->nullable()->default(null);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
