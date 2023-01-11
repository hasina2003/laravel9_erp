<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('emp_code')->nullable();
            $table->string('emp_name');
            $table->string('emp_father_name')->nullable();
            $table->string('emp_mother_name')->nullable();
            $table->date('emp_dob')->nullable();
            $table->string('emp_gender')->nullable();
            $table->string('emp_nationality')->nullable();
            $table->string('emp_permanent_house')->nullable();
            $table->string('emp_permanent_po')->nullable();
            $table->string('emp_permanent_ps')->nullable();
            $table->string('emp_permanent_district')->nullable();
            $table->string('emp_present_house')->nullable();
            $table->string('emp_present_po')->nullable();
            $table->string('emp_present_ps')->nullable();
            $table->string('emp_present_district')->nullable();
            $table->string('emp_photo')->default('default.png');
            $table->unsignedBigInteger('dept_id')->default(0);
            $table->unsignedBigInteger('desig_id')->default(0);
            $table->date('emp_joining_date')->nullable();
            $table->unsignedBigInteger('emp_salary_grade_id')->default(0);
            $table->decimal('emp_basic')->default(0);
            $table->decimal('emp_house_rent')->default(0);
            $table->decimal('emp_medical_allowance')->default(0);
            $table->decimal('emp_late_deduction_amount')->default(0);
            $table->decimal('emp_overtime_allowance')->default(0);
            $table->decimal('emp_holiday_allowance')->default(0);
            $table->decimal('emp_offday_allowance')->default(0);
            $table->decimal('emp_leave_allowance')->default(0);
            $table->decimal('emp_special_allowance')->default(0);
            $table->decimal('emp_gross')->default(0);
            $table->decimal('emp_advance_amount')->default(0);
            $table->string('emp_advance_amount_month')->default('no');
            $table->Integer('emp_advance_amount_year')->default(0);
            $table->Integer('emp_total_late_day')->default(0);
            $table->string('emp_total_late_day_month')->default('no');
            $table->Integer('emp_total_late_day_year')->default(0);
            $table->decimal('emp_total_overtime_hour')->default(0);
            $table->string('emp_total_overtime_hour_month')->default('no');
            $table->Integer('emp_total_overtime_hour_year')->default(0);
            $table->Integer('emp_total_non_paid_leave_day')->default(0);
            $table->decimal('emp_leave_deduction_amount')->default(0);
            $table->string('emp_leave_deduction_month')->default('no');
            $table->Integer('emp_leave_deduction_year')->default(0);
            $table->string('emp_blood_group');
            $table->string('emp_status');
            $table->Integer('active_status')->default(0);
            $table->foreign('dept_id')->references('id')->on('departments')->onDelete('cascade');
            $table->foreign('desig_id')->references('id')->on('designations')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
