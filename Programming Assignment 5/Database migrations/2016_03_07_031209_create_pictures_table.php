<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pictures',function(Blueprint $table){
            $table->increments('id');
            $table->string('url');
            $table->string('title');
            $table->string('description');
            $table->string('size');
            $table->string('extension',20);
            //$table->timestamps('create_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('pictures');
    }
}
