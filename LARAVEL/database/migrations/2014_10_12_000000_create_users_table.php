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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('uType')->nullable(); // buyer, seller, buyer and seller
            $table->string('name');
            $table->string('email')->unique();
            $table->string('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone');
            $table->string('gender');
            $table->string('dateOfBirth');
            $table->string('cardNumber')->nullable();
            $table->string('cardExpiryDate')->nullable();
            $table->string('cardName')->nullable();
            $table->integer('cardCVV')->nullable();
            $table->integer('cardCVC')->nullable();
            $table->string('deliveryAddress')->nullable();
            $table->string('deliveryPhone')->nullable();
            $table->string('deliveryRegion')->nullable();
            $table->string('deliveryProvince')->nullable();
            $table->string('deliveryCity')->nullable();
            $table->string('deliveryBarangay')->nullable();
            $table->string('deliveryPostal')->nullable();
            $table->string('deliveryStreetBldgHouse')->nullable();
            $table->string('imageName')->nullable();
            $table->string('imagePath')->nullable();
            $table->integer('blocked')->nullable();
            $table->integer('blockByAdminID')->nullable();
            $table->integer('lightMode')->nullable(); // 0 - Light Mode, 1 - Dark Mode
            $table->date('dateAttempts')->nullable();
            $table->integer('numberOfAttempts')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
