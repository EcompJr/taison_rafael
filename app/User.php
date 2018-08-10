<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuario';
    protected $fillable = ['email', 'password'];
    protected $hidden = ['remember_token'];
    public $timestamps = false;

    public function administrador()
    {
        return $this->hasOne('App\Administrador', 'idAdministrador');
    }


}
