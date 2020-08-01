<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    public function personas()
    {
    	return $this->hasMany(Persona::class);
    }

    public function detalle_personas()
    {
    	return $this->hasMany(Detallepersona::class);
    }
}
