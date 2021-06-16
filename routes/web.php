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





Route::get('/', 'App\Http\controllers\Accueil0Controller@accueil');

Route::get('/accueil', 'App\Http\controllers\Accueil0Controller@accueil');
Route::get('/evenements', 'App\Http\controllers\Accueil0Controller@evenements');
Route::get('/services', 'App\Http\controllers\Accueil0Controller@services');
Route::get('/propos', 'App\Http\controllers\Accueil0Controller@propos');
Route::get('/contact', 'App\Http\controllers\Accueil0Controller@contact');


Route::get('/indexpayment/{id}', 'App\Http\controllers\Accueil0Controller@indexpayment');
Route::post('/payment/{id}', 'App\Http\controllers\Accueil0Controller@payment');

Route::get('/choixpayment', 'App\Http\controllers\Accueil0Controller@choixpayment');






Route::group(['middleware'=>['auth','isClient']], function () {
    Route::get('/dashboard','App\Http\controllers\DashboardController@index')->name('dashboard');
    
   
});


require __DIR__.'/auth.php';


    


Route::get('/client/profile','App\Http\controllers\ClientsController@profile');
Route::get('/boit_chats', 'App\Http\controllers\ClientsController@boit_chat');
Route::get('/accueill', 'App\Http\controllers\ClientsController@accueil');

Route::get('/client/edit_profile', 'App\Http\controllers\ClientsController@edit_profile');
Route::post('/client/accueil', 'App\Http\controllers\ClientsController@changepassword')->name('changepassword');
Route::get('/client/edit_profile', 'App\Http\controllers\ClientsController@edit' );
Route::post('/update', 'App\Http\controllers\ClientsController@update')->name('update');
Route::resource('/client/annoncess', 'App\Http\controllers\AnnonceController' );

Route::get('/evenementss', 'App\Http\controllers\ClientsController@evenements');
Route::get('/servicess', 'App\Http\controllers\ClientsController@services');
Route::get('filtre_evenement/{id}', 'App\Http\controllers\ClientsController@filtre_evenement');
Route::get('filtre_service/{id}', 'App\Http\controllers\ClientsController@filtre_service');
Route::get('filtre_demande/{id}', 'App\Http\controllers\ClientsController@filtre_demande');
Route::get('accepter/{id}', 'App\Http\controllers\ClientsController@accepter');
Route::get('refuser/{id}', 'App\Http\controllers\ClientsController@refuser');

Route::get('/chatify_fournisseur', 'Chatify\Http\Controllers\MessagesController@index');
Route::get('/chatify_client', 'App\Http\controllers\FournisseurMessagesController@index');

Route::get('/fournisseur/profile', 'App\Http\controllers\FournisseursController@profile');
Route::get('/boit_chat', 'App\Http\controllers\FournisseursController@boit_chat');
Route::get('/accueilll', 'App\Http\controllers\FournisseursController@accueil');

Route::get('/fournisseur/edit_profile', 'App\Http\controllers\FournisseursController@edit_profile');
Route::post('/fournisseur/accueil', 'App\Http\controllers\FournisseursController@changepassword')->name('changepassword');
Route::get('/fournisseur/edit_profile', 'App\Http\controllers\FournisseursController@edit_fournisseurs' );
Route::post('/update_fournisseurs', 'App\Http\controllers\FournisseursController@update_fournisseurs')->name('update_fournisseurs');
Route::get('/demandes', 'App\Http\controllers\DemandeController@index' );

Route::post('fournisseur/store/{id}', 'App\Http\controllers\DemandeController@store');
Route::get('fournisseur/create/{id}', 'App\Http\controllers\DemandeController@create');

Route::get('/evenement', 'App\Http\controllers\FournisseursController@evenements');
Route::get('/service', 'App\Http\controllers\FournisseursController@services');
Route::get('/filter/{id}', 'App\Http\controllers\DemandeController@filter');
Route::get('/indexdemande/{id}', 'App\Http\controllers\DemandeController@indexdemande');

Route::get('destroydemande/{id}', 'App\Http\controllers\DemandeController@destroy' );







Route::resource('/admin/categorie_evenements', 'App\Http\controllers\CategorieEvenementController' );
Route::resource('/admin/superviseurs', 'App\Http\controllers\SuperviseurController' );
Route::resource('/admin/categorie_services', 'App\Http\controllers\CategorieServiceController' );
Route::resource('/admin/abonnements', 'App\Http\controllers\AbonnementController' );
Route::resource('/admin/clients', 'App\Http\controllers\ClientsController' );
Route::resource('/admin/fournisseurs', 'App\Http\controllers\FournisseursController' );


Route::get('/admin/annonces', 'App\Http\controllers\AdminController@index');
Route::get('/admin/accueil', 'App\Http\controllers\AdminController@accueil');

Route::get('/admin/filtre_demande/{id}', 'App\Http\controllers\AdminController@filtre_demande');
Route::resource('/admin/annonce', 'App\Http\controllers\AdminController' );
Route::post('/admin/avertissement/{id}', 'App\Http\controllers\AdminController@avertissement');
Route::get('/admin/changeisban0/{id}', 'App\Http\controllers\AdminController@bannir0');
Route::get('/admin/changeisban1/{id}', 'App\Http\controllers\AdminController@bannir1');

Route::post('/admin/avertissement_demande', 'App\Http\controllers\AdminDemandeController@avertissement_demande');


Route::resource('/admin/demande', 'App\Http\controllers\AdminDemandeController' );
Route::get('/admin/changedemandeisban0/{id}', 'App\Http\controllers\AdminDemandeController@bannir0');
Route::get('/admin/changedemandeisban1/{id}', 'App\Http\controllers\AdminDemandeController@bannir1');







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
Route::get('/user/accueil', 'App\Http\controllers\UserController@accueil');
Route::resource('/user/annonces', 'App\Http\controllers\UserController' );


Route::get('/user/changeisban0/{id}', 'App\Http\controllers\UserController@bannir0');
Route::get('/user/changeisban1/{id}', 'App\Http\controllers\UserController@bannir1');
Route::post('/user/avertissement/{id}', 'App\Http\controllers\UserController@avertissement');
Route::resource('/user/demandes', 'App\Http\controllers\UserDemandeController' );
Route::post('/user/avertissement_demande', 'App\Http\controllers\UserDemandeController@avertissement_demande');




