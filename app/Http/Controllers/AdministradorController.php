<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Administrador;
use App\Curso;
use App\Evento;



class AdministradorController extends Controller
{
   
	/**
    * Verifica login
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
	public function loginAdmin(request $request){
        
        $this->validate($request, [
        		'email' => 'required|email|max:255',
        		'password' => 'required|max:255'
        	]);
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
        	return view('perfil-admin');
        }
        return 'Não foi logado';
    }

    /**
    * Retorna view com os cursos
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function curso(){
        $cursos = Curso::where('administrador_id', '=', Auth::user()->id)->get();

        $cursos = Curso::where('administrador_id', '=', Auth::user()->id)->get();

        return view('cursos-admin', compact('cursos'));
    }

    /**
    * Retorna view com os eventos
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function evento(){
        $eventos = Evento::where('administrador_id', '=', Auth::user()->id)->get();

        return view('eventos-admin', compact('eventos'));
    }

    /**
    * Retorna view com os administradores
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function administradores(){

        return view('administradores');
    }

    /**
    * Retorna view com os administradores
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function mensagens(){

        return view('mensagens');
    }

    /**
    * Cadastra cursos
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function criarCurso(request $request){
        
        $administrador = Auth::user()->administrador;

        $curso = new Curso;
        $curso->administrador_id = $administrador->idAdministrador;
        $curso->titulo = $request->titulo;
        $curso->vagas = $request->vagas;
        $curso->horasCurso = $request->horasCurso;
        $curso->data = $request->data;
        $curso->turno = $request->turno;
        $curso->periodoInscricao = $request->periodoInscricao;
        $curso->local = $request->local;

        $curso->save();

        return redirect()->back();
    }

    /**
    * Cadastra eventos
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function criarEvento(request $request){
        
        $administrador = Auth::user()->administrador;

        $evento = new Evento;
        $evento->administrador_id = $administrador->idAdministrador;
        $evento->descricao = $request->descricao;
        $evento->data = $request->data;
        $evento->hora = $request->hora;
        $evento->local = $request->local;

        $evento->save();
        
        return redirect()->back();
    }

   
}
