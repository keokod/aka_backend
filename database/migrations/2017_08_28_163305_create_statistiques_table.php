<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatistiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('statistiques', function (Blueprint $table) {
         $table->engine = 'InnoDB';
         $table->increments('id_stat');
         $table->integer('id_user')->unsigned();
         $table->foreign('id_user')
         ->references('id_user')->on('users')
         ->onDelete('cascade');
         $table->integer('nb_reponse');
         $table->integer('nb_question');
         $table->integer('nb_resolu');

       });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::drop('statistiques');
     }
   }
