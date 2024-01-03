<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('song_submissions', function (Blueprint $table) {
            $table->unsignedInteger('id', true);
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('package_id')->nullable()->default(null);
            $table->enum('submission_type', ['Curator', 'Influencer', 'Artist']);
            $table->enum('audio_type', ['Link', 'Upload'])->nullable()->default(null);
            $table->text('audio')->nullable()->default(null);
            $table->string('cover_image', 255)->nullable()->default(null);
            $table->tinyInteger('is_released')->nullable()->default(0);
            $table->date('released_date')->nullable()->default(null);
            $table->string('artist_name', 255);
            $table->string('track_title', 255);
            $table->enum('release_type', ['Official Release', 'Remix', 'Cover', 'Unfinished Demo'])->nullable()->default(null);
            $table->tinyInteger('has_lyrics')->nullable()->default(0);
            $table->string('lyrics_language', 255)->nullable()->default(null);
            $table->text('lyrics')->nullable()->default(null);
            $table->tinyInteger('is_explicit')->nullable()->default(0);
            $table->string('instrumental_lease', 255)->nullable()->default(null);
            $table->string('permission_youtubers', 255)->nullable()->default(null);
            $table->text('pitch')->nullable()->default(null);
            $table->enum('submit_type', ['Submit Manually', 'Automate'])->nullable()->default(null);
            $table->enum('platform_type', ['TikTok', 'Instagram', 'Both'])->nullable()->default(null);
            $table->string('tiktok_account_link', 255)->nullable()->default(null);
            $table->string('tiktok_reel_link', 255)->nullable()->default(null);
            $table->string('instagram_account_link', 255)->nullable()->default(null);
            $table->string('instagram_reel_link', 255)->nullable()->default(null);
            $table->string('influencer_type', 255)->nullable()->default(null);
            $table->string('concept_reference_link', 255)->nullable()->default(null);
            $table->string('location', 255)->nullable()->default(null);
            $table->tinyInteger('has_concept')->nullable()->default(0);
            $table->text('concept')->nullable()->default(null);
            $table->tinyInteger('has_tag')->nullable()->default(0);
            $table->string('tag_account_link', 255)->nullable()->default(null);
            $table->tinyInteger('has_hashtag')->nullable()->default(0);
            $table->string('hashtag', 255)->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('song_submissions');
    }
};
