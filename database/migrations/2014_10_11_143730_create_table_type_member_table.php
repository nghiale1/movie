<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTypeMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_member', function (Blueprint $table) {
            $table->bigIncrements('id_typemem');
            $table->string('typemem_name');
            $table->bigInteger('id_discount')->unsigned();
            $table->foreign('id_discount')->references('id_discount')->on('discount')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_benefit')->unsigned();
            $table->foreign('id_benefit')->references('id_benefit')->on('benefit')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_memcard')->unsigned();
            $table->foreign('id_memcard')->references('id_memcard')->on('membership_card')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('type_member');
    }
}
