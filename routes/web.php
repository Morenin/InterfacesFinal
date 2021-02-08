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
// Route::get('/', function() {
//     return redirect(route('login'));
// });
Route::get('/', function () {
    //return view('welcome');
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware'=>'admin'], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/Usuario', 'UserController@index')->name('usuario');
    Route::resource('User','UserController');
    Route::resource('PDF','pdfController');
    Route::get('/pdfAlumnos','pdfController@index2')->name('pdfAlumnos');
    Route::post('/CrearPdf','pdfController@store2')->name('CrearPdf');
    Route::resource('email','emailController');
    Route::get('/ciclo/{id}/ofertas', 'pdfController@byCiclo');
    Route::get('/usuarios/{id}', 'UserController@filtro');
    Route::get('/welcome', function () {
        return view('welcome');
    });
});
