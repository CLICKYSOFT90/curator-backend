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
        Schema::create('curator_campaigns', function (Blueprint $table) {
            $table->unsignedInteger('id', true);
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('campaign_id');
            $table->text('link')->nullable()->default(null);
            $table->text('audio');
            $table->string('cover_image', 255)->nullable()->default(null);
            $table->tinyInteger('is_released')->nullable()->default(1);
            $table->date('release_date');
            $table->string('artist_name', 255);
            $table->string('feature_artist', 255)->nullable()->default(null);
            $table->string('track_title', 255);
            $table->enum('release_type', ['Official Release', 'Remix', 'Cover', 'Unfinished Demo']);
            $table->tinyInteger('has_lyrics')->nullable()->default(0);
            $table->longText('lyrics')->nullable()->default(null);
            $table->tinyInteger('is_explicit')->nullable()->default(0);
            $table->string('instrumental_lease', 255)->nullable()->default(null);
            $table->tinyInteger('share_youtube')->nullable()->default(0);
            $table->tinyInteger('is_custom_pitch')->nullable()->default(0);
            $table->text('pitch')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curator_campaigns');
    }
};
