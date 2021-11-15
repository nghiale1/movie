<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie', function (Blueprint $table) {
            $table->bigIncrements('id_mv');
            $table->string('mv_name');
            $table->string('director');
            $table->text('perfomer');
            $table->string('timemv')->nullable();
            $table->text('mv_content')->nullable();
            $table->string('image')->nullable();
            $table->string('trailer')->nullable();
            $table->string('made_in')->nullable();
            $table->boolean('subdub')->nullable();
            $table->date('date_start')->nullable();
            $table->date('date_end')->nullable();
            $table->bigInteger('id_typemv')->unsigned();
            $table->foreign('id_typemv')->references('id_typemv')->on('type_movie')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_language')->unsigned();
            $table->foreign('id_language')->references('id_language')->on('language')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_format')->unsigned();
            $table->foreign('id_format')->references('id_format')->on('format')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_user')->nullable()->unsigned();
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('movie');
    }
}