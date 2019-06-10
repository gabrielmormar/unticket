<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApresentacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apresentacao', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data')->nullable(false);
            $table->decimal('preco', 10, 2);
            $table->string('sala', 255);
            $table->integer('quantidade_ingressos')->unsigned();
            $table->dateTime('hora');
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
        Schema::dropIfExists('apresentacaos');
    }
}
