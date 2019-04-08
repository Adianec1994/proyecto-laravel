<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = 'provincias';
    protected $fillable = [
        'nombre','cantidad_centrales','pot_planificada','idEmpresas','activo'
    ];

    protected $primaryKey = 'idProvincias';

    public function empresa()
    {
        return $this->hasMany('App\Empresa', 'idEmpresas');
    }

    public function centralElectricas()
    {
        return $this->hasMany('App\CentralElectrica', 'idProvincias');
    }

    public function emergencias()
    {
        return $this->hasMany('App\Emergencia', 'idProvincias');
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
