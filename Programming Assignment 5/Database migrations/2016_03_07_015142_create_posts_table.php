<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('posts', function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->string('title',100);
            $table->text('content');
            $table->time('post_time');
            $table->integer('reply_count');
            $table->integer('read_count');
            $table->integer('attach_id');
            $table->timestamps();        

            //$table->foreign('user_id')->references('id')->on('users');
            //$table->foreign('attach_id')->references('id')->on('attaches');
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
        Schema::drop('posts');
    }
}
