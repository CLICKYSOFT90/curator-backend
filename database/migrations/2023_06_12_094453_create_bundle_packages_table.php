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
        Schema::create('bundle_packages', function (Blueprint $table) {
            $table->unsignedInteger('id', true);
            $table->string('package_name', 255)->nullable()->default(null);
            $table->double('package_price', 8, 2);
            $table->unsignedInteger('added_by')->default(0);
            $table->double('coins', 8, 2);
            $table->tinyInteger('is_active')->nullable()->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bundle_packages');
    }
};
