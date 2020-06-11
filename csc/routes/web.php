<?php

use Illuminate\Support\Facades\Route;
use App\Texte;
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
    $welcome = Texte::find(1);
    $historique = Texte::find(2);

    return view('welcome', ['welcome' => $welcome], ['historique' => $historique]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/dashboard/edit', 'HomeController@edit')->name('profile.edit');
Route::get('/dashboard/client/list', 'HomeController@clientlist')->name('client.list');
Route::get('/dashboard/client/add', 'HomeController@clientadd')->name('client.add');
Route::get('/dashboard/client/password', 'HomeController@clientpassword')->name('client.password');

Route::get('/dashboard/site', 'HomeController@site')->name('site');
Route::post('/dashboard/site/welcome/upd/{id}', 'TexteController@welcome')->name('welcome.upd');
//Route::post('/dashboard/site/historique/upd', 'TexteController@historique')->name('historique.upd');



Route::post('/dashboard/client/add', 'UserController@createclient')->name('client.create');
Route::post('/dashboard/client/password/upd', 'UserController@updPassword')->name('client.setpssw');



Route::get('/dashboard/client/{id}', 'HomeController@clientshow')->name('client.show');
Route::get('/dashboard/logout', 'HomeController@deconnection')->name('deconnection');


Route::get('/prestations', 'PageController@prestations')->name('prestations');
Route::get('/realisations', 'PageController@realisations')->name('realisations');
Route::get('/showrooms', 'PageController@showrooms')->name('showrooms');
Route::get('/contact', 'PageController@contact')->name('contact');

Route::get('/contact/mail', 'ContactController@mail')->name('contact.mail');




