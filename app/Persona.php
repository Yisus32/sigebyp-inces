<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 

class Persona extends Model
{
   
    protected $table = 'personas';
    //Quita de la configuración la inserción automática de los valores timestamp default en las migraciones
    public $timestamps = false;


    public function cargo()
    {
    	return $this->belongsTo(Cargo::class);
    }

    public function departamento()
    {
    	return $this->belongsTo(Departamento::class);
    }

    public function detalle_personas()
    {
    	return $this->hasMany(Detallepersona::class);
    }

    public function detalle_muebles()
    {
        return $this->hasMany(Detallemueble::class);
    }
}
