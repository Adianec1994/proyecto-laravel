<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    protected $table = 'trabajos';

    protected $primaryKey = 'idTrabajos';

    protected $fillable = [
        'fechaReparacion','tipoTrabajo','horaEntrada','horaSalida','estadoGrupo','idMCV','idGrupos'
    ];
    public function mcv(){
        return $this->belongsTo('App\MCV','idMCV');
    }
    public function grupo(){
        return $this->belongsTo('App\Grupo','idGrupos');
    }
}
