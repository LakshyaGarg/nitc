<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pName');
            $table->text('pDescription')->nullable();
            $table->integer('pType')->unsigned();
            $table->integer('visibility')->unsigned();
            $table->integer('superVisor')->unsigned();
            $table->integer('status')->unsigned();
            $table->timestamps();
        });

        Schema::table('projects',function($table){
            $table->foreign('pType')->references('id')->on('projecttypes');
            $table->foreign('visibility')->references('id')->on('visibilities');
            $table->foreign('superVisor')->references('id')->on('users');
            $table->foreign('status')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projects');
    }
}
