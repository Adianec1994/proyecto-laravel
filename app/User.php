<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'cargo', 'username', 'email', 'password','activo','rol_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function rol(){
        return $this->belongsTo('App\Role','rol_id');
    }

    public function trazas()
    {
        return $this->belongsTo('App\Traza', 'id');
    }

    public function setPasswordAttribute($valor){
        if (!empty($valor)){
            $this->attributes['password']=\Hash::make($valor);
        }

    }
}
