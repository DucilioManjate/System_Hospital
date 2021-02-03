<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigIncrements('codigo');
            $table->timestamps();
            $table->string('nome');
            $table->string('email');
            $table->string('telefone');
            $table->string('cpf');
            $table->integer('idade');
            $table->string('sexo');
            $table->string('senha');

            // $table->unsignedBigInteger('endereco_codigo');

            // $table->foreign('endereco_codigo')->refences('codigo')->on('endereco');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
