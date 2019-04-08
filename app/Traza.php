<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traza extends Model
{
    protected $table = 'trazas';

    protected $fillable = [
        'accion','fecha','user_id'
    ];

    protected $primaryKey = 'id';

    public function users()
    {
        return $this->hasMany('App\User', 'id');
    }
}
