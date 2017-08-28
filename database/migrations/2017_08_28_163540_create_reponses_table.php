<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('reponses', function (Blueprint $table) {
         $table->engine = 'InnoDB';
         $table->increments('id_reponse');
         $table->string('reponse');
         $table->integer('id_user')->unsigned();
         $table->foreign('id_user')
         ->references('id_user')->on('users')
         ->onDelete('cascade');
         $table->integer('id_post')->unsigned();
         $table->foreign('id_post')
         ->references('id_post')->on('posts')
         ->onDelete('cascade');
          $table->timestamp('date_reponse');


       });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::drop('reponses');
     }
  }
