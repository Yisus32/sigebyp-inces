<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detallepersona extends Model
{
    public function persona()
    {
    	return $this->belongsTo(Persona::class);
    }

    public function cargo()
    {
    	return $this->belongsTo(Cargo::class);
    }

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
}
