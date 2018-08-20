<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoa';
    protected $fillable = ['idPessoa', 'email', 'nome','sobrenome', 'dataNascimento', 
    						'telefone', 'formacao', 'cargo', 'endereco', 'bairro', 'cidade', 'estado', 'curso_id', 'deficiencia', 'material'];


	public function administrador()
    {
        return $this->belongsTo('App\Administrador');
    }
}
