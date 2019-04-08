<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMantenimiento extends Model
{
    protected $table = 'tipoMantenimientos';
    protected $fillable = [
        'tipo','activo'
    ];

    protected $primaryKey = 'idTipoMtto';

    public function centralElectricas()
    {
        return $this->belongsToMany('App\CentralElectrica', 'mantenimientos',
            'idTipoMtto', 'idCElectricas')->withTimestamps();
    }
}
