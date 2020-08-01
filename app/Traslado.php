<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traslado extends Model
{
    public function usuario()
    {
    	return $this->belongsTo(Usuario::class);
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
