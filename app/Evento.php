<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'evento'; 
    protected $fillable = ['idEvento', 'descricao', 'data', 'hora', 
    						'local', 'administrador_id'];

	public $timestamps = false;
}
