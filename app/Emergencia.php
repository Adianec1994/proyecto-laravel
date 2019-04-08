<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emergencia extends Model
{
    protected $table = 'emergencias';
    protected $fillable = [
        'cliente','grupo','evento','estado_grupo','informo','idProvincias','activo'
    ];

    protected $primaryKey = 'idEmergencias';

    public function provincia()
    {
        return $this->belongsTo('App\Provincia', 'idProvincias');
    }
}
