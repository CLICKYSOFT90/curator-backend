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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->unsignedInteger('id', true);
            $table->unsignedInteger('user_id');
            $table->enum('submission_type', ['Curator', 'Influencer', 'PlayListing Floor'])->nullable()->default('Curator');
            $table->enum('submit_option', ['Manually', 'Automated'])->nullable()->default('Automated');
            $table->enum('status', ['Draft', 'Completed'])->nullable()->default('Draft');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
