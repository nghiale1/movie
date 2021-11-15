<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner', function (Blueprint $table) {
            $table->bigIncrements('id_banner');
            $table->string('banner_img');
            $table->bigInteger('id_mv')->nullable()->unsigned();
            $table->foreign('id_mv')->references('id_mv')->on('movie')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_user')->nullable()->unsigned();
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *`
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banner');
    }
}