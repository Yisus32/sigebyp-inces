<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detallemueble extends Model
{

    public function sede()
    {
    	return $this->belongsTo(Sede::class);	
    }

    public function departamento()
    {
    	return $this->belongsTo(Departamento::class);
    }

     public function traslado()
    {
    	return $this->belongsTo(Traslado::class);
    }

    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }
}

