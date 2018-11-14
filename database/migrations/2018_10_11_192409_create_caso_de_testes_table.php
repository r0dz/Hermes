<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasoDeTestesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caso_de_testes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('objetivo');
            $table->string('pre_condicoes');
            $table->string('status');
            $table->string('prioridade');
            $table->string('tipo_execucao');
            $table->string('tempo_estimado');
            $table->unsignedInteger('suite_id');

            $table->foreign('suite_id')->references('id')->on('suite_de_testes');
            
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
        Schema::drop('caso_de_testes');
    }
}
