<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'prodID';
    protected $fillable = ['productName','productDescription','left','price','supplierName','supplierAddress','Email','dateSupplied'];
    
    use HasFactory;
}
