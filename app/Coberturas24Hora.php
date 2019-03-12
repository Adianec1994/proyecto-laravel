<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coberturas24Hora extends Model
{
    protected $table = 'coberturas24horas';

    public function coberturas10hora()
    {
        return $this->hasOne('App\Coberturas10Hora', 'idcob10horas');
    }
}
