<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeHoraApresentacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('apresentacao', function (Blueprint $table) {
            $table->string('hora')->nullable()->change();
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
            $table->dropColumn('hora');
            $table->dateTime('hora');
        });
    }
}
