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
Route::get('create-chart/{type}','ChartController@makeChart');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('bar-chart', 'ChartController@index');
Route::group( ['middleware' => ['auth']], function() {
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



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/main', 'MainController@index')->name('main');
Route::get('/sortie', 'StockController@sortir')->name('sortie');
Route::get('/facture/{}', 'FactureController@sotre1')->name('factures.validate');
Route::get('/taglists/create', 'TagListController@create')->name('taglists.create');
Route::post('/taglists/store', 'TagListController@store')->name('taglists.store');
Route::get('/taglists/create1', 'TagListController@create1')->name('taglists.create1');
Route::post('ajax', function() {
    // grab the id
    $id = \Input::get('id');

    // return it back to the user in json response
    return response()->json([
        'id' => 'The id is: ' . $id
    ]);
});
Route::get('form','FormController@create')->name('form');
Route::post('form','FormController@store')->name('form');
Route::resource('categories','CategorieController');
// ------ les routes de clients ---------
Route::resource('clients','ClientController');
Route::resource('commandes','CommandeController');
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
