<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'evento'; 
    protected $fillable = ['titulo', 'descricao', 'data', 'hora', 
    						'local', 'administrador_id'];

	public function foto()
    {
        return $this->hasMany('mine_apple\Foto', 'evento_id');
    }
}
