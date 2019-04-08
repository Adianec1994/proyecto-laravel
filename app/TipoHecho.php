<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoHecho extends Model
{
    protected $table = 'tipoHechos';

    protected $fillable = [
        'tipo','activo'
    ];

    protected $primaryKey = 'idtipoHechos';

    public function provincias()
    {
        return $this->belongsToMany('App\Provincia', 'hechosExtraordinarios',
            'idtipoHechos', 'idProvincias')->withTimestamps();
    }
}
