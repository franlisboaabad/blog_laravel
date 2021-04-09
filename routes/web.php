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

Route::get('nosotros','PageController@nosotros')->name('nosotros');
Route::get('servicios','PageController@servicios')->name('servicios');
Route::get('portafolio','PageController@portafolio')->name('portafolio');
Route::get('contacto','PageController@contacto')->name('contacto');

// rutas portfolio

Route::get('/portafolio/tortugas', 'PageController@tortugas')->name('tortugas');
Route::get('/portafolio/manglares', 'PageController@manglares')->name('manglares');
Route::get('/portafolio/caracucho', 'PageController@caracucho')->name('caracucho');

// email formulario contacto 
Route::post('/contactar', 'PageController@contacto_email')->name('contacto_email');


// blog 

Route::get('/entrada/{id}','PageController@post')->name('entrada');
Route::get('/entradas','PageController@posts')->name('entradas');

//auth 
Route::get('/home', 'HomeController@index')->name('home');



//administración 


Route::resource('posts', 'PostController');
Route::resource('categories', 'CategoryController');
