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

            $table->bigInteger('institute_id')->unsigned();
            $table->foreign('institute_id')->references('id')->on('institutes')->onDelete('cascade');
            $table->bigInteger('innovation_type_id')->unsigned();
            $table->foreign('innovation_type_id')->references('id')->on('types')->onDelete('cascade');
            $table->bigInteger('pilar_id')->unsigned();
            $table->foreign('pilar_id')->references('id')->on('pilars')->onDelete('cascade');
            $table->bigInteger('created_by')->unsigned();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');

            $table->string('description',255);
            $table->string('benefit',255);
            $table->string('unique_creativity',255);
            $table->string('potency',255);
            $table->string('strategy',255);
            $table->string('risk_analysis',255);
            $table->string('resource',255);
            $table->date('date');
            $table->string('verification_status',191);
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
        Schema:dropIfExists('innovations');

    }
}
