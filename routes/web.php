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
    return view('accueil0');
});
Route::group(['middleware'=>['auth']], function () {
    Route::get('/dashboard','App\Http\controllers\DashboardController@index')->name('dashboard');
   
});


require __DIR__.'/auth.php';


    
Route::get('/', 'App\Http\controllers\Accueil0Controller@evenement');

Route::get('/client/profile','App\Http\controllers\ClientsController@profile');
Route::get('/client/boit_chat', 'App\Http\controllers\ClientsController@boit_chat');
Route::get('/client/accueil', 'App\Http\controllers\ClientsController@accueil');

Route::get('/client/edit_profile', 'App\Http\controllers\ClientsController@edit_profile');
Route::post('/client/accueil', 'App\Http\controllers\ClientsController@changepassword')->name('changepassword');
Route::get('/client/edit_profile', 'App\Http\controllers\ClientsController@edit' );
Route::post('/update', 'App\Http\controllers\ClientsController@update')->name('update');
Route::resource('/client/annonces', 'App\Http\controllers\AnnonceController' );


Route::get('/fournisseur/profile', 'App\Http\controllers\FournisseursController@profile');
Route::get('/fournisseur/boit_chat', 'App\Http\controllers\FournisseursController@boit_chat');
Route::get('/fournisseur/accueil', 'App\Http\controllers\FournisseursController@accueil');

Route::get('/fournisseur/edit_profile', 'App\Http\controllers\FournisseursController@edit_profile');
Route::post('/fournisseur/accueil', 'App\Http\controllers\FournisseursController@changepassword')->name('changepassword');
Route::get('/fournisseur/edit_profile', 'App\Http\controllers\FournisseursController@edit_fournisseurs' );
Route::post('/update_fournisseurs', 'App\Http\controllers\FournisseursController@update_fournisseurs')->name('update_fournisseurs');
Route::resource('/fournisseur/demandes', 'App\Http\controllers\DemandeController' );


Route::resource('/admin/categorie_evenements', 'App\Http\controllers\CategorieEvenementController' );
Route::resource('/admin/superviseurs', 'App\Http\controllers\SuperviseurController' );
Route::resource('/admin/categorie_services', 'App\Http\controllers\CategorieServiceController' );


Route::resource('/admin/clients', 'App\Http\controllers\ClientsController' );
Route::resource('/admin/fournisseurs', 'App\Http\controllers\FournisseursController' );




Route::get('/user/profile', 'App\Http\controllers\UserController@profile');
Route::post('/user/profile', 'App\Http\controllers\UserController@update_avatar');
Route::get('/user/edit_profile', 'App\Http\controllers\UserController@edit_profile');
Route::post('/user/edit_profile', 'App\Http\controllers\UserController@update_avatar');
Route::get('/user/accueil', 'App\Http\controllers\UserController@changepassword');
Route::post('/user/accueil', 'App\Http\controllers\UserController@changepassword')->name('changepassword');

Route::get('/user/clients', 'App\Http\controllers\ClientsController@indexsuperviseurs' );
Route::get('/user/clients/show/{id}', 'App\Http\controllers\ClientsController@showsuperviseurs' );

Route::get('/user/fournisseurs', 'App\Http\controllers\FournisseursController@indexsuperviseurs' );
Route::get('/user/fournisseurs/show/{id}', 'App\Http\controllers\FournisseursController@showsuperviseurs' );

