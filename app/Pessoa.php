<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoa';
    protected $fillable = ['idPessoa', 'email', 'nome','sobrenome', 'dataNascimento', 
    						'telefone', 'formacao', 'funcao', 'rua', 'numero', 'cidade', 'estado', 'curso_id', 
    						'nenhuma', 'cego', 'poucaVisao'];

	public $timestamps = false;

	public function administrador()
    {
        return $this->belongsTo('App\Administrador');
    }
}
