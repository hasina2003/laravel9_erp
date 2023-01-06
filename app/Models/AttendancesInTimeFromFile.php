<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendancesInTimeFromFile extends Model
{
    use HasFactory;
     protected $fillable = [
        'emp_id',
        'att_in_time',
        'att_status'
     ];
}