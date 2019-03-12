<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = 'grupos';

    protected $fillable = [
        'numero','pot_instalada','pot_disponible','potIndispMtto','potIndispAveria',
        'idBaterias','idCElectricas','idProvincias','idEmpresas','idPotencias'
    ];

    protected $primaryKey = 'idGrupos';

    public function eventosDiarios()
    {
        return $this->belongsTo('App\EventosDiario', 'idGrupos');
    }

    public function bateria()
    {
        return $this->hasMany('App\Bateria', 'idBaterias');
    }

    public function grupoLimitado()
    {
        return $this->belongsTo('App\GruposLimitado', 'idGrupos');
    }

    public function MCVs()
    {
        return $this->belongsToMany('App\MCV', 'trabajos',
            'idGrupos', 'idMCV')->withTimestamps();
    }

    public function generaciones()
    {
        return $this->belongsTo('App\Generacione', 'idGrupos');
    }

    public function potencia()
    {
        return $this->hasMany('App\Potencia', 'idPotencias');
    }

    public function tiposIndisponibilidades()
    {
        return $this->belongsToMany('App\TiposIndisponibilidad', 'indisponibles',
            'idGrupos', 'idTipoIndisp')->withTimestamps();
    }
}
