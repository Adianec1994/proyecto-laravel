<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bateria extends Model
{
    protected $table = 'baterias';
    protected $fillable = [
        'numero','cantidad_grupos','idCElectricas','activo'
    ];

    protected $primaryKey = 'idBaterias';

    public function centralElectrica()
    {
        return $this->belongsTo('App\CentralElectrica', 'idCElectricas');
    }

    public function grupos()
    {
        return $this->hasMany('App\Grupo', 'idBaterias');
    }


}
