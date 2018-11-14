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
            $table->string('passos');
            $table->string('resultado_esperado');
            $table->string('execucao');
            $table->unsignedInteger('caso_id');

            $table->foreign('caso_id')->references('id')->on('caso_de_testes');
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
