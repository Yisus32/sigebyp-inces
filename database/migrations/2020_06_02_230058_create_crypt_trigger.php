<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCryptTrigger extends Migration
{
    /** MIGRACION PARA CREAR TRIGGER DE ENCRIPTACIÓN DE CONTRASEÑA EN LA TABLA USUARIOS
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        DB::unprepared('

        CREATE TRIGGER encrypt 
        AFTER INSERT ON usuarios
        FOR EACH ROW
        EXECUTE PROCEDURE encrypt_password()

        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('
        DROP TRIGGER `encrypt`;
        DROP FUNCTION encrypt_password;
        ');
    }
}
