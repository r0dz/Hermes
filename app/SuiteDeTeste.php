<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuiteDeTeste extends Model
{
    public function casosDeTeste(){
        return $this->hasMany('App/CasoDeTeste');
    }
}
