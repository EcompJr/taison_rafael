<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Curso;

class PublicoController extends Controller
{
    /**
    * Retorna index
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function index(){
    	return view('index');
    }


    /**
    * Retorna tela de eventos
    * 
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function eventos(){
    	return view('eventos');
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
    public function buscarCursos($id){

        $curs = Curso::find($id);

        return view('cursos', compact('curs'));
    }
}
