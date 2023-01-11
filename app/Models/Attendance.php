<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
     protected $fillable = [
        'emp_id',
        'att_year',
        'att_month',
        'att_date',
        'att_start_time',
        'att_end_time',
        'att_late_count',
        'att_overtime_hour',
        'att_status',
        'edit_date',
        'leavetype_id'
     ];

     public function employee(){
        return $this->belongsTo('App\Models\Employee', 'emp_id', 'id');
    }



}
