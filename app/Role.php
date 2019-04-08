<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'rol_users';

    protected $fillable = [
        'name', 'usuarios','registros','operaciones','reportes','graficos','activo'
    ];

    public function users(){
        return $this->hasMany('App\User','rol_id');

    }
}
