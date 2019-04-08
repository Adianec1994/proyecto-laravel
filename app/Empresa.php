<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas';

    protected $fillable = [
        'nombre','activo'
    ];

    protected $primaryKey = 'idEmpresas';

    public function provincias()
    {
        return $this->belongsTo('App\Provincia', 'idEmpresas');
    }
}
