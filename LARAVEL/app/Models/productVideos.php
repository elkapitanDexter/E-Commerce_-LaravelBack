<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productVideos extends Model
{
    protected $table = 'product_videos';
    protected $primaryKey = 'productVideoID';
    protected $fillable = ['pv_productID','pv_name','pv_path','pv_dateTimeAdded','pv_mainVid'];

    use HasFactory;
}
