<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 255)->nullable(false);

            $table->integer('faixa_etaria_id')->unsigned();
            $table->foreign('faixa_etaria_id')->references('id')->on('faixa_etaria');

            $table->integer('classe_evento_id')->unsigned();
            $table->foreign('classe_evento_id')->references('id')->on('classe_evento');

            $table->integer('cidade_id')->unsigned();
            $table->foreign('cidade_id')->references('id')->on('cidades');

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
        Schema::dropIfExists('evento');
    }
}
