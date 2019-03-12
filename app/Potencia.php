<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Potencia extends Model
{
    protected $table = 'potencias';

    protected $fillable = [
        'cantidad','retirado_potencia'
    ];

    protected $primaryKey = 'idPotencias';

    public function grupos()
    {
        return $this->belongsTo('App\Grupo', 'idPotencias');
    }
}
