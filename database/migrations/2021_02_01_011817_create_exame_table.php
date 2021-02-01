<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exame', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('resuldados_paciente');


            $table->unsignedBigInteger('paciente_codigo');
            // $table->foreign('paciente_codigo')->refences('codigo')->on('paciente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exame');
    }
}
