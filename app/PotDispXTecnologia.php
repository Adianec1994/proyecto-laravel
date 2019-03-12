<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PotDispXTecnologia extends Model
{
    protected $table = 'pot_DispXTecnologia';

    public function grupos()
    {
        return $this->belongsToMany('App\Grupo',
            'potDispXTecnol_has_grupos', 'idpotDispTecnologia',
            'idGrupos')->withTimestamps();
    }
}
