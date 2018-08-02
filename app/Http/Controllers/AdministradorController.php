<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    public function index(){
    	return view('login');
    }

    public function painel(){
    	return view('perfil-admin');
    }
}
