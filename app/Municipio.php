<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    public function sedes()
    {
    	return $this->hasMany(Sede::class);
    }
}
