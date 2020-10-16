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

Route::get('/dpivali/', function () {
    return view('validacion');
});

Route::get('/dpivali/tramites/', function () {
    return view('tramites');


});



Route::get('/tramiter/certificados/', function () {
    return view('plantilla');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Auth::routes(['verify' => true]);


Route::get('/home/depa/', function () {
    return view('depa');
});


Route::get('/home/muni/', function () {
    return view('muni');
});
Route::get('/home/sucursal/', function () {
    return view('sucursal');
});

Route::get('/home/ventanilla/', function () {
    return view('ventanilla');
});

Route::get('/home/servicio/', function () {
    return view('servicio');
});





