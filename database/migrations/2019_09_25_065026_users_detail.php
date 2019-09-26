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
            $table->int('nik');
            $table->int('nip');
            $table->string('name',200);
            $table->string('address',255);
            $table->string('gender',191);
            $table->string('phone',191);
          //relasi  $table->string('institute_id',191);
        
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
