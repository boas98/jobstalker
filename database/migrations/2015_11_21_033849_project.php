<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Project extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project',function($table){
            $table->increments('id');
            $table->integer('id_user');
            $table->string('title');
            $table->text('desc');
            $table->string('skill');
            $table->integer('budget');
            $table->integer('deadline');
            $table->integer('category');
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
        Schema::drop('project');
    }
}
