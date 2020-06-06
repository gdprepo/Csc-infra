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
Route::get('/prestations', 'PageController@prestations')->name('prestations');
Route::get('/realisations', 'PageController@realisations')->name('realisations');
Route::get('/showrooms', 'PageController@showrooms')->name('showrooms');
Route::get('/contact', 'PageController@contact')->name('contact');

Route::get('/contact/mail', 'ContactController@mail')->name('contact.mail');




