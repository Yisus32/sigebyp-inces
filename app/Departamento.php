<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    public function sede()
    {
    	return $this->belongsTo(Sede::class);
    }

    public function personas()
    {
    	return $this->hasMany(Persona::class);
    }

    public function muebles()
    {
    	return $this->hasMany(Mueble::class);
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
