<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosGeneral extends Model
{
    protected $table = 'datosGenerales';

    protected $fillable = [
        'genBruta','insumos','recibido','volumenRecibido','consumoGeneracion','densidadPonderada',
        'temperatura','densidadCorreccion','valorCalorico','existencia','cobertura','indiceConsumo',
        'lubricteRecibido','lubricteCsmoReposicion','lubricteCsmoCambio','lubricteCsmoTotal',
        'lubricteExistencia','lubricteCobertura','lubricteIndiceCsmo','refrigteRecibido',
        'refrigteConsumo','refrigteExistencia'
    ];

    protected $primaryKey = 'idDatosGenerales';

    public function centralElectrica()
    {
        return $this->belongsTo('App\CentralElectrica', 'idDatosGenerales');
    }
}
