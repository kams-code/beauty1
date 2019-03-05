<?php

namespace App\Http\Controllers;

use App\PersonnelReservations;
use App\Reservations;

use Illuminate\Http\Request;
use Date;

class PersonnelReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
$reservation=Reservations::where('id',$request->get('reservation'))->first();
$ordre=$request->get('ordre');
$service=$request->get('services');
$user=$request->get('users');
       foreach($ordre as $key=>$value)
       {
        foreach($service as $key1=>$value1)
        {

            foreach($user as $key2=>$value2)
        {
           if ($key==$key1 and $key1==$key2) {
                      
            $persres =new PersonnelReservations([ 
                'reservation_id'=> $request->get('reservation'),
            'service_id'=> $value1,
            'user_id'=>  $value2,
            'horaire'=> new date( strtotime($reservation->datedebut)+(60*30*$value) )  ,
           
    
            
           ]);

           $persres->save();

           }
           
          
     }
          
     }
         
    }

    
    return redirect()->back();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\PersonnelReservation  $personnelReservation
     * @return \Illuminate\Http\Response
     */
    public function show(PersonnelReservation $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PersonnelReservation  $personnelReservation
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonnelReservation $personnelReservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PersonnelReservation  $personnelReservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonnelReservation $personnelReservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PersonnelReservation  $personnelReservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonnelReservation $personnelReservation)
    {
        //
    }
}
