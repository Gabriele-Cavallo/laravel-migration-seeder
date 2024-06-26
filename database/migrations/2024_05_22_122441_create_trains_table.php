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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50);  
            $table->string('departure_station', 50);  
            $table->string('arrival_station', 50);   
            $table->date('travel_day');
            $table->time('departure_time', $precision = 0);
            $table->time('arrival_time', $precision = 0);
            $table->smallInteger('train_number')->unsigned();
            $table->tinyInteger('carriages')->unsigned();
            $table->tinyInteger('delay')->unsigned()->default(0);
            $table->tinyInteger('status')->unsigned()->default(1);
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
        Schema::dropIfExists('trains');
    }
};


