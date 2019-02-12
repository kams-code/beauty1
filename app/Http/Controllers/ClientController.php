<?php

namespace App\Http\Controllers; use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Clients;
use App\Commandes;
use App\Reservations;
use App\Produits;
use App\Services;
use App\User;
use App\Roles;use App\Permission;
use App\Http\Requests;
use Charts;
use Image;
use  App\Factures;
use  App\Jours;
use  App\Plannings;
use  App\Organisations;


use DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Clients::get();
        return view('clients.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$this->validate($request, [
            'nom' => 'bail|required|min:2',
            'prenom' => 'required|min:3',
            'ville' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'email' => 'required|email|unique:clients',
        ]);*/
        if($request->hasfile('imageup'))
        {
     
               $image=$request->file('imageup');
               $filename=time().'.'.$image->getClientOriginalExtension();
               $location=public_path('images/'.$filename);
               Image::make($image)->resize(800,400)->save($location); 
              $request->merge(['image' => $filename]);
               
        }
        $client = Clients::create($request->all());
        return redirect(route('clients.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Clients::get()->where('id',$id)->first();

        $reservations = Reservations::get()->where('client_id','=',$id);
        $services = Services::all();
        return view('clients.show',compact('client','services','reservations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Clients::findOrFail($id);
        return view('clients.edit',compact('client'));
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
        $client = Clients::findOrFail($id);
        $client->update($request->all());
        return redirect(route('clients.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if( Clients::findOrFail($id)->delete() ) {
            flash()->success('equipement supprime');
        } else {
            flash()->success('equipement en vu');
        }

        return redirect()->back();
    }
}
