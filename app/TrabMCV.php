<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrabMCV extends Model
{
    protected $table = 'trabMCV';

    public function grupo()
    {
        return $this->hasMany('App\Grupo', 'idGrupos');
    }
}
