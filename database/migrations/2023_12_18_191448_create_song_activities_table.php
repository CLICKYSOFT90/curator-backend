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
        Schema::create('song_activities', function (Blueprint $table) {
            $table->unsignedInteger('id', true);
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('song_id');
            $table->string('name', 255)->nullable()->default(null);
            $table->text('message');
            $table->tinyInteger('song_event')->nullable()->default(0)->comment('0-play song, 1-thumbs up, 2- thumbs down');
            $table->enum('share', ['Day','Week','Month','Custom'])->nullable()->default('Day');
            $table->date('share_date');
            $table->text('feedback');
            $table->string('about', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('song_activities');
    }
};
