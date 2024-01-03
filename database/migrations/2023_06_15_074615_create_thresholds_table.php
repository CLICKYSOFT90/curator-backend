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
        Schema::create('thresholds', function (Blueprint $table) {
            $table->unsignedInteger('id', true);
            $table->string('tier', 255)->nullable()->default(null);
            $table->double('price', 8, 2);
            $table->double('coins', 8, 2);
            $table->string('tiktok_plays_min', 255)->nullable()->default(null);
            $table->string('tiktok_plays_max', 255)->nullable()->default(null);
            $table->string('story_views_min', 255)->nullable()->default(null);
            $table->string('story_views_max', 255)->nullable()->default(null);
            $table->string('reels_views_min', 255)->nullable()->default(null);
            $table->string('reels_views_max', 255)->nullable()->default(null);
            $table->string('instagram_posts_min', 255)->nullable()->default(null);
            $table->string('instagram_posts_max', 255)->nullable()->default(null);
            $table->unsignedInteger('added_by')->default(0);
            $table->tinyInteger('is_active')->nullable()->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thresholds');
    }
};
