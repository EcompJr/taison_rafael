<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $table = 'foto';
    protected $fillable = ['evento_id', 'path'];

	public $timestamps = false;

	public function evento()
    {
        return $this->belongsTo('App\Evento', 'evento_id');
    }
}
