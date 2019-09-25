<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_akun', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama',255);
            $table->string('username',100);
            $table->string('password',100);
            $table->string('role',25);
            $table->string('remember_token',25);
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_akun');
    }
}
