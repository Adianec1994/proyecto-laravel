<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teleconferencia extends Model
{
    protected $table = 'teleconferencia';

    public function provincias()
    {
        return $this->belongsTo('App\Provincia', 'idteleconferencia');
    }
}
