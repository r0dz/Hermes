<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Script extends Model
{
    public function resultados(){
        return $this->hasMany('App/Resultado');
    }
  
    public function passos(){
        return $this->hasMany('App/Passo');
    }
}
