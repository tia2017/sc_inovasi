<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Institutes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('institutes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('short_name',255);
            $table->string('name',100);
            $table->string('address',100);
            $table->string('phone',25);
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
        Schema::dropIfExists('institutes');
    }
}
