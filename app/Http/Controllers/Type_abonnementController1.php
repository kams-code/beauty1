<?php

namespace App\Http\Controllers; use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Type_abonnement;
use App\Clients;
use App\Services;
use App\Factures;
use DB;
class Type_abonnementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
       $type_abonnements = Type_abonnement::get();

     
       return view('type_abonnements.index',compact('type_abonnements'));
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
        $services_ids=$request->get('services');
        $montant=0;
        foreach($services_ids as $key=>$value)
        {
            $service = Services::get()->where('id',$value)->first();
   
            $reservation =new Reservations([ 
             'code'=>$request->get('code'),
             'date'=>$request->get('date'),
             'heure'=>$request->get('heure'),
            'client_id'=>$request->get('client_id'),
            'service_id'=>$value
        ]);  
        $a=
        $montant=$montant+$service->montant;
        $user=Auth::user();
       
       $reservation['organisation_id']=$user->organisation_id;
        
        $reservation ->save();
        }
        $client = Clients::get()->where('id',$request->get('client_id'))->first();
        $facturetion =new Factures([ 
            'code'=> $request->get('code'),
           'nom'=> $client->nom,
           'montant'=> $montant,
           'is_paid'=>'0'
       ]);
       $user=Auth::user();
       
       $facturetion['organisation_id']=$user->organisation_id;
        
       $facturetion ->save();
       
      
        return redirect(route('reservations.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservation = Reservations::get()->where('id',$id);
        return $reservation;
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
    public function destroy($id)
    {
        if( Reservations::findOrFail($id)->delete() ) {
            flash()->success('User has been deleted');
        } else {
            flash()->success('User not deleted');
        }

        return redirect()->back();
    }
}
