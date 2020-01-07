<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    public function articulos()
    {
        return $this->hasMany('App/Articulo');
    }
}
