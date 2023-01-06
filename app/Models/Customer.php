<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use DB;
class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'cust_name',
        'cust_email',
        'cust_phone',
        'cust_address',
        'shopname',
        'cust_photo',
        'account_holder',
        'account_name',
        'bank_name',
        'bank_branch',
        'city'
     ];
}
