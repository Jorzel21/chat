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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ADMIN
Route::prefix('admin')->group(function () {
    // Matches The "/relatorios/" URL
    Route::get('/',                                          'AdminController@index'                                         )->name('admin.index');
    Route::get('/enviarConvite',                            'AdminController@enviarConvite'                                 )->name('admin.enviarConvite');

});

Route::get('invite', 'InviteController@invite')->name('invite');
Route::post('invite', 'InviteController@process')->name('process');
// {token} is a required parameter that will be exposed to us in the controller method
Route::get('invete/{token}', 'AdminController@accept')->name('accept');

