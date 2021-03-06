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


Route::get('/citavali/', function () {
    return view('valicita');
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







   // Authentication Routes...
        Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
        Route::post('login', 'Auth\LoginController@login');
        Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->middleware('verified');




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




Route::group(['middleware' => 'auth'], function () {
    //


//rutas de crud departamento
Route::get('departamento', 'DepartamentoController@index')-> name('departamento.index');
Route::get('departamento/{depa}', 'DepartamentoController@edit')-> name('departamento.edit');
Route::post('departamento', 'DepartamentoController@store')-> name('departamento.store');
Route::delete('departamento/{depar}', 'DepartamentoController@destroy')-> name('departamento.destroy');


//rutas de crud municipio
Route::post('municipio/{depa}', 'MunicipioController@store')-> name('municipio.store');
Route::delete('municipio/{depa}', 'MunicipioController@destroy')-> name('municipio.destroy');


//rutas de crud sucursales
Route::post('sucursal/{muni}', 'SucursalController@store')-> name('sucursal.store');
Route::get('sucursales', 'SucursalController@index')-> name('sucursal.index');
Route::get('sucursales/{muni}', 'SucursalController@edit')-> name('sucursal.edit');
Route::delete('sucursales/{sucursal}', 'SucursalController@destroy')-> name('sucursal.destroy');
Route::put('sucursal/{sucursal}', 'SucursalController@update')-> name('sucursal.update');


//ruta de crud configuracion
Route::get('configuracion/sucursal/{sucursal}', 'SucursalController@configuracion')-> name('sucursal.configuracion.index');

//ruta de crud iconos
Route::get('iconos', 'IconoController@index')-> name('icono.index');
Route::post('iconos', 'IconoController@store')-> name('icono.store');
Route::delete('iconos/{icono}', 'IconoController@destroy')-> name('icono.destroy');


//rutas de crud servicios
Route::post('servicios', 'ServiciosController@store')-> name('servicio.store');
Route::get('servicios', 'ServiciosController@index')-> name('servicio.index');
Route::get('servicios/{servicio}', 'ServiciosController@edit')-> name('servicio.edit');
Route::delete('servicios/{servicio}', 'ServiciosController@destroy')-> name('servicio.destroy');
Route::put('servicios/{servicio}', 'ServiciosController@update')-> name('servicio.update');





// rutas ventanillas

Route::post('ventanilla/{sucursal}', 'VentanillaController@store')-> name('ventanilla.store');
Route::delete('ventanilla/{sucursal}', 'VentanillaController@destroy')-> name('ventanilla.destroy');
Route::get('ventanilla/{ventanilla}', 'VentanillaController@edit')-> name('ventanilla.edit');
Route::put('ventanilla/{ventanilla}', 'VentanillaController@update')-> name('ventanilla.update');


// rutas horas ventanillas

Route::post('hora/{ventanilla}', 'HoraController@store')-> name('hora.store');
Route::delete('hora/{ventanilla}', 'HoraController@destroy')-> name('hora.destroy');


Route::get('usuarios', 'UsuariosController@index')-> name('usuarios.index');
Route::get('usuarios/{usua}', 'UsuariosController@edit')-> name('usuarios.edit');
Route::put('usuarios/{usua}', 'UsuariosController@update')-> name('usuarios.update');



Route::get('cita/{estado}', 'VerCitaController@index')-> name('vercita.index');
Route::put('cita/{cita}', 'VerCitaController@update')-> name('vercita.update');




Route::get('datos', 'DatosController@index')-> name('datos.index');
Route::get('datos/{sucursal}', 'DatosController@datos')-> name('datos.datos');
Route::post('datos', 'DatosController@fecha')-> name('datos.consulta');


});





/////////////////////////////////////////////
//rutas clientes


//rutas validad dpi

Route::post('validardpi', 'ValidarDpiController@validar')-> name('validar.validar');
Route::post('validarcita', 'ValidarDpiController@cita')-> name('validar.cita');

Route::get('validarcitas/{user}', 'ValidarDpiController@atras')-> name('validar.atras');






//servicios
Route::get('seleccionar/{user}/{servicio}', 'ValidarDpiController@servicio')-> name('validar.servicio');



//rutas agendar cita

Route::get('agendar/{user}/{servicio}', 'AgendarController@index')-> name('agendar.index');
Route::get('agendar/getsucursal/','AgendarController@getSucursal')->name('agendar.getsucursal');

Route::post('agendar/{user}/{servicio}', 'AgendarController@fase2')-> name('agendar.fase2');
Route::post('agendarfase3/{user}/{servicio}', 'AgendarController@fase3')-> name('agendar.fase3');
Route::post('confirmarcita/{user}/{servicio}', 'AgendarController@store')-> name('agendar.store');



Route::get('imprimir/{cita}', 'PdfController@imprimir')->name('imprimir.imprimir');










