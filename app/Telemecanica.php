<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telemecanica extends Model
{
    protected $table = 'empresa';

    public function empresa()
    {
        return $this->belongsTo('App\Empresa', 'idtelemecanica');
    }
}
