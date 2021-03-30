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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/', function () { return view('welcome'); });
Route::get('/','PageController@index')->name('index');
Route::get('/entrada/{id}','PageController@post')->name('entrada');
Route::get('/entradas','PageController@posts')->name('entradas');
Route::get('/nosotros','PageController@nosotros')->name('nosotros');
Route::get('/servicios','PageController@servicios')->name('servicios');
Route::get('/normas','PageController@normas')->name('normas');
Route::get('/contacto','PageController@contacto')->name('contacto');


//pag normas 
Route::get('/normas/responsabilidad_social','PageController@responsabilidad_social')->name('responsabilidad_social');
Route::get('/normas/sistema_alimentaria','PageController@sistema_alimentaria')->name('sistema_alimentaria');

Route::get('/normas/sistema_ambiental','PageController@sistema_ambiental')->name('sistema_ambiental');
Route::get('/normas/sistema_antisoborno','PageController@sistema_antisoborno')->name('sistema_antisoborno');

Route::get('/normas/sistema_calidad','PageController@sistema_calidad')->name('sistema_calidad');
Route::get('/normas/sistema_energetica','PageController@sistema_energetica')->name('sistema_energetica');

Route::get('/normas/sistema_gestion','PageController@sistema_gestion')->name('sistema_gestion');
Route::get('/normas/sistema_trabajo','PageController@sistema_trabajo')->name('sistema_trabajo');
Route::get('/normas/sistema_vial','PageController@sistema_vial')->name('sistema_vial');

//pag servicios 
Route::get('/servicios/auditoria','PageController@auditoria')->name('auditoria');
Route::get('/servicios/capacitacion','PageController@capacitacion')->name('capacitacion');

Route::get('/servicios/cumplimiento','PageController@cumplimiento')->name('cumplimiento');
Route::get('/servicios/implementacion','PageController@implementacion')->name('implementacion');

//auth 
Route::get('/home', 'HomeController@index')->name('home');



//administración 


Route::resource('posts', 'PostController');
Route::resource('categories', 'CategoryController');
