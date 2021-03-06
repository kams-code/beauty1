<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tickets;
use App\Services;

class TicketController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Services::pluck('nom','id');
        $Tickets=Tickets::get();
        return view('tickets.index',compact('Tickets','services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tick= new Tickets([
            'titre' => $request->get('titre'),
            'type'=> $request->get('type'),
            'etat'=> $request->get('etat'),
            'valeur'=> $request->get('valeur'),
            'service_id'=> $request->get('user_id')
          ]);
          if ($tick['etat'] =="on"){
            $tick['etat']=1;
          }if ($tick['etat'] !="on"){
            $tick['etat']=0; 
          }
  $tick->save();
        return redirect(route('tickets.index'));
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services=Services::pluck('nom', 'id');
      
        $ticket=Tickets::findOrFail($id);
        return view ('tickets.edit',compact('ticket','services'));
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
        $ticket = Tickets::findOrFail($id);


        
        $ticket->update($request->all());
        return redirect(route('tickets.edit',$id));
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
