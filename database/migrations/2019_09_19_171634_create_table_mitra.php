<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMitra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitra', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bentuk_mitra',255);
            $table->string('nama_mitra',255);
            $table->bigInteger('id_inovasi')->unsigned();
            $table->timestamps();

            $table->foreign('id_inovasi')->references('id')->on('inovasi');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mitra');
    }
}
