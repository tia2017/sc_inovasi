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

        Schema::create('innovation_steps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('innovation_id')->unsigned();
            $table->foreign('innovation_id')->references('id')->on('innovations')->onDelete('cascade');
            $table->bigInteger('step_id')->unsigned();
            $table->foreign('step_id')->references('id')->on('steps')->onDelete('cascade');
            $table->string('explaination',255);
            $table->string('file',191);
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
        Schema::dropIfExists('innovation_steps');
    }
}
