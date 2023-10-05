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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('prodID')->unique();
            $table->text('productName');
            $table->text('productDescription');
            $table->integer('left');
            $table->float('price', 8,2);
            $table->text('supplierName');
            $table->text('supplierAddress');
            $table->text('Email');
            $table->datetime('dateSupplied');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
