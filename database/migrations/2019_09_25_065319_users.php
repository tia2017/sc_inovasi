<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('users', function (Blueprint $table) {
                    $table->bigIncrements('id');
                    $table->string('name',255);
                    $table->string('email',100);
                    $table->string('password',100);
                    $table->bigInteger('role_id')->unsigned();
                    $table->bigInteger('user_id')->unsigned();
                    $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
                    $table->foreign('user_id')->references('id')->on('users_detail')->onDelete('cascade');
                    $table->string('remember_token',25);
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
        Schema::dropIfExists('users');
    }
}
