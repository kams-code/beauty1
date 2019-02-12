<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Abonnements;
use App\Organisations;
use Date;

class AbonnementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
       $organisations  = Organisations::pluck('nom','id');
       $abonnements  =  Abonnements::all();
     
       return view('abonnements.index',compact('organisations','abonnements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    $organisations  = Organisations::pluck('nom','id');
        $abonnements  =  Abonnements::all();
        return view('abonnements.create',compact('organisations','abonnements'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $string = bin2hex(openssl_random_pseudo_bytes(10));
        $time=new date($request->get('datedebut'));
        $organisation = Organisations::find($request->get('organisation_id'));
        $reservation =new Abonnements([ 
            'code'=>$string,
            'datedebut'=> $time,
            'nominstitut'=>  $organisation->nom,
            'type'=> $request->get('heure'),

            'organisation_id'=>  $organisation->id,
            'etat'=> $request->get('etat'),
       ]);  
       if ($reservation['etat'] =="on"){
        $reservation['etat']=1;
      }if ($reservation['etat'] !="on"){
        $reservation['etat']=0; 
      }
      $reservation->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $abonnement = Abonnements::find($id);
        
        return view('abonnements.show',compact('abonnement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $abonnement = Abonnements::find($id);
        $organisations  = Organisations::pluck('nom','id');
        return view('abonnements.edit',compact('abonnement','organisations'));
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
       
        $reservation = Abonnements::findOrFail($id);
        $time=new date($request->get('datedebut'));
        $organisation = Organisations::find($request->get('organisation_id'));

        $reservation['datedebut']= $time;
        $reservation['nominstitut']=$organisation->nom;
        $reservation['type']=$request->get('heure');
        $reservation['organisation_id']= $organisation->id;
       
       if ($request->get('etat')=="on"){
        $reservation['etat']=1;
      }if ($request->get('etat') !="on"){
        $reservation['etat']=0; 
      }
      
      $reservation->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
    public function destroy(Request $request,$id)
    {
        if( Abonnements::find($id)->delete() ) {
            flash()->success('Abonnement supprime');
        } else {
            flash()->success('Abonnement en vu');
        }

        return redirect(route('organisations.index'));
    }
}
