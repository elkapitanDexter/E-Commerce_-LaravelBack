<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $table = 'Businesses';
    protected $primaryKey = 'businessID';
    protected $fillable = ['businessOwnerID','businessName','businessBackground','businessAddress','licenseNumber','licenseDateExpiry','businessContactNo1','businessContactNo2','businessEmail','businessFBLink'];
    
    use HasFactory;
}
