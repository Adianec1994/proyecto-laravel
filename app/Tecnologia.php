<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tecnologia extends Model
{
    protected $table = 'tecnologias';

    protected $fillable = [
        'tipo','serie','activo'
    ];

    protected $primaryKey = 'idTecnologias';

    public function centralElectricas()
    {
        return $this->hasMany('App\CentralElectrica', 'idTecnologias');
    }
}
