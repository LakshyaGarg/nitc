<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('name');
            $table->string('password');
            $table->string('right');
            $table->integer('type')->unsigned();
            $table->string('profilePic')->nullable();
            $table->string('publication')->nullable();
            $table->string('weblink')->nullable();
            $table->date('dob')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('users',function($table){
            $table->foreign('type')->references('id')->on('usertypes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
