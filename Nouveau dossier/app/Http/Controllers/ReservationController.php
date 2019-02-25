<?php

namespace App\Http\Controllers; use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Reservations;
use App\Clients;
use App\Services;
use App\Factures;
use App\User;
use DB;
use Date;
use Calendar;
class ReservationController extends Controller
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

$reservation_list=[];
       foreach($reservations as $reservation)
       {
           $reservation_list[]=Calendar::event($reservation->code,true,new \DateTime($reservation->datedebut),new \DateTime($reservation->datefin),
           [
               'url' => 'http://full-calendar.io',
             
           ]);
          
       }
    
       $calendar_details=Calendar::addEvents($reservation_list) ->setOptions(['firstDay'=> 1,
       'editable'=> true,
       'navLinks'=> true,
       'selectable'  => true,
       'durationeditable' => true,
])->setCallbacks([ //set fullcalendar callback options (will not be JSON encoded)
    'eventClick' => ' function(calEvent, jsEvent, view) {
        
    }',
    'viewRender' => 'function() {alert("Callbacks!");}'
]);


       return view('reservations.index',compact('calendar_details','reservations','Services','Clients','clients','services','codedistinct'));
    }

    public function index1($id)
    {
        $reservation=Reservations::where('id',$id)->first();
        $reservations=Reservations::all()->where('code',$reservation['code']);
      
        $users = User::pluck('nom','id');
        $services = Services::all();

      
        
        return view('reservations.attribuer',compact('users','reservations','services'));
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
        $services_ids=$request->get('selectservices');
        $montant=0;
        $time=new date($request->get('email'));
       
        $debut=$time;
        
       
        $fin=new date( strtotime($time)+(60*30*count($services_ids)) )  ;
    
        $string = bin2hex(openssl_random_pseudo_bytes(10));
        foreach($services_ids as $key=>$value)
        {
            $service = Services::get()->where('id',$value)->first();
           
            $reservation =new Reservations([ 
             'code'=>$string,
             'datedebut'=> $debut,
             'datefin'=>$fin,
        
            'client_id'=>$request->get('selectclients'),
            'service_id'=>$value
        ]);  
       
        $a=
        $montant=$montant+$service->montant;
        $user=Auth::user();
       
       $reservation['organisation_id']=$user->organisation_id;
      
        $reservation ->save();
        }
        $client = Clients::get()->where('id',$request->get('selectclients'))->first();
        $facturetion =new Factures([ 
            'code'=>$string,
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
    {dd($id);
        
        return view('reservations.show',compact('reservations','services','client'));
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
        $client=Clients::findOrFail( $reservation->client_id);
        $clients = Clients::pluck('nom','id')->all();
        $services = Services::pluck('nom','id')->all();
        return view('reservations.edit',compact('reservation','clients','client','services'));
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
      
        dd($request);
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
