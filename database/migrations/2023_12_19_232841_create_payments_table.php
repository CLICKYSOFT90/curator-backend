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
        Schema::create('payments', function (Blueprint $table) {
            $table->unsignedInteger('id', true);
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('country_id')->nullable();
            $table->string('state', 100)->nullable();
            $table->string('zip_code', 10)->nullable();
            $table->enum('payment_type', ['Stripe', 'Paypal']);
            $table->string('transaction_id', 255);
            $table->double('amount', 8, 2)->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
