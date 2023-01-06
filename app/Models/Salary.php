<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;
    protected $fillable = [
        'emp_id',
        'salary_year',
        'salary_month',
        'emp_basic',
        'emp_house_rent',
        'emp_medical_allowance',
        'emp_overtime_allowance',
        'emp_holiday_allowance',
        'emp_offday_allowance',
        'emp_leave_allowance',
        'emp_special_allowance',
        'emp_gross',
        'emp_advance_amount',
        'emp_total_late_day',
        'emp_total_overtime_hour',
        'emp_net_amount'
     ];

    public function employee(){
        return $this->belongsTo('App\Models\Employee', 'emp_id', 'id');
    }
    
}
