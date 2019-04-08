<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = 'grupos';

    protected $fillable = [
        'numero','pot_instalada','pot_disponible','potIndispMtto','potIndispAveria',
        'idBaterias','idEstados','activo'
    ];

    protected $primaryKey = 'idGrupos';

    public function eventosDiarios()
    {
        return $this->belongsTo('App\EventosDiario', 'idGrupos');
    }

    public function bateria()
    {
        return $this->belongsTo('App\Bateria', 'idBaterias');
    }

    public function grupoLimitado()
    {
        return $this->belongsTo('App\GruposLimitado', 'idGrupos');
    }

    public function generaciones()
    {
        return $this->hasMany('App\Generacione', 'idGrupos');
    }

    public function estado()
    {
        return $this->belongsTo('App\Estado', 'idEstados');
    }

    /*public function MCVs()
    {
        return $this->belongsToMany('App\MCV', 'trabajos',
            'idGrupos', 'idMCV')->withTimestamps();
    }*/

    public function trabajoMcv(){
        return $this->belongsToMany('App\MCV','trabajos','idGrupos','idMCV')
            ->withPivot('fechaReparacion')
            ->withPivot('tipoTrabajo')
            ->withPivot('horaEntrada')
            ->withPivot('horaSalida')
            ->withPivot('estadoGrupo')->withTimestamps();
    }

}
