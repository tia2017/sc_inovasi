<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InnovationSteps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('innovation_steps', function (Blueprint $table) {
            $table->bigIncrements('id');
         //   $table->string('innovation_id',255);
          //  $table->string('steps_id',100);
            $table->string('explanation',255);
            $table->string('file',191);
       
            $table->timestamps();
         

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
