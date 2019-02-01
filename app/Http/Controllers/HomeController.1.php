<?php

namespace App\Http\Controllers; use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Clients;
use App\Commandes;
use App\Reservations;
use App\Produits;
use App\Services;
use App\User;
use App\Roles;use App\Permission;
use App\Http\Requests;
use Charts;
use  App\Factures;
use  App\Jours;
use  App\Plannings;
use  App\Organisations;


use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index1()
    {$clients=Clients::all();
        $Commandes=Commandes::all()->groupBy('produit_id');
        $Reservations=Reservations::all()->groupBy('service_id');
        $Produits=Produits::all();
        $count= 0;
        
        $clients=Clients::all();
        $services=Services::all();  
        $serv=Services::pluck('nom');
      $servdate=Services::pluck('created_at');
      $chart = Charts::new('line', 'highcharts')
      ->setTitle('My nice chart')
      ->setLabels(['First', 'Second', 'Third'])
      ->setValues([5,10,20])
      ->setDimensions(1000,500)
      ->setResponsive(false);
  return view('home', ['chart' => $chart]);
   
    }
    public function index()
    {
        $clients=Clients::all();
        $nombreclient=count($clients);
        $commandes=commandes::all()->groupBy('produit_id');
        
        $Produits=Produits::all();
        $count= 0;
        
        $clients=Clients::all();
        $services=Services::all();  
        $serv=Services::pluck('nom');
      $servdate=Services::pluck('created_at');
$factures=Factures::all();
$value=0;
foreach($factures as $facture)
{
    $value=$value+ $facture->montant;
}
$nbrefactures=count($factures);
      $Reservations = Reservations::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))

      ->get();

      $chart1 = Charts::database($Reservations, 'line', 'highcharts')

      ->title("Reservations par moi:")

      ->elementLabel("Reservations Total ")

      ->dimensions(1000, 500)

      ->responsive(false)

      ->groupByMonth(date('Y'), true);

        
        $users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))

        ->get();
$chart = Charts::database($users, 'line', 'highcharts')

      ->title("Monthly new Register Users")

      ->elementLabel("Total Users")

      ->dimensions(1000, 500)

      ->responsive(false)

      ->groupByMonth(date('Y'), true);

return view('home',compact('chart','value','chart1','commandes','services','nombreclient','nbrefactures'));

    }












    public function profile()
    { $users = User::pluck('name','id');
        $Users = User::get()->all();
        $jours = Jours::pluck('nom','id'); $user=Auth::user();
        $plannings = Plannings::where('user_id','=',$user->id)->get();
        $organisations=Organisations::where('id','=',$user->organisation_id)->get()->first();

        $roles =        DB::table('roles')->where('id','!=', 1)->pluck('name', 'id');
        $permissions = Permission::all('name', 'id');
        return view('profile',compact('users','plannings','jours','user','Users','organisations','roles','permissions'));
          
    }
}
