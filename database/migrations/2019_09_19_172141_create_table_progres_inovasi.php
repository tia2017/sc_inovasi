<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProgresInovasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progres_inovasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_inovasi')->unsigned();
            $table->bigInteger('id_status')->unsigned();
            $table->integer('progres');
            $table->text('foto');
            $table->text('keterangan');
            $table->timestamps();

            $table->foreign('id_inovasi')->references('id')->on('inovasi');
            $table->foreign('id_status')->references('id')->on('status_inovasi');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('progres_inovasi');
    }
}
