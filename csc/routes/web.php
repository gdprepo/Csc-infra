<?php

use Illuminate\Support\Facades\Route;
use App\Texte;
use App\Slider;

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

    $sliders = Slider::all();
    $sliderOne = Slider::find(1);

    $res['welcome'] = $welcome;
    $res['historique'] = $historique;

    $res['slider'] = $sliderOne;
    $res['sliders'] = $sliders;
    $check = 0;

    return view('welcome', ['res' => $res], ['check' => $check]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/dashboard/edit', 'HomeController@edit')->name('profile.edit');
Route::get('/dashboard/client/list', 'HomeController@clientlist')->name('client.list');
Route::get('/dashboard/client/add', 'HomeController@clientadd')->name('client.add');
Route::get('/dashboard/client/password', 'HomeController@clientpassword')->name('client.password');

Route::get('/dashboard/site', 'HomeController@site')->name('site');
Route::get('/dashboard/siteContact', 'HomeController@contact')->name('site.contact');
Route::post('/dashboard/site/welcome/upd/{id}', 'TexteController@welcome')->name('welcome.upd');
Route::post('/dashboard/site/realisation/upd/{id}', 'TexteController@updRealisation')->name('realisation.upd');
Route::post('/dashboard/site/document/delete/{id}', 'TexteController@documentdelete')->name('document.delete');
Route::post('/dashboard/site/slider/delete/{id}', 'TexteController@sliderdelete')->name('slider.delete');
Route::post('/dashboard/site/realisation/delete/{id}', 'TexteController@realisationdelete')->name('realisation.delete');
Route::post('/dashboard/site/realisation/add/{id}', 'TexteController@realisationadd')->name('realisation.add');
Route::post('/dashboard/site/realisation/imageCreate/{id}', 'TexteController@storeImage')->name('realisation.storeImage');
Route::post('/dashboard/site/document/add', 'TexteController@documentadd')->name('document.add');
Route::post('/dashboard/site/document/create', 'TexteController@storeDocument')->name('document.store');


Route::post('/dashboard/client/add', 'UserController@createclient')->name('client.create');
Route::post('/dashboard/client/password/upd', 'UserController@updPassword')->name('client.setpssw');



Route::get('/dashboard/client/{id}', 'HomeController@clientshow')->name('client.show');
Route::get('/dashboard/logout', 'HomeController@deconnection')->name('deconnection');


Route::get('/prestations', 'PageController@prestations')->name('prestations');
Route::get('/realisations', 'PageController@realisations')->name('realisations');
Route::get('/showrooms', 'PageController@showrooms')->name('showrooms');
Route::get('/contact', 'PageController@contact')->name('contact');

Route::get('/contact/mail', 'ContactController@mail')->name('contact.mail');




