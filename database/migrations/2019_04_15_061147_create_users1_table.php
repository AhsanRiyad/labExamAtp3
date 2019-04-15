<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('dafault');
            $table->string('password')->default('dafault');
            $table->string('email')->default('dafault');
            $table->string('company_name')->default('dafault');
            $table->string('mobile')->default('dafault');
            $table->string('type')->default('admin');

            $table->timestamps();
        });


        Schema::create('admin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('password');
            $table->string('email');
            $table->string('type')->default('admin');

            $table->timestamps();
        });


        Schema::create('job', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('title');
            $table->string('location');
            $table->string('company_name');
            $table->string('salary');

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
        Schema::dropIfExists('employee');
        Schema::dropIfExists('admin'); 
        Schema::dropIfExists('job');
    }
}
