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
    // return view('welcome');
    return view('auth.login');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Auth::routes();
// Route::middleware('auth')->group(function() {
//     Route::get('/welcome', 'HomeController@index')->name('welcome');
// });

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Usuario', 'UserController@index')->name('usuario');
Route::resource('User','UserController');
Route::resource('PDF','pdfController');

Route::resource('email','emailController');