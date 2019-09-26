<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('users_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nik');
            $table->integer('nip');
            $table->string('name',200);
            $table->string('address',255);
            $table->string('gender',191);
            $table->string('phone',191);
            $table->bigInteger('institute_id')->unsigned();
            $table->foreign('institute_id')->references('id')->on('institutes');
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
        Schema::dropIfExists('users_detail');
    }
}
