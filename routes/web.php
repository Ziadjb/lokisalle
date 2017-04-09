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


// Administration
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function() {

    Route::get('salles', function(){
        return view('admin.gestion.salle');
    });

} );

Route::get('/', function () {
    return view('accueil');
});

Route::get('/avis', function () {
    return view('avis');
});

Route::get('/commande', function () {
    return view('commande');
});

Route::get('/fiche-produit', function () {
    return view('fiche-produit');
});

Route::get('/membre', function () {
    return view('membre');
});

Route::get('/produit', function () {
    return view('produit');
});

Route::get('/stats', function () {
    return view('stats');
});


Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');
