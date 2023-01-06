<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'product_name',
        // 'cat_id',
        // 'product_code',
        // 'product_image'
        'product_name',
        'description',
        'brand',
        'price',
        'quantity',       
        'product_code',
        'barcode',
        'alert_stock',
        'product_image',
        'cat_id'
     ];
}
