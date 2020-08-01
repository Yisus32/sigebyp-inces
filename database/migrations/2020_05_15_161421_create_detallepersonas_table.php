<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallepersonas', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('traslado_id')->unsigned();
            $table->integer('persona_id')->unsigned();
            $table->integer('cargo_id')->unsigned()->nullable();
            $table->integer('sede_id')->unsigned()->nullable();
            $table->integer('departamento_id')->unsigned()->nullable();
            $table->foreign('traslado_id')->references('id')->on('traslados')->onDelete('cascade');
            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');
            $table->foreign('cargo_id')->references('id')->on('cargos')->onDelete('cascade');
            $table->foreign('sede_id')->references('id')->on('sedes')->onDelete('cascade');
            $table->foreign('departamento_id')->references('id')->on('departamentos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detallepersonas');
    }
}
