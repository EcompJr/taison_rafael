<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Curso;
use App\Evento;
use App\Foto;
use App\Pessoa;
use App\Mensagem;
use App\Acesso;
use Illuminate\Support\Facades\DB;

class PublicoController extends Controller
{
    /**
    * Retorna index
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function index(){
      if(DB::table('acesso')->where('id', 1)->count() == 0 && Auth::user()->administrador != null){
        $acesso = new Acesso;
        $acesso->numero = 1; 
        $acesso->save();
      } else if(!Auth::check()){
        $acesso = Acesso::where('id', '=', 1)->first();
         $acesso->numero += 1;
         $acesso->save();
      }

    	return view('index');
    }


    /**
    * Retorna tela de eventos
    * 
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function eventos(){
    	
        $eventos = Evento::paginate(3);
        $fotos = Foto::all();

        return view('eventos', compact('eventos', 'fotos'));
    }

    /**
    * Retorna tela de cursos
    * 
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function cursos(){

        $cursos = Curso::all();

        return view('cursos', compact('cursos'));
    }

    /**
    * Retorna tela de cursos
    * 
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function inscricaoCurso($id){

        $curso = Curso::where('idCurso','=', $id)->first();

        $formacoes = ['Alfabeto / Fundamental I incompleto', 'Fundamental I completo / Fundamental II incompleto', 'Fundamental completo / Médio incompleto', 'Médio completo / Superior incompleto','Superior completo'];

        $cargos = ['Gerência de Alto nível', 'Chefia Intermediária', 'Supervisor, funcionário, quadro médio, administrativo ou profissional', 'Desempregado', 'Professor', 'Estudante', 'Agricultor', 'Aposentado', 'Trabalhador manual qualificado', 'Trabalhador manual semiqualificado ou não qualificado', 'Doméstica(o)'];

        $deficiencias = ['Cego', 'Pouca Visão', 'Nenhuma'];

        $materiais = ['Braille', 'Apliado', 'Digitalizado'];

        return view('inscrever-curso', compact('curso', 'formacoes', 'cargos', 'deficiencias', 'materiais'));
    }

    /**
    * Retorna tela de cursos
    * 
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function inscrever(request $request, $id){

       $pessoa = new Pessoa;
       $pessoa->curso_id = $id;
       $pessoa->nome = $request->nome;
       $pessoa->sobrenome = $request->sobrenome;
       $pessoa->email = $request->email;
       $pessoa->telefone = $request->telefone;
       $pessoa->formacao = $request->formacao;
       $pessoa->cargo = $request->cargo;
       $pessoa->dataNascimento = $request->dataNascimento;
       $pessoa->deficiencia = $request->deficiencia;
       $pessoa->material = $request->material;
       $pessoa->endereco = $request->endereco;
       $pessoa->bairro = $request->bairro;
       $pessoa->cidade = $request->cidade;
       $pessoa->estado = $request->estado;

       $pessoa->save();

       return redirect()->route('cursos');
    }

    /**
    * Retorna tela de cursos
    * 
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function enviarMensagem(request $request){

       $mensagem = new Mensagem;
       $mensagem->nome = $request->nome;
       $mensagem->email = $request->email;
       $mensagem->assunto = $request->assunto;
       $mensagem->mensagem = $request->mensagem;

       $mensagem->save();

       return redirect()->back();
    }
}
