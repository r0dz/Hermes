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
            $table->integer('status');
            $table->integer('prioridade');
            $table->integer('tipo_execucao');
            $table->integer('tempo_estimado');
            
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
