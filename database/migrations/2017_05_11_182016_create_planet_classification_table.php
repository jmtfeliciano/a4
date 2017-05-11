<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanetClassificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('planet_classification', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();

            $table->integer('planet_id')->unsigned();
            $table->integer('classification_id')->unsigned();



            $table->foreign('planet_id')->references('id')->on('planets');
            $table->foreign('classification_id')->references('id')->on('classifications');


       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('planet_classification');
    }
}
