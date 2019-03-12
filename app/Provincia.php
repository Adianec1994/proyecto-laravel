<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = 'provincias';
    protected $fillable = [
        'nombre','cantidad_centrales','pot_planificada','idEmpresas'
    ];

    protected $primaryKey = 'idProvincias';

    public function empresa()
    {
        return $this->hasMany('App\Empresa', 'idEmpresas');
    }

    public function centralElectricas()
    {
        return $this->belongsTo('App\CentralElectrica', 'idProvincias');
    }

    public function eventosDiarios()
    {
        return $this->belongsTo('App\EventosDiario', 'idProvincias');
    }

    public function tipoHechos()
    {
        return $this->belongsToMany('App\TipoHecho', 'hechosExtraordinarios',
            'idProvincias', 'idtipoHechos')->withTimestamps();
    }


}
