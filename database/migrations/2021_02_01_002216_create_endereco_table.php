<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endereco', function (Blueprint $table) {
            $table->bigIncrements('codigo');
            $table->timestamps();
            $table->integer('ceep');
            $table->string('bairro');
            $table->string('estado');
            $table->string('cidade');
            $table->integer('rua');
            $table->integer('numero');

            $table->unsignedBigInteger('usuario_codigo');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('endereco');
    }
}
