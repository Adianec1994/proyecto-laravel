<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MCV extends Model
{
    protected $table = 'MCV';

    protected $fillable = [
        'nombreJefe','cantTrabajadores'
    ];

    protected $primaryKey = 'idMCV';

    public function grupos()
    {
        return $this->belongsToMany('App\Grupo', 'trabajos',
            'idMCV', 'idGrupos')->withTimestamps();
    }
}
