<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('stories',function(Blueprint $table){
            $table->increments('id');
            $table->timestamps();
            $table->string('title');
            $table->string('story');
            $table->integer('location_id')->unsigned();
            $table->boolean('published');
        });

        Schema::table('stories', function($table){
            $table->foreign('location_id')->references('id')->on('locations');
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
        Schema::dropIfExists('stories');
    }
}
