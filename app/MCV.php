<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MCV extends Model
{
    protected $table = 'MCV';

    protected $fillable = [
        'nombre_informa'
    ];

    protected $primaryKey = 'idMCV';

    /*public function grupos()
    {
        return $this->belongsToMany('App\Grupo', 'trabajos',
            'idMCV', 'idGrupos')->withTimestamps();
    }*/

    public function trabajoMcv(){
        return $this->belongsToMany('App\Grupo','trabajos','idMCV','idGrupos')
            ->withPivot('fechaReparacion')
            ->withPivot('tipoTrabajo')
            ->withPivot('horaEntrada')
            ->withPivot('horaSalida')
            ->withPivot('estadoGrupo')->withTimestamps();
    }
}
