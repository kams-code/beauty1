<?php

namespace App\Http\Controllers; use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Usertickets;

class UserticketController extends Controller
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
     
       return view('reservations.index',compact('reservations','Services','Clients','clients','services','codedistinct'));
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
        $clients=$request->get('clients');
        $tickets=$request->get('tickets');
        for($i=0; $i<count($clients); $i++)
        {
        for($j=0; $j<count($tickets); $j++)
            {$b=$clients[$i];
               $a=$tickets[$j];
                    $userticket =new Usertickets([ 
                        'user_id'=>$b,
                       'ticket_id'=>$a
                   ]); 
                   
                
                $userticket ->save();

             
           
        }

       
     
    }
    
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
