<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInovasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inovasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_inovasi',255);
            $table->string('perangkat_daerah',255);
            $table->string('jenis_inovasi',255);
            $table->string('pilar_smart_city',255);
            $table->text('file');
            $table->text('keterangan');
            $table->text('penjelasan');
            $table->text('manfaat');
            $table->text('keunikan');
            $table->text('potensi');
            $table->text('strategi');
            $table->text('analisis');
            $table->string('sumber_daya',255);
            $table->timestamps();
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('user_akun');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inovasi');
    }
}
