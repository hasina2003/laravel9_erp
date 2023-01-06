<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;
    protected $fillable = [
        'emp_id',
        'leave_type_id',
        'leave_from',
        'leave_to',
        'leave_total_day'
        
     ];
   
}
