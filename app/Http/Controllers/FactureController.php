<?php

namespace App\Http\Controllers; use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Reservations;
use App\Clients;
use App\Services;
use App\Factures;
use App\Produits;
use App\Categories;
use App\Tickets;
use App\Usertickets; 
use App\Organisations; 
use File;
use DB;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        /*$reservations = Reservations::with(['client' => function($query){
        $query->select('nom');  
        }]);*/

       // $reservations = Reservations::with('service','client')->get();
       $services=Services::pluck('nom','id');
       $clients=Clients::pluck('nom','id');

       $Services=Services::get();
       $Clients=Clients::get();
       $reservations = Reservations::get();
       $codedistinct=DB::table('reservations')
       ->distinct()->select('code')->get();
       $factures = Factures::paginate(5);
       return view('factures.index',compact('factures','reservations','Services','Clients','clients','services','codedistinct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients=Clients::pluck('nom','id');
        $services = Services::pluck('nom','id');
        $produits = Produits::pluck('nom','id');
      
        
        return view('factures.create',compact('clients','services','produits'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->get('id')===null){
        $servicescode=$request->get('code');
        $facture =new Factures([ 
            'code'=>$request->get('code'),
           'nom'=>$request->get('nom'),
           'montant'=>$request->get('montant'),
           'is_paid'=>0

       ]);
       $user=Auth::user();
       
       $facture['organisation_id']=$user->organisation_id;
        $facture ->save();
    }else{
        $facture = Factures::get()->where('id',$id);
        $user=Auth::user();
       
       $facture['organisation_id']=$user->organisation_id;
        $facture->is_paid=1;
        $facture->save();
    }
    if($request->get('id')===null){
        
    }
        
       
      
        return redirect(route('reservations.index'));
    }

    public function store1($id)
    {
      
    }


   


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $facture = Factures::get()->where('id',$id)->first();
        $reservations = Reservations::get()->where('code',$facture->code);
        $reser = Reservations::get()->where('code',$facture->code)->first();
        $factures = Factures::all();
        $services = Services::all();
        $idorg=$facture->organisation_id;
         $organisation=Organisations::get()->where('id',1)->first();
        $categories = Categories::all();
       $tickets = Tickets::all();
        
        $usertickets = Usertickets::get()->where('user_id',$reser->client_id);
        return view('factures.show',compact('organisation','categories','reservations','facture','services','services','tickets','usertickets'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservation = Reservations::findOrFail($id);
        $clients = Clients::pluck('nom','id')->all();
        $services = Services::pluck('nom','id')->all();
        return view('reservations.edit',compact('reservation','clients','services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
        
        $reservation = Reservations::findOrFail($id);
        $values = Reservations::get()->where('code',$reservation->code );
        $services_ids=$request->get('services');
        $reservationin = $values->values();
      
         $numberofserviceselected=count($services_ids);
       
            $numbresin=count($reservationin);
      
        if($numberofserviceselected===$numbresin)
        {
            foreach($services_ids as $key=>$value)
        {

            $reservation =new Reservations([ 
             'code'=>$request->get('code'),
            'client_id'=>$request->get('client_id'),
            'service_id'=>$value
        ]);
        
        $reservationin[ $key]->code=$request->get('code');            $reservationin[ $key]->client_id=$request->get('client_id');            $reservationin[ $key]->client_id=$request->get('client_id');            
        $user=Auth::user();
       
        $reservationin[ $key]['organisation_id']=$user->organisation_id; 
    
        $reservationin[ $key]->save();
        }
        }elseif($numberofserviceselected>$numbresin)
        {
            for ($i=0; $i<$numbresin; $i++) {
               
            $reservation =new Reservations([ 
                'code'=>$request->get('code'),
               'client_id'=>$request->get('client_id'),
               'service_id'=>$services_ids[$i]
           ]);
        
          $reservationin[$i]->code=$request->get('code');            $reservationin[$i]->client_id=$request->get('client_id');            $reservationin[$i]->client_id=$request->get('client_id');            
          $user=Auth::user();
       
          $reservationin[ $key]['organisation_id']=$user->organisation_id;  
          $reservationin[$i]->save();
          
         }

         for ($i=$numbresin; $i<$numberofserviceselected; $i++) {
               
            $reservation =new Reservations([ 
                'code'=>$request->get('code'),
               'client_id'=>$request->get('client_id'),
               'service_id'=>$services_ids[$i]
           ]);
           $user=Auth::user();
       
           $reservation['organisation_id']=$user->organisation_id; 
           $reservation->save();
         }


        }elseif($numberofserviceselected<$numbresin)
        {
            for ($i=0; $i<$numberofserviceselected; $i++) {
              
                $reservation =new Reservations([ 
                    'code'=>$request->get('code'),
                   'client_id'=>$request->get('client_id'),
                   'service_id'=>$services_ids[$i]

               ]);
               
              $reservationin[$i]->code=$request->get('code');            $reservationin[$i]->client_id=$request->get('client_id');            $reservationin[$i]->client_id=$request->get('client_id');            
              
              $user=Auth::user();
       
           $reservationin[$i]['organisation_id']=$user->organisation_id;
              $reservationin[$i]->save();
             }

             for ($i=$numberofserviceselected; $i<=$numbresin; $i++) {
            
               
               $reservationin[$i]->delete();
             }

        }
        


        return redirect(route('reservations.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $request=new Request();
        $request1=new Request();
        $facture = Factures::get()->where('id',$id)->first();
        $facture->is_paid=1;
        $request->request->add(array_merge($facture->toArray()));
        $facturetion =new Factures([ 
            'code'=> $facture->code,
           'nom'=> $facture->nom,
           'montant'=> $facture->montant,
           'is_paid'=>'1111111'
       ]);
       $request1->request->add(array_merge($facturetion->toArray()));



        $facturenew=Factures::findOrFail($id);
    
        dd($request1);
        $facturenew->update($request1->all());


        return redirect()->back()->with('success','Member deleted');
    }
}
