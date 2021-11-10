<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTicketMvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_mv', function (Blueprint $table) {
            $table->bigIncrements('id_ticketmv');
            $table->float('price');
            $table->bigInteger('id_mv')->unsigned();
            $table->foreign('id_mv')->references('id_mv')->on('movie')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('ticket_mv');
    }
}
