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
        Schema::create('chats', function (Blueprint $table) {
            $table->unsignedInteger('id', true);
            $table->unsignedInteger('sender_id');
            $table->unsignedInteger('receiver_id');
            $table->tinyInteger('is_media')->nullable()->default(0);
            $table->string('media', 255)->nullable()->default(null);
            $table->text('message');
            $table->tinyInteger('seen')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chats');
    }
};
