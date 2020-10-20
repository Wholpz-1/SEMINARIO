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


/*
Ruta para requisitos de certificado de nacimiento
*/

Route::get('/tramiter/certificados/', function () {
    return view('plantilla');

});
/*
Ruta para requisitos de certificado de Matrimonio
*/
Route::get('/tramites/matrimonio/', function () {
    return view('reque2');


});

/*
Ruta para requisitos de certificado de defuncion
*/

Route::get('/tramites/defuncion/', function () {
    return view('reque3');


});


/*
Ruta para requisitos de Solicitud DPI
*/

Route::get('/solicitudes/Sodpi/', function () {
    return view('reque4');


});


/*
Ruta para requisitos de Solicitud DPI
*/

Route::get('/solicitudes/Sodpi/', function () {
    return view('reque4');


});


/*
Ruta para requisitos de Nacionalidad
*/

Route::get('/solicitudes/Nacionalidad/', function () {
    return view('reque5');


});

/*
Ruta para requisitos de Doble Nacionalidad
*/

Route::get('/solicitudes/DNacionalidad/', function () {
    return view('reque6');


});

/*
Ruta para Inscripcion de recien nacidos
*/

Route::get('/Inscripcion/Nacidos/', function () {
    return view('reque7');


});

/*
Ruta para Inscripcion de Matrimonio
*/

Route::get('/Inscripcion/Matrimonio/', function () {
    return view('reque8');


});

/*
Ruta para cambio de nombre
*/

Route::get('/Cambio/Nombre/', function () {
    return view('reque9');


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

Route::get('/home/hventanilla/', function () {
    return view('hventanilla');
});

Route::get('/home/cita/', function () {
    return view('cita');
});
Route::get('/tramites/citac/', function () {
    return view('citac');
});




//rutas de crud departamento
Route::get('departamento', 'DepartamentoController@index')-> name('departamento.index');
Route::get('departamento/{depa}', 'DepartamentoController@edit')-> name('departamento.edit');
Route::post('departamento', 'DepartamentoController@store')-> name('departamento.store');
Route::delete('departamento/{depar}', 'DepartamentoController@destroy')-> name('departamento.destroy');


//rutas de crud municipio
Route::post('municipio/{depa}', 'MunicipioController@store')-> name('municipio.store');
Route::delete('municipio/{depa}', 'MunicipioController@destroy')-> name('municipio.destroy');





