<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDiscountForMemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discount_for_mem', function (Blueprint $table) {
            $table->bigInteger('id_discount')->unsigned();
            $table->foreign('id_discount')->references('id_discount')->on('discount')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_typemem')->unsigned();
            $table->foreign('id_typemem')->references('id_typemem')->on('type_member')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('discount_for_mem');
    }
}
