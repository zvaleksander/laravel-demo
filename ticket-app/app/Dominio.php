<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dominio extends Model
{
    public function Parametro (){

    	return $this->belongsTo('App\Parametro', 'id_parametro');
  	}
}
