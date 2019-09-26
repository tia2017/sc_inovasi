<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Partners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('partners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255);
            $table->string('form',191);
            $table->string('specializations',191);
            $table->string('address',255);
            $table->string('phone',191);
            $table->string('email',191);
            $table->string('remember_token',25);
            $table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
