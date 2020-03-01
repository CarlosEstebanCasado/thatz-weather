<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemperaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temperatures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('city',50)->unique();
            $table->string('cp',5);
            $table->unsignedSmallInteger('actual_temp');
            $table->unsignedSmallInteger('day_1_temp')->length(4);
            $table->unsignedSmallInteger('day_2_temp')->length(4);
            $table->unsignedSmallInteger('day_3_temp')->length(4);
            $table->unsignedSmallInteger('day_4_temp')->length(4);
            $table->unsignedSmallInteger('day_5_temp')->length(4);
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
        Schema::dropIfExists('temperatures');
    }
}
