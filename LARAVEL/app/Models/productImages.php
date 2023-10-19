<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productImages extends Model
{
    protected $table = 'product_images';
    protected $primaryKey = 'productImgID';
    protected $fillable = ['pi_productID','pi_name','pi_path','pi_dateTimeAdded','pi_mainImg'];

    use HasFactory;
}
