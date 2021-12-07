<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTicketMvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_ticket_mv', function (Blueprint $table) {
            $table->id('dtmv_id');
            $table->integer('dtmv_price');
            $table->bigInteger('id_st')->unsigned();
            $table->foreign('id_st')->references('id_st')->on('showtime')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_seat')->unsigned();
            $table->foreign('id_seat')->references('id_seat')->on('seat')->onDelete('cascade')->onUpdate('cascade');
            // $table->integer('dtmv_status')->default();
            $table->bigInteger('id_pay')->unsigned();
            $table->foreign('id_pay')->references('id_pay')->on('payment')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('detail_ticket_mv');
    }
}
