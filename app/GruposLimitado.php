<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GruposLimitado extends Model
{
    protected $table = 'grupos_limitados';

    protected $fillable = [
        'cantPotLimitada','observaciones','fechaPosSolucion'
    ];

    protected $primaryKey = 'idGrupos';

    public function grupo()
    {
        return $this->hasOne('App\Grupo', 'idGrupos');
    }
}
