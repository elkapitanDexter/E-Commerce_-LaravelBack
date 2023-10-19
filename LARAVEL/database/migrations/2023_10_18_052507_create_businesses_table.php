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
        Schema::create('businesses', function (Blueprint $table) {
            $table->increments('businessID')->unique();
            $table->integer('businessOwnerID');
            $table->text('businessName');
            $table->text('businessBackground');
            $table->text('businessAddress');
            $table->text('licenseNumber');
            $table->text('licenseDateExpiry');
            $table->text('businessContactNo1');
            $table->text('businessContactNo2')->nullable();
            $table->text('businessEmail')->nullable();
            $table->text('businessFBLink')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};
