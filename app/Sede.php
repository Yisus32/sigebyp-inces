<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    public function municipio()
    {
    	return $this->belongsTo(Municipio::class);
    }

    public function departamentos()
    {
    	return $this->hasMany(Departamento::class);
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
