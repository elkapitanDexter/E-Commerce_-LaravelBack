<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class businessVideos extends Model
{
    protected $table = 'business_videos';
    protected $primaryKey = 'businessVideoID';
    protected $fillable = ['bv_businessID','bv_name','bv_path','bv_dateTimeAdded','bv_mainVid'];

    use HasFactory;
}
