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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group( ['middleware' => ['auth']], function() {
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('posts', 'PostController');
    Route::resource('produits', 'ProduitsController');
    Route::resource('clients', 'ClientController');
    Route::resource('factures', 'FactureController');
    Route::resource('tickets', 'TicketController');
    Route::resource('reservations', 'ReservationController');
    Route::resource('equipements', 'EquipementController');
    Route::resource('services', 'ServiceController');
    Route::resource('personnels', 'PersonnelController');
    Route::resource('plannings','PlanningController');
    Route::resource('fournisseurs','FournisseurController');
    Route::resource('organisations','OrganisationController');
    Route::resource('stocks','StockController');

});

Route::get('/', function () {
    return view('/auth/login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/main', 'MainController@index')->name('main');
Route::get('/produits', 'ProduitController@index')->name('produits');
Route::get('/sortie', 'StockController@sortir')->name('sortie');



// ------ les routes de clients ---------
Route::resource('clients','ClientController');

// ------- les routes de factures --------
Route::resource('factures','FactureController');

// ------ les routes de tickets ------
Route::resource('tickets','TicketController');

// ----- les routes de reservations -------
Route::resource('reservations','ReservationController');
//---- les routes de produits ------
Route::resource('produits','ProduitController');
 
// ----- les routes de equipements -----
Route::resource('equipements','EquipementController');

// ---- les routes de services ------
Route::resource('services','ServiceController');

// ------ les routes de personnels ----
Route::resource('personnels','PersonnelController');

// ---- les routes de horaires ------
Route::resource('plannings','PlanningController');

// ----- les routes de fournisseurs ----
Route::resource('fournisseurs','FournisseurController');

// ------ les routes de roles ------
Route::resource('roles','RoleController');

// ---- les routes de organisations -----
Route::resource('organisations','OrganisationController');

//---les routes de stocks----
Route::resource('stocks','StockController');
