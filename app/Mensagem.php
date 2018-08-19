<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    protected $table = 'mensagem';
    protected $fillable = ['nome', 'email', 'assunto','mensagem', 'resposta', 'respondido'];

	public $timestamps = false;

	public function usuario()
    {
        return $this->belongsTo('App\User');
    }
}
