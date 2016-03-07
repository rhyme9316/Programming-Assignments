<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('attaches', function(Blueprint $table){
            $table->increments('id');
            $table->string('attach_type',20);
            $table->integer('user_id');
            $table->integer('source_id');
            $table->timestamps('create_time');
            
            //$table->foreign('user_id')->references('id')->on('users');    
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
        Schema::drop('attaches');
    }
}
