<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('videos', function(Blueprint $table){
            $table->increments('id');
            $table->string('url');
            $table->string('title');
            $table->string('description');
            $table->string('size',20);
            $table->string('extension',20);
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
        Schema::drop('videos');
    }
}
