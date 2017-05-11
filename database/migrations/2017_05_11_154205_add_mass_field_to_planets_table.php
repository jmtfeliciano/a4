<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMassFieldToPlanetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up() {
           Schema::table('planets', function (Blueprint $table) {
               $table->double('mass');
           });
      }






      public function down() {
        	Schema::table('planets', function (Blueprint $table) {
        		$table->dropColumn('mass');
   	      });
      }
}
