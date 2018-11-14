<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuiteDeTestesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suite_de_testes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('detalhes');
            $table->unsignedInteger('plano_id');

            $table->foreign('plano_id')->references('id')->on('plano_de_testes');
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
        Schema::drop('suite_de_testes');
    }
}
