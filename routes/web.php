<?php

use Illuminate\Support\Facades\Route;

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
    return view('login');
});

// Route Clientes
$router->get('/clientes',                         'ClienteController@index');
$router->post('/clientes',                        'ClienteController@store');
$router->get('/clientes/{cliente}',               'ClienteController@show');
$router->put('/clientes/{cliente}',               'ClienteController@update');
$router->patch('/clientes/{cliente}',             'ClienteController@update');
$router->delete('/clientes/{cliente}',            'ClienteController@destroy');

// Route Canais
$router->get('/canais',                           'CanalController@index');
$router->post('/canais',                          'CanalController@store');
$router->get('/canais/{canal}',                   'CanalController@show');
$router->put('/canais/{canal}',                   'CanalController@update');
$router->patch('/canais/{canal}',                 'CanalController@update');
$router->delete('/canais/{canal}',                'CanalController@destroy');

// Route Departamentos
$router->get('/departamentos',                    'DepartamentoController@index');
$router->post('/departamentos',                   'DepartamentoController@store');
$router->get('/departamentos/{departamento}',     'DepartamentoController@show');
$router->put('/departamentos/{departamento}',     'DepartamentoController@update');
$router->patch('/departamentos/{departamento}',   'DepartamentoController@update');
$router->delete('/departamentos/{departamento}',  'DepartamentoController@destroy');


Auth::routes();

Route::get('/register/{id}', 'Auth\RegisterController@formRegistrarion')->name('auth.formRegister');

Route::get('/home', 'HomeController@index')->name('home');


// ADMIN
Route::prefix('admin')->group(function () {
    // Matches The "/relatorios/" URL
    Route::get('/',                                          'AdminController@index'                                         )->name('admin.index');
    Route::get('/enviarConvite',                             'AdminController@enviarConvite'                                 )->name('admin.enviarConvite');

});

Route::get('invite', 'InviteController@invite')->name('invite');
Route::post('invite', 'InviteController@process')->name('process');
// {token} is a required parameter that will be exposed to us in the controller method
Route::get('invete/{token}', 'AdminController@accept')->name('accept');

