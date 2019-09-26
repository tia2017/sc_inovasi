<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pilars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('pilars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',191);
            $table->string('desciption',500);
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
        Schema::dropIfExists('pilars');
    }
}
