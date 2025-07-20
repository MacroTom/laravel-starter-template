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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->uuid('uid')->unique();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('reference');
            $table->string('ext_reference')->nullable();
            $table->string('currency');
            $table->string('amount');
            $table->string('payment_provider');
            $table->string('channel')->nullable();
            $table->string('type');
            $table->string('comment')->nullable();
            $table->json('payload');
            $table->string('payment_link')->nullable();
            $table->string('mode')->nullable();
            $table->string('status');
            $table->timestamp('failed_at')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
