<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotos', function(Blueprint $table){

            $table->increments('idFoto');
            $table->string('name');
            $table->string('ruta');
            $table->integer('album_id')->unsigned();
            
            $table->foreign('album_id')->references('id')->on('albums');
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
        Schema::drop('albums');
    }
}
