<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paila extends Model
{
    protected $table = 'pailas';

    protected $fillable = [
        'fecha','hora','comb_factura','comb_medicion','nombre_Chofer','ci_chofer','nombre_Acomp',
        'ci_acompte','nombre_Recibe','ci_recibe','acciones','idCElectricas'
    ];

    protected $primaryKey = 'idPailas';

    public function centralElectrica()
    {
        return $this->belongsTo('App\CentralElectrica', 'idCElectricas');
    }
}
