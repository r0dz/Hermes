<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanoDeTeste extends Model
{
    public function suitesDeTeste(){
        return $this->hasMany('App/SuiteDeTeste');
    }
}
