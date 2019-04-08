<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generacione extends Model
{
    protected $table = 'generaciones';

    protected $fillable = [
        'fecha','hEntradaAM','hSalidaAM','hEntradaM','hSalidaM','hEntradaPM','hSalidaPM',
        'reporta','tiempoOperacion','idGrupos'
    ];

    protected $primaryKey = 'idGener';

    public function grupo()
    {
        return $this->belongsTo('App\Grupo', 'idGrupos');
    }
}
