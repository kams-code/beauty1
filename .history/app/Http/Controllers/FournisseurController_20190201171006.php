<?php

namespace App\Http\Controllers; use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Fournisseurs;

class FournisseurController extends Controller
{/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fournisseurs = Fournisseurs::get();
        return view('Fournisseurs.index',compact('fournisseurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Fournisseurs.create');
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
        $fournisseur= new Fournisseurs([
            'nom'=> $request->get('nom'),
        'prenom'=> $request->get('prenom'),
        'code'=> $request->get,
        'adresse'=> $request->get('adresse'),
        'email'=> $request->get('email'),
        'telephone'=> $request->get('telephone')
           
          ]);
          
          $fournisseur['code'] =$string;
          $user=Auth::user();
       
          $fournisseur['organisation_id']=$user->organisation_id;
          $fournisseur->save();


        //return redirect(route('Fournisseurs.edit',$fournisseur));
        return redirect(route('fournisseurs.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fournisseur = Fournisseurs::get()->where('id',$id);
        return $fournisseur;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fournisseur = Fournisseurs::findOrFail($id);
        return view('fournisseurs.edit',compact('fournisseur'));
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
        $fournisseur = Fournisseurs::findOrFail($id);
        $fournisseur->update($request->all());
       // return redirect(route('Fournisseurs.edit',$id));
       return redirect(route('fournisseurs.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
   
        if( Fournisseurs::findOrFail($id)->delete() ) {
            flash()->success('User has been deleted');
        } else {
            flash()->success('User not deleted');
        }

        return redirect()->back();
    }
}
