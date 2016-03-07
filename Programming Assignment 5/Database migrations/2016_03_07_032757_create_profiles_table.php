<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('profiles', function(Blueprint $table){
            $table->integer('user_id');
            $table->integer('field_id');
            $table->string('field_data');
            $table->enum('privacy',['seeable to self', 'seeable to all']);
            $table->timestamps();
            $table->primary(['user_id','field_id']);
            //$table->foreign('field_id')->references('id')->on('profileSettings');
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
        Schema::drop('profiles');
        
    }
}
