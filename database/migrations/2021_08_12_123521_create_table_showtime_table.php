<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableShowtimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showtime', function (Blueprint $table) {
            $table->bigIncrements('id_st');
            $table->dateTime('datetime');
            $table->bigInteger('id_mv')->unsigned();
            $table->foreign('id_mv')->references('id_mv')->on('movie')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_room')->unsigned();
            $table->foreign('id_room')->references('id_room')->on('room')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_typest')->unsigned();
            $table->foreign('id_typest')->references('id_typest')->on('type_showtime')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('showtime');
    }
}