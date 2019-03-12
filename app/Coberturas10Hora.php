<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coberturas10Hora extends Model
{
    protected $table = 'coberturas10horas';

    public function cobertura()
    {
        return $this->hasOne('App\Cobertura', 'idCoberturas');
    }

    public function coberturas24hora()
    {
        return $this->belongsTo('App\Coberturas24Hora', 'idcob10horas');
    }
}
