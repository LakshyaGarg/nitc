<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fileName')->nullable();
            $table->integer('uploadedBy')->unsigned();
            $table->text('description')->nullable();
            $table->integer('project')->unsigned();
            $table->integer('visibility')->unsigned();  
            $table->timestamps();
        });

        Schema::table('files',function($table){
            $table->foreign('uploadedBy')->references('id')->on('users');
            $table->foreign('project')->references('id')->on('projects');
            $table->foreign('visibility')->references('id')->on('visibilities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('files');
    }
}
