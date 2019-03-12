<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indisponible extends Model
{
    protected $table = 'indisponibles';

    public function centrales()
    {
        return $this->belongsToMany('App\CentralElectrica',
            'indisp_has_central_Electricas', 'idIndisp',
            'idCElectr')->withTimestamps();
    }
}
