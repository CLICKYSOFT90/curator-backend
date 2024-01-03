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
        Schema::create('countries', function (Blueprint $table) {
            $table->unsignedInteger('id', true);
            $table->string('sort', 255)->nullable()->default(null);
            $table->string('country_name', 255)->nullable()->default(null);
            $table->string('phone_code', 255)->nullable()->default(null);
            $table->string('flag', 255)->nullable()->default(null);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
