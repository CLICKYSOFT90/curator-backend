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
        Schema::create('influencer_campaigns', function (Blueprint $table) {
            $table->unsignedInteger('id', true);
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('campaign_id');
            $table->unsignedInteger('song_language_id');
            $table->enum('platform_type', ['TikTok', 'Instagram', 'Both'])->nullable()->default('TikTok');
            $table->string('tiktok_account_link', 255)->nullable()->default(null);
            $table->string('tiktok_reel_link', 255)->nullable()->default(null);
            $table->string('instagram_account_link', 255)->nullable()->default(null);
            $table->string('instagram_reel_link', 255)->nullable()->default(null);
            $table->string('artist_name', 255);
            $table->string('feature_artist', 255)->nullable()->default(null);
            $table->string('track_title', 255);
            $table->enum('location', ['Global', 'North America'])->nullable()->default('Global');
            $table->enum('influencer_category', ['LGBTQ+', 'Religion', 'Cosplay', 'Cars', 'Education', 'Food / Beverage', 'Fitness', 'Nature', 'Lip Syncing', 'Dancing', 'Fashion', 'Makeup', 'Gaming', 'Memes/Trends', 'Pets', 'Sports Highlights', 'Arts & Crafts', 'Reaction Videos', 'Other'])->nullable()->default('Other');
            $table->tinyInteger('has_concept')->nullable()->default(0);
            $table->text('concept')->nullable()->default(null);
            $table->text('concept_link')->nullable()->default(null);
            $table->tinyInteger('has_tag_account')->nullable()->default(0);
            $table->string('has_tag_account_link', 255)->nullable()->default(null);
            $table->tinyInteger('has_hashtag')->nullable()->default(0);
            $table->text('hashtag')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('influencer_campaigns');
    }
};
