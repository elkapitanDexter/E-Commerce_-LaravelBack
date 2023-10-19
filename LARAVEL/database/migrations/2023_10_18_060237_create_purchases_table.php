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
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('purchaseID')->unique();
            $table->integer('pur_userID');
            $table->integer('pur_productID');
            $table->text('pur_productName');
            $table->text('pur_productDescription');
            $table->text('pur_variationSelected');
            $table->text('pur_quantity');
            $table->float('pur_price', 8,2);
            $table->text('pur_dateTimeAdded');
            $table->text('pur_paymentMethod');
            $table->text('pur_paymentCenter')->nullable();
            $table->text('pur_bankName');
            $table->float('pur_total', 8,2);
            $table->float('pur_shippingTotal', 8,2);
            $table->text('pur_shippingDate');
            $table->text('pur_deliveryServiceName')->nullable();
            $table->text('pur_deliveryTrackingNo')->nullable();
            $table->text('pur_shippingExpectedArrival');
            $table->text('pur_dateTimeArrived');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
