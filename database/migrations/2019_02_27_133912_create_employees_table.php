<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_name')->nullable();
            $table->string('emp_description')->nullable();
            $table->string('emp_time_start')->nullable();
            $table->string('emp_time_end')->nullable();
            $table->string('emp_image')->nullable();
            $table->string('emp_email')->nullable();
            $table->string('emp_facebook')->nullable();
            $table->string('emp_line')->nullable();
            $table->string('emp_tel')->nullable();
            $table->boolean('status')->nullable();
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
}
