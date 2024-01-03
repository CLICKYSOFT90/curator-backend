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
        Schema::create('set_individual_coins', function (Blueprint $table) {
            $table->unsignedInteger('id', true);
            $table->double('coins', 8, 2);
            $table->integer('elite')->default(0);
            $table->integer('user_type')->default(0);
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
        Schema::dropIfExists('set_individual_coins');
    }
};
