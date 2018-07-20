<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('gender',['M','F','O']);
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('address');
            $table->integer('nationality_id')->unsigned();
            $table->string('date_of_birth');
            $table->integer('faculty_id')->unsigned();
            $table->integer('module_id')->unsigned();
            $table->timestamps();

            $table->foreign('nationality_id')->references('id')->on('nationalities');
            $table->foreign('faculty_id')->references('id')->on('faculties');
            $table->foreign('module_id')->references('id')->on('modules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
