<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generacione extends Model
{
    protected $table = 'generaciones';

    protected $fillable = [
        'fecha','hEntradaAM','hSalidaAM','hEntradaM','hSalidaM','hEntradaPM','hSalidaPM',
        'reporta','tiempoOperacion','idGrupos','idBaterias','idCElectricas','idProvincias',
        'idEmpresas','idPotencias'
    ];

    protected $primaryKey = 'idGener';

    public function grupo()
    {
        return $this->hasMany('App\Grupo', 'idGrupos');
    }
}
