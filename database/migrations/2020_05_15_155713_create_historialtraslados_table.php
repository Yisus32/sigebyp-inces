<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialtrasladosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historialtraslados', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->string('referencia');
            $table->string('motivo');
            $table->timestamp('fecha');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historialtraslados');
    }
}
