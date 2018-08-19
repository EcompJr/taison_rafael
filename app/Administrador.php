<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $table = 'administrador'; 
    protected $primaryKey = 'idAdministrador';
    protected $fillable = ['idAdministrador', 'nome'];

	public $timestamps = false;

	public function usuario()
    {
        return $this->belongsTo('App\User');
    }

    public function pessoa()
    {
        return $this->hasOne('App\Pessoa', 'idPessoa');
    }

}
