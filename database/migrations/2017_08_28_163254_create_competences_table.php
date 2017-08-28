<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('competences', function (Blueprint $table) {
               $table->engine = 'InnoDB';
               $table->increments('id_competence');
               $table->string('nom_competence');
               });

     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::drop('competences');
     }
 }
