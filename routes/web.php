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

Route::get('/master-create',function(){
    // ok
            $user = App\User::create([
                'name'                  => 'master',
                'email'                 => 'master@master.com.br',
                'nivel'                 => 'master',
                'password'              => Hash::make('chat12345'),
            ]);
            $user->save();
              

            dd("fim", $user);

});
// Route Clientes
$router->get('/clientes',                         'ClienteController@index')->name('cliente.index');
$router->post('/clientes',                        'ClienteController@store')->name('cliente.store');
$router->get('/clientes/{cliente}',               'ClienteController@edit')->name('cliente.edit');
$router->put('/clientes/{cliente}',               'ClienteController@update')->name('cliente.update');

$router->delete('/clientes/{cliente}',            'ClienteController@destroy');

// Route Canais
$router->get('/canais',                           'CanalController@index')->name('canais.index');
$router->post('/canais',                          'CanalController@store')->name('canais.store');
$router->put('/canais/{canal}',                   'CanalController@update')->name('canais.update');
$router->get('/canais/{canal}',                   'CanalController@edit')->name('canais.edit');
$router->delete('/canais/{canal}',                'CanalController@destroy');

// Route Departamentos
$router->get('/departamentos',                    'DepartamentoController@index')->name('departamentos.index');;
$router->post('/departamentos',                   'DepartamentoController@store')->name('departamentos.store');;
$router->get('/departamentos/{departamento}',     'DepartamentoController@show');
$router->put('/departamentos/{departamento}',     'DepartamentoController@update')->name('departamentos.update');;
$router->get('/departamentos/{departamento}',     'DepartamentoController@edit')->name('departamentos.edit');;
$router->delete('/departamentos/{departamento}',  'DepartamentoController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// ADMIN
Route::prefix('admin')->group(function () {
    // Matches The "/relatorios/" URL
    // Route::get('/',                                          'AdminController@index'                                         )->name('admin.index')->middleware('checkAdmin');
    Route::get('/',                                          'AdminController@index'                                         )->name('admin.index');
    Route::post('/enviarConvite',                             'AdminController@enviarConvite'                                )->name('admin.enviarConvite');

});

Route::get('invite', 'InviteController@invite')->name('invite');
Route::post('invite', 'InviteController@process')->name('process');
// {token} is a required parameter that will be exposed to us in the controller method
Route::get('invete/{token}', 'AdminController@accept')->name('accept');

