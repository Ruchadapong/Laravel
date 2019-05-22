<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('booking_email')->nullable();
            $table->string('booking_name')->nullable();
            $table->string('booking_tel')->nullable();
            $table->string('booking_time')->nullable();
            $table->string('room_id')->nullable();
            $table->string('treat_id')->nullable();
            $table->string('package_id')->nullable();
            $table->string('emp_id')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('bookings');
    }
}
