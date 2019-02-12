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



Auth::routes();
Route::get('create-chart/{type}','ChartController@makeChart');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('bar-chart', 'ChartController@index');
Route::group( ['middleware' => ['auth']], function() {
    Route::get('/', 'HomeController@index');
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('posts', 'PostController');
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
Route::post( '/organisations/{id}','OrganisationController@update');
Route::get('/permissions', 'RoleController@index1')->name('permissions');
Route::get('/produits/categorie/{id}', 'ProduitController@index1')->name('categorieproduit');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/main', 'MainController@index')->name('main');
Route::get('/sortie', 'StockController@sortir')->name('sortie');
Route::get('/facture/{}', 'FactureController@sotre1')->name('factures.validate');
Route::get('form','FormController@create')->name('form');
Route::post('form','FormController@store')->name('form');
Route::resource('categories','CategorieController');
Route::resource('categorieproduits','CategorieproduitController');
// ------ les routes de clients ---------
Route::resource('clients','ClientController');
Route::resource('commandes','CommandeController');
Route::resource('type_abonnements','Type_abonnementController');
Route::resource('abonnements','AbonnementController');
// ------- les routes de factures --------
Route::resource('factures','FactureController');
Route::resource('usertickets','UserticketController');
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
Route::resource('abonnments','AbonnmentController');
Route::group(['prefix' => 'api'], function()
{
	// Customer API Routes
	Route::get('get-available-days', 'APIController@GetAvailableDays');

	// Admin API Routes
    Route::get('get-all-appointments', 'AdminAPIController@GetAllAppointments');
    Route::get('get-all-plannings', 'AdminAPIController@GetAllPlannings');
    Route::get('get-appointment-info/{id}', 'AdminAPIController@GetAppointmentInfo');
    Route::get('get-planning-info/{id}', 'AdminAPIController@GetPlanningInfo');
	Route::get('get-all-availability', 'AdminAPIController@GetAllAvailability');
	Route::any('set-availability', 'AdminAPIController@SetAvailability');
});