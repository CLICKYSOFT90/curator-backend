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
        Schema::create('faqs', function (Blueprint $table) {
            $table->unsignedInteger('id', true);
            $table->text('question');
            $table->text('answer');
            $table->tinyInteger('is_active')->nullable()->default(1);
            $table->tinyInteger('is_popular')->nullable()->default(0);
            $table->tinyInteger('is_global')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faqs');
    }
};
