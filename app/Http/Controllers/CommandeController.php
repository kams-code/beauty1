<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commandes;
use App\Services;
use App\Produits;
use App\Fournisseurs;
use App\User;


class CommandeController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $fournisseurs=Fournisseurs::pluck('nom', 'id');
        $produits=Produits::pluck('nom', 'id');
        $users=User::pluck('name', 'id');
        $commandes=Commandes::get();
        return view('commandes.index',compact('commandes','fournisseurs' ,'produits' ,'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {$fournisseurs=Fournisseurs::pluck('nom', 'id');
        $produits=Produits::pluck('nom', 'id');
        $users=User::pluck('name', 'id');
        $commandes=Commandes::get();
        $quantites=Commandes::pluck('quantite');;
     return view('commandes.create',compact('commandes','fournisseurs' ,'produits' ,'users','quantites'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        $tick= new Commandes([
            'nom'=> $request->get('nom'),
            'quantite'=> $request->get('quantite'),
            'fournisseur_id'=> $request->get('fournisseur_id'),
            'produit_id'=> $request->get('produit_id'),
          
            'etat'=> $request->get('etat'),
            'user_id'=> auth()->user()->id
          ]);
          if ($tick['etat'] =="on"){
            $tick['etat']=1;
          }if ($tick['etat'] !="on"){
            $tick['etat']=0; 
          }
          
  $tick->save();
  if($tick->etat===1){
    $myRequest = new \Illuminate\Http\Request();
    $myRequest=$request;
    $myRequest->request->add(['quantite_initial' => $request->get('quantite')]);
    $myRequest->request->add(['quantite_limite' => $request->get('quantite')]);
    $myRequest->request->add(['produit_id' => $request->get('produit_id')]);
    
    app('App\Http\Controllers\StockController')->store($myRequest);

}
        return redirect(route('commandes.index'));
   
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
      
        $commande=Commandes::findOrFail($id);
        return view ('commandes.edit',compact('commande','services'));
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
        $commande = Commandes::findOrFail($id);

        if($commande->etat===1){
            $myRequest = new \Illuminate\Http\Request();
            $myRequest=$request;
            $myRequest->request->add(['quantite_initial' => $request->get('quantite')]);
            $myRequest->request->add(['quantite_limite' => $request->get('quantite')]);
            $myRequest->request->add(['produit_id' => $request->get('produit_id')]);
            
            app('App\Http\Controllers\StockController')->store($myRequest);
        
        }

         
        $commande->update($request->all());
        return redirect(route('commandes.edit',$id));
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