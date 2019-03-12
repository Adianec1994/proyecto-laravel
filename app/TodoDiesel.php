<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoDiesel extends Model
{
    protected $table = 'todoDiesel';

    public function centrales()
    {
        return $this->belongsTo('App\CentralElectrica', 'idtodoDiesel');
    }
}
