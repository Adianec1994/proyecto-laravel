<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    protected $table = 'mantenimientos';

    public function tecnologias()
    {
        return $this->belongsToMany('App\Tecnologia', 'tecno_has_Mttos',
            'idMtto', 'idTecno')->withTimestamps();
    }


}
