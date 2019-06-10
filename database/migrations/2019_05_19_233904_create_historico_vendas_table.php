<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricoVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historico_vendas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cartao_credito_id')->unsigned();
            $table->foreign('cartao_credito_id')->references('id')->on('cartao_creditos')->onDelete('cascade');
            $table->integer('ingresso_id')->unsigned();
            $table->foreign('ingresso_id')->references('id')->on('ingressos')->onDelete('cascade');
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
        Schema::dropIfExists('historico_vendas');
    }
}
