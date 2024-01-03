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
        Schema::create('play_listing_floor_campaigns', function (Blueprint $table) {
            $table->unsignedInteger('id', true);
            $table->integer('campaign_days');
            $table->double('coins_per_month', 8, 2);
            $table->double('price_per_month', 8, 2);
            $table->double('coins_per_week', 8, 2);
            $table->double('price_per_week', 8, 2);
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
        Schema::dropIfExists('play_listing_floor_campaigns');
    }
};
