<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchases extends Model
{
    protected $table = 'purchases';
    protected $primaryKey = 'purchaseID';
    protected $fillable = ['pur_userID','pur_productID','pur_productName','pur_productDescription','pur_variationSelected','pur_quantity','pur_price','pur_dateTimeAdded','pur_paymentMethod','pur_paymentCenter','pur_bankName','pur_total','pur_shippingTotal','pur_shippingDate','pur_deliveryServiceName','pur_deliveryTrackingNo','pur_shippingExpectedArrival','pur_dateTimeArrived'];

    use HasFactory;
}
