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
        Schema::create('admins', function (Blueprint $table) {
            $table->unsignedInteger('id', true);
            $table->string('username', 255);
            $table->string('email', 255)->unique();
            $table->string('password', 255);
            $table->string('profile_image', 255)->nullable()->default(null);
            $table->string('verification_code', 50)->nullable();
            $table->tinyInteger('is_active')->nullable()->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
