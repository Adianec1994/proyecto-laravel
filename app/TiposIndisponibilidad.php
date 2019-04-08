<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiposIndisponibilidad extends Model
{
    protected $table = 'tiposIndisponibilidades';

    protected $fillable = [
        'tipo','activo'
    ];

    protected $primaryKey = 'idTipoIndisp';

    public function grupos()
    {
        return $this->belongsToMany('App\Grupo', 'indisponibles',
            'idTipoIndisp', 'idGrupos')->withTimestamps();
    }
}
