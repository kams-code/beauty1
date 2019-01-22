<?php

namespace App\Http\Controllers; use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Clients;
use App\Commandes;
use App\Reservations;
use App\Produits;
use App\Services;
use App\User;
use App\Http\Requests;
use Charts;
use  App\Factures;

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
        foreach( $clients as $client){
            $services=Services::get()->where('client_id',$client->id)->first();
            if( $count>count($services))
            {

                $count= count($services);
            }
        }
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
        foreach( $clients as $client){
            $services=Services::get()->where('client_id',$client->id)->first();
            if( $count>count($services))
            {

                $count= count($services);
            }
        }
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
    { 
           return view('profile');
    }
}
