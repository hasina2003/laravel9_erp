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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('emp_id');
            $table->string('att_year');
            $table->string('att_month');
            $table->date('att_date');
            $table->datetime('att_start_time')->nullable();
            $table->datetime('att_end_time')->nullable();
            $table->Integer('att_late_count')->nullable();
            $table->decimal('att_overtime_hour')->nullable();
            $table->string('att_status');
            $table->string('edit_date')->nullable();
            $table->string('leavetype_id')->nullable();
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
        Schema::dropIfExists('attendances');
    }
};
