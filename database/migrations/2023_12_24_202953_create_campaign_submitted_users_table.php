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
        Schema::create('campaign_submitted_users', function (Blueprint $table) {
            $table->unsignedInteger('id', true);
            $table->unsignedInteger('campaign_id');
            $table->unsignedInteger('user_id');
            $table->enum('submission_type', ['Curator', 'Influencer', 'PlayListing Floor'])->nullable()->default('Curator');
            $table->string('listing_message', 255)->nullable()->default(null);
            $table->string('activity_message', 255)->nullable()->default(null);
            $table->string('add_to_playlist', 255)->nullable()->default(null);
            $table->enum('will_share', ['Day', 'Week', 'Month', 'Custom'])->nullable()->default(null);
            $table->date('will_share_date')->nullable()->default(null);
            $table->text('feedback')->nullable()->default(null);
            $table->text('about')->nullable()->default(null);
            $table->enum('shared_on', ['Spotify', 'Youtube', 'Blogs', 'Tiktok', 'Instagram', 'Twitter', 'SoundCloud'])->nullable()->default(null);
            $table->text('shared_link')->nullable()->default(null);
            $table->enum('status', ['Pending', 'Listening', 'Approved', 'Rejected', 'Shared', 'Expired'])->nullable()->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaign_submitted_users');
    }
};
