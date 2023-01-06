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
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('emp_id')->default(0);
            $table->unsignedBigInteger('dept_id')->default(0);
            $table->unsignedBigInteger('desig_id')->default(0);
            $table->string('salary_year');
            $table->string('salary_month');
            $table->decimal('emp_basic')->default(0);
            $table->decimal('emp_house_rent')->default(0);
            $table->decimal('emp_medical_allowance')->default(0);
            $table->decimal('emp_overtime_allowance')->default(0);
            $table->decimal('emp_holiday_allowance')->default(0);
            $table->decimal('emp_offday_allowance')->default(0);
            $table->decimal('emp_leave_allowance')->default(0);
            $table->decimal('emp_special_allowance')->default(0);
            $table->decimal('emp_gross')->default(0);
            $table->decimal('emp_advance_amount')->default(0);
            $table->Integer('emp_total_late_day')->default(0);
            $table->decimal('emp_total_overtime_hour')->default(0);
            $table->decimal('emp_net_amount')->default(0);
            $table->foreign('emp_id')->references('id')->on('employees')->onDelete('cascade');
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
        Schema::dropIfExists('salaries');
    }
};
