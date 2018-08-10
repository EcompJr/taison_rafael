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
        
        Route::get('/gerir_cursos', 'AdministradorController@curso');

        Route::get('/gerir_eventos', 'AdministradorController@evento');

        Route::get('/administradores', 'AdministradorController@administradores');

        Route::get('/mensagens', 'AdministradorController@mensagens');

        Route::post('/criar/curso', 'AdministradorController@criarCurso');

        Route::post('/criar/evento', 'AdministradorController@criarEvento');


    });


});




//Rotas públicas -----------------------------------------------------------------------------------
Route::middleware(['auth.publico'])->group(function () {
    
    Route::get('/', 'PublicoController@index')->name('index');

    Route::get('/eventos', 'PublicoController@eventos');

    Route::get('/cursos', 'PublicoController@cursos');

    Route::post('/admin', 'AdministradorController@loginAdmin')->name('admin');

    Route::get('/cadastrar/{id}', 'PublicoController@buscarCursos');

});






// Route::get('/administradores', function () {
//     return view('administradores');
// });

// Route::get('/cursos-admin/alunos-curso', function () {
//     return view('alunos-curso');
// });


// Route::get('/mensagens', function () {
//     return view('mensagens');
// });


// Route::get('/eventos-admin', function () {
//     return view('eventos-admin');
// });


// Route::get('/cadastro-adm', function () {
//     return view('cadastro');
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
