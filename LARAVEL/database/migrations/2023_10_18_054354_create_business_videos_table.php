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
        Schema::create('business_videos', function (Blueprint $table) {
            $table->increments('businessVideoID')->unique();
            $table->integer('bv_businessID');
            $table->text('bv_name');
            $table->text('bv_path');
            $table->text('bv_dateTimeAdded');
            $table->integer('bv_mainVid')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_videos');
    }
};
