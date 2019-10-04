<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InnovationPartners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('innovation_partners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('innovation_id')->unsigned();
            $table->bigInteger('partner_id')->unsigned();
            $table->foreign('innovation_id')->references('id')->on('innovations')->onDelete('cascade');
            $table->foreign('partner_id')->references('id')->on('partners')->onDelete('cascade');
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
        Schema::dropIfExists('innovation_partners');
    }
}
