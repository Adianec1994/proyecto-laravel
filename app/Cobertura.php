<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cobertura extends Model
{
    protected $table = 'coberturas';
    protected $fillable = [
        'planReserva','fondaje','existOperativa','coberturaHoras','consumo','suminCupet',
        'capacTotalAlmac','capacVacio','existTotalDiaAnterior'
    ];

    protected $primaryKey = 'idCoberturas';

    public function centralElectrica()
    {
        return $this->belongsTo('App\CentralElectrica', 'idCoberturas');
    }
}
