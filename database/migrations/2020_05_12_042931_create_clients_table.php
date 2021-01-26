<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->string('comments')->nullable();
            $table->integer('guests')->default(1);
            $table->foreignId('room_id')->default(1);
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->boolean('pet')->default(false);
            $table->boolean('breakfast')->default(false);
            $table->integer('price')->default(85);
            $table->integer('total_price')->nullable();
            $table->date('check_in_date')->default(Carbon::today());
            $table->date('check_out_date')->default(Carbon::tomorrow());
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
        Schema::dropIfExists('clients');
    }
}