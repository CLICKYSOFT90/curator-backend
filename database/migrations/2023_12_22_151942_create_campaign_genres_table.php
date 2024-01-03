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
        Schema::create('campaign_genres', function (Blueprint $table) {
            $table->unsignedInteger('id', true);
            $table->unsignedInteger('campaign_id');
            $table->unsignedInteger('campaign_detail_id');
            $table->unsignedInteger('genre_id');
            $table->unsignedInteger('sub_genre_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaign_genres');
    }
};
