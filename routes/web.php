<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/cursos', function () {
    return view('cursos');
});

Route::get('/eventos', function () {
    return view('eventos');
});

Route::get('/administradores', function () {
    return view('administradores');
});

Route::get('/cursos-admin/alunos-curso', function () {
    return view('alunos-curso');
});

Route::get('/login-adm', function () {
    return view('login');
});

Route::get('/mensagens', function () {
    return view('mensagens');
});

Route::get('/perfil-admin', function () {
    return view('perfil-admin');
});

Route::get('/eventos-admin', function () {
    return view('eventos-admin');
});

Route::get('/cursos-admin', function () {
    return view('index');
});

Route::get('/cadastro-adm', function () {
    return view('cadastro');
});

Route::get('/', function () {
    return view('index');
});