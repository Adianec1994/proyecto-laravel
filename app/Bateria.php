<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bateria extends Model
{
    protected $table = 'baterias';
    protected $fillable = [
        'numero','cantidad_grupos','idCElectricas','idProvincias','idEmpresas'
    ];

    protected $primaryKey = 'idBaterias';
    public function centralElectrica()
    {
        return $this->hasMany('App\CentralElectrica', 'idCElectricas');
    }

    public function grupos()
    {
        return $this->belongsTo('App\Grupo', 'idBaterias');
    }


}
