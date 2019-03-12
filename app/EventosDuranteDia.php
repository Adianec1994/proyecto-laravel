<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventosDuranteDia extends Model
{
    protected $table = 'eventosDuranteDia';

    public function provincias()
    {
        return $this->belongsToMany('App\Provincia',
            'eventosDuranteDia_has_provincias',
            'ideventosDuranteDia', 'idProv')->withTimestamps();
    }
}
