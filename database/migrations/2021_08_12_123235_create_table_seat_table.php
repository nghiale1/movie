<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSeatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seat', function (Blueprint $table) {
            $table->bigIncrements('id_seat');
            $table->string('seat_name');
            $table->bigInteger('id_typeseat')->unsigned();
            $table->foreign('id_typeseat')->references('id_typeseat')->on('type_seat')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_room')->unsigned();
            $table->foreign('id_room')->references('id_room')->on('room')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('seat');
    }
}
