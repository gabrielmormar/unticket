<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEventoIdApresentacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('apresentacao', function (Blueprint $table) {
            $table->integer('evento_id')->unsigned();
            $table->foreign('evento_id', 'fk_evento_id')->references('id')->on('eventos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('apresentacao', function (Blueprint $table) {
            //
        });
    }
}
