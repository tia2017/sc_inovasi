<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Innovations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 
        Schema::create('innovations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255);
            //$table->string('institue_id',100);
            //$table->string('innovation_type_id',100);
            //$table->string('pilar_id',100);
            //$table->string('created_by_id',100);
            $table->string('description',255);
            $table->string('benefit',255);
            $table->string('unique_creativity',255);
            $table->string('potency',255);
            $table->string('strategy',255);
            $table->string('risk_analysis',255);
            $table->string('resource',255);
            $table->date('date');
            $table->string('verification_status',191);
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
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
