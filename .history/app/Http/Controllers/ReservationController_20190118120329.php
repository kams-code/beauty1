<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservations;
use App\Clients;
use App\Services;

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
       $service=Services::pluck('nom','id')
       $clients=Clients::pluck('nom','id');
       $reservations = Reservations::get();
       return view('reservations.index',compact('reservations'));
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
        
        foreach($services_ids as $key=>$value)
        {

            $reservation =new Reservations([ 
             'code'=>$request->get('code'),
            'client_id'=>$request->get('client_id'),
            'service_id'=>$value
        ]);
        
        $reservation ->save();
        }
       
      
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
        $reservation->update($request->all());
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
        //
    }
}
