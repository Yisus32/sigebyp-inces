<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mueble extends Model
{
	protected $table = 'muebles';
    public $timestamps = false;

 	public function departamento()
   	{
    	return $this->belongsTo(Departamento::class);
    }

    public function arreglos()
    {
    	return $this->hasMany(Arreglo::class);
    }
}
