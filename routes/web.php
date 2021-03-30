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
//auth 
Route::get('/home', 'HomeController@index')->name('home');



//administración 


Route::resource('posts', 'PostController');
Route::resource('categories', 'CategoryController');
