<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CasoDeTeste extends Model
{
    public function scripts(){
        return $this->hasMany('App/Script');
    }
}
