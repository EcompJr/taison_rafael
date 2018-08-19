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

//Rotas para usuários cadastrados ----------------------------------------------------------------------------------
Route::middleware(['auth'])->group(function () {

    // Route::get('/home', 'PublicoController@index');

    //Rotas para administradores ------------------------------------------------------------------------------
    Route::middleware(['auth.administrador'])->group(function () {
        // Route::get('/index', 'PublicoController@index')->name('index');
        Route::get('/admin', 'AdministradorController@admin')->name('administrador');

        Route::get('/gerir_cursos', 'AdministradorController@curso')->name('gerir.cursos');

        Route::get('/gerir_eventos', 'AdministradorController@evento')->name('gerir.eventos');

        Route::get('/administradores', 'AdministradorController@administradores');

        Route::get('/mensagens', 'AdministradorController@mensagens');

        Route::post('/criar/curso', 'AdministradorController@criarCurso');

        Route::post('/criar/evento', 'AdministradorController@criarEvento');

        Route::get('/inscritos{id}', 'AdministradorController@cursoInscritos');

        Route::get('/deletar_curso/{id}', 'AdministradorController@deletarCurso');

        Route::get('/deletar_evento/{id}', 'AdministradorController@deletarEvento');

        Route::get('/editar_curso{id}', 'AdministradorController@editarCurso')->name('editar.curso');

        Route::get('/editar_evento{id}', 'AdministradorController@editarEvento');

        Route::post('/alterarCurso{id}', 'AdministradorController@alterarCurso');

        Route::post('/alterarEvento{id}', 'AdministradorController@alterarEvento');

        Route::get('/exibirMensagem{id}', 'AdministradorController@exibirMensagem');

        Route::post('/responderMensagem{id}', 'AdministradorController@responderMensagem');

    });


});




//Rotas públicas -----------------------------------------------------------------------------------
Route::middleware(['auth.publico'])->group(function () {
    
    Route::get('/', 'PublicoController@index')->name('index');

    Route::get('/eventos', 'PublicoController@eventos');

    Route::get('/cursos', 'PublicoController@cursos')->name('cursos');

    Route::post('/admin', 'AdministradorController@loginAdmin')->name('admin');

    Route::get('/cadastrar{id}', 'PublicoController@inscricaoCurso');

    Route::post('/inscrever{id}', 'PublicoController@inscrever');

    Route::post('/enviar_mensagem', 'PublicoController@enviarMensagem');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
