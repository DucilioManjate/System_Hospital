<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consulta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->date('data');
            $table->time('hora');

            $table->unsignedBigInteger('medico_codigo');


            // $table->foreign('medico_codigo')->refences('codigo')->on('medico');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consulta');
    }
}
