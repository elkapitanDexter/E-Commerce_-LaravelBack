<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class businessImages extends Model
{
    protected $table = 'business_images';
    protected $primaryKey = 'businessImgID';
    protected $fillable = ['bi_productID','bi_name','bi_path','bi_dateTimeAdded','bi_mainImg'];

    use HasFactory;
}
