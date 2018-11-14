<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePassosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('num');
            $table->string('acao');
            $table->string('resultado_esperado');
            $table->integer('execucao');
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
        Schema::drop('passos');
    }
}
