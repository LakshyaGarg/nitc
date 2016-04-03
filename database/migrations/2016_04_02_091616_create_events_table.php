<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('addedBy')->unsigned();
            $table->text('description')->nullable();
            $table->date('date');
            $table->time('time');
            $table->string('venue');
            $table->integer('project')->unsigned();
            $table->timestamps();
            

        });
        Schema::table('events',function($table){
            $table->foreign('addedBy')->references('id')->on('users');
            $table->foreign('project')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('events');
    }
}
