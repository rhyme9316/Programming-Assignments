<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('profileSettings', function(Blueprint $table){
             $table->increments('id');
             $table->string('field_name',120);
             $table->boolean('visiable');
             $table->boolean('editable');
             $table->boolean('required');
             $table->string('form_type',20);
             $table->text('form_default_value');
             $table->string('validation');
             $table->string('tips');
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
        //
        Schema::drop('profileSettings');
    }
}
