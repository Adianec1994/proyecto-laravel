<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CentralElectrica extends Model
{
    protected $table = 'central_electricas';
    protected $fillable = [
        'nombre','cantidad_baterias','potIndispTM','idProvincias','idTecnologias',
        'idDatosGenerales','activo'
    ];

    protected $primaryKey = 'idCElectricas';
    public function provincia()
    {
        return $this->belongsTo('App\Provincia', 'idProvincias');
    }

    public function datoGeneral()
    {
        return $this->hasOne('App\DatosGeneral', 'idDatosGenerales');
    }

    public function tecnologia()
    {
        return $this->belongsTo('App\Tecnologia', 'idTecnologias');
    }

    public function tipoMantenimientos()
    {
        return $this->belongsToMany('App\TipoMantenimiento', 'mantenimientos',
            'idCElectricas', 'idTipoMtto')->withTimestamps();
    }

    public function cobertura()
    {
        return $this->hasOne('App\Cobertura', 'idCElectricas');
    }

    public function pailas()
    {
        return $this->hasMany('App\Paila', 'idCElectricas');
    }

    public function baterias()
    {
        return $this->hasMany('App\Bateria', 'idCElectricas');
    }
}
