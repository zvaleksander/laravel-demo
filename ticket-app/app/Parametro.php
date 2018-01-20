<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametro extends Model
{
    public function Dominios (){
    	
    	return $this->hasMany('App\Dominio', 'id_parametro');
  	}
}
