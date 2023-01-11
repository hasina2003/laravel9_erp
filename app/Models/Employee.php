<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
     protected $fillable = [
        'emp_code',
        'emp_name',
        'emp_father_name',
        'emp_mother_name',
        'emp_dob',
        'emp_gender',
        'emp_nationality',
        'emp_permanent_house',
        'emp_permanent_po',
        'emp_permanent_ps',
        'emp_permanent_district',
        'emp_present_house',
        'emp_present_po',
        'emp_present_ps',
        'emp_present_district',
        'emp_photo',
        'dept_id',
        'desig_id',
        'emp_joining_date',
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
        'emp_advance_amount_month',
        'emp_advance_amount_year',
        'emp_total_late_day',
        'emp_total_late_day_month',
        'emp_total_late_day_year',
        'emp_total_overtime_hour',
        'emp_total_overtime_hour_month',
        'emp_total_overtime_hour_year',
        'emp_blood_group',
        'emp_status',
        'active_status'
     ];


    public function department(){
        return $this->belongsTo('App\Models\Department', 'dept_id', 'id');
    }
    public function designation(){
        return $this->belongsTo('App\Models\Designation', 'desig_id', 'id');
    }
}
