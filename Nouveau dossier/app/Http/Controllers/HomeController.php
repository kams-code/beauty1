<?php

namespace App\Http\Controllers; use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Organisations;
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
    public function index()
    {$clients=Clients::all();
        $Commandes=Commandes::all()->groupBy('produit_id');
        DB::Commandes('nom')->distinct('produit_id')->count('id');
        $Reservations=Reservations::all()->groupBy('service_id');
        DB::Commandes('nom')->distinct('service_id')->count('id');
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
      $chart=
      Charts::new('line','higcharts')->setTitle(Reservations)->     
      setLablels(array_merge($serv->toArray()))->setElementvalue(array_merge($servdate->toArray()))
      ->setElementLabel("Services creer")->setResponsive(false) ;  
           return view('home','count','clients','charts');
    }


   



}
