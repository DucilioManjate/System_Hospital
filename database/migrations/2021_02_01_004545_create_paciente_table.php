<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente', function (Blueprint $table) {
            $table->bigIncrements('codigo');
            $table->timestamps();
            $table->string('guia_consulta');
            $table->string('diagnostico');

            $table->unsignedBigInteger('usuario_codigo');
            $table->unsignedBigInteger('consulta_codigo');

            // $table->foreign('usuario_codigo')->refences('codigo')->on('usuario');
            // $table->foreign('consulta_codigo')->refences('codigo')->on('consulta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paciente');
    }
}
