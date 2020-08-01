<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arreglo extends Model
{
    protected $table = 'arreglos';
    public $timestamps = false;

    public function mueble()
    {
    	return $this->belongsTo(Mueble::class);
    }
}
