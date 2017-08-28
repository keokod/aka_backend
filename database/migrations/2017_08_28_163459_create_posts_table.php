<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('posts', function (Blueprint $table) {
         $table->engine = 'InnoDB';
         $table->increments('id_post');
         $table->integer('id_user')->unsigned();
         $table->foreign('id_user')
         ->references('id_user')->on('users')
         ->onDelete('cascade');
         $table->string('sujet');
         $table->boolean('resolu');
         $table->string('description');
         $table->timestamp('date_post');
       });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::drop('posts');
     }
 }
