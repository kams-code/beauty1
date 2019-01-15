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
    return view('/auth/login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/main', 'MainController@index')->name('main');






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