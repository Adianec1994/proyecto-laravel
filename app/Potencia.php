<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Potencia extends Model
{
    protected $table = 'potencias';

    protected $fillable = [
        'cantidad','activo'
    ];

    protected $primaryKey = 'idPotencias';

    public function grupos()
    {
        return $this->hasMany('App\Grupo', 'idPotencias');
    }
}
