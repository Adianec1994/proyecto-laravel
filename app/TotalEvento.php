<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TotalEvento extends Model
{
    protected $table = 'totalEventos';

    public function provincias()
    {
        return $this->belongsToMany('App\Provincia',
            'totalEventos_has_provincias', 'idtotalEventos',
            'idProv')->withTimestamps();
    }
}
