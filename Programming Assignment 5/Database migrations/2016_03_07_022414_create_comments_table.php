<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('comments', function (Blueprint $table){
            $table->increments('id');
            $table->integer('post_id');
            $table->integer('user_id');
            $table->integer('to_comment_user_id');
            $table->text('content');
            $table->timestamps('comment_time');
            $table->integer('attach_id');
            
            //$table->foreign('post_id')->references('post_id')->on('posts');
            //$table->foreign('user_email')->references('email')->on('users');
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
        Schema::drop('comments');
    }
}
