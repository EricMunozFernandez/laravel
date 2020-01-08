<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    public function articulo()
    {
        return $this->belongsTo('App\Articulo');
    }
}
