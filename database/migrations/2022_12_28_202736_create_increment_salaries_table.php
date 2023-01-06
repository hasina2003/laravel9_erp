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
        Schema::create('increment_salaries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('emp_id');
            $table->decimal('incre_amount');
            $table->string('incre_year');
            $table->string('incre_month');
            $table->string('incre_date');
            $table->text('incre_reason');
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
        Schema::dropIfExists('increment_salaries');
    }
};
