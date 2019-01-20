<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservations;
use App\Clients;
use App\Services;
use App\Factures;
use App\Categories;
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

      
        
        return view('reservations.create',compact('clients','services'));
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
        
        $facture ->save();
    }else{
        $facture = Factures::get()->where('id',$id);
        $facture->is_paid=1;
        $facture->save();
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
        $services = Services::all();
        $categories = Categories::all();
        $tickets = Tickets::all();
        return view('factures.show',compact('categories','facture','services','services'));
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
           $reservationin[$i]->save();
          
         }

         for ($i=$numbresin; $i<$numberofserviceselected; $i++) {
               
            $reservation =new Reservations([ 
                'code'=>$request->get('code'),
               'client_id'=>$request->get('client_id'),
               'service_id'=>$services_ids[$i]
           ]);
           
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
