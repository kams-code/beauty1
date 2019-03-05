<?php

namespace App\Http\Controllers; use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Commandes;
use App\Services;
use App\Produits;
use App\Fournisseurs;
use App\User;
use App\Stocks;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use Session;


class CommandeController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $fournisseurs=Fournisseurs::all();
        $produits=Produits::all();
        $users=User::all();
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
        //$quantites=Commandes::pluck('quantite');;
     return view('commandes.create',compact('commandes','fournisseurs' ,'produits' ,'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    /*{
        $user=Auth::user();

       $commande= new Commandes([
        'nom'=> $request->get('nom'),     
        'quantite'=> $request->get('quantite'),
        'fournisseur_id'=> $request->get('fournisseur_id'),
        'produit_id'=> $request->get('produit_id'),
        'user_id' => $request->get('user_id')
      
         ]);
      
      
       
       $request->merge(['organisation_id' =>$user->organisation_id ]);
       $commande->save();
       //$commandes = commandes::create($request->all());
       //dd($request);
        return redirect(route('commandes.index'));
    }*/
    {
       // dd($request);
        
        $tick= new Commandes([
            'nom'=> $request->get('nom'),
            'quantite'=> $request->get('quantite'),
            'fournisseur_id'=> $request->get('fournisseur_id'),
            'produit_id'=> $request->get('produit_id'),
          
            'etat'=> $request->get('etat'),
            'user_id'=> auth()->user()->id
          ]);
          if ($request->get('etat') =="on"){
            $tick['etat']=1;

            $request->merge([
              'type' => "Ajout"
          ]);
          $produit=Produits::where('id', $request->get('produit_id'))->first();
          $stock= new Stocks([
              'quantite_initial' => $produit['quantite'],
              //'quantite_limite'=> $produit['quantite_limite'],
              'quantite_limite'=> $request->get('quantite'),
              'quantite_final'=>$produit['quantite']+ $request->get('quantite'),
              'produit_id'=> $request->get('produit_id'),
              'type'=> $request->get('type')
            ]);
            $produit['quantite']=$stock['quantite_final'];
                $produit->update();
                $stock->save();
          }if ($request->get('etat')!="on"){
            $tick['etat']=0; 
          }

          if ($request->get('mail') =="on"){
            $fournisseur=Fournisseurs::where('id',$request->get('fournisseur_id'))->first();
            $request->merge([
              'email' => "Ajout"
          ]);
          $request->merge([
            'message' => "Détails de la commande!"
        ]);
            Mail::to('nnfranck78@gmail.com')
            ->send(new Contact($request->except('_token')));
 

          }
          $user=Auth::user();
          
          $tick['organisation_id']=$user->organisation_id;
          $tick['user_id']=$user->id;
       
          
            dd($tick);
  $tick->save();
  /*if($tick->etat===1){
    $myRequest = new \Illuminate\Http\Request();
    $myRequest=$request;
    $myRequest->request->add(['quantite_initial' => $request->get('quantite')]);
    $myRequest->request->add(['quantite_limite' => $request->get('quantite')]);
    $myRequest->request->add(['produit_id' => $request->get('produit_id')]);
    
    app('App\Http\Controllers\StockController')->store($myRequest);

  }*/
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
        $commande = Commandes::findOrFail($id);
        $produits=Produits::pluck('nom', 'id');
        $users=User::all();
        $fournisseurs=Fournisseurs::pluck('nom', 'id');
     // $fournisseurs = Fournisseurs::get()->where('id',$id);
      // $users = User::get()->where('id',$id);
       //$produits = Produits::get()->where('id',$id);
        
        return view('commandes.show',compact('commande','fournisseurs','users','produits'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // $services=Services::pluck('nom', 'id');
       $fournisseurs=Fournisseurs::pluck('nom', 'id');
        $produits=Produits::pluck('nom', 'id');
        $users=User::pluck('name', 'id');
        
        $commande=Commandes::findOrFail($id);
        return view ('commandes.edit',compact('commande','fournisseurs','users','produits'));
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
        /*$commande = Commandes::findOrFail($id);

        if($commande->etat===1){
            $myRequest = new \Illuminate\Http\Request();
            $myRequest=$request;
            $myRequest->request->add(['quantite_initial' => $request->get('quantite')]);
            $myRequest->request->add(['quantite_limite' => $request->get('quantite')]);
            $myRequest->request->add(['produit_id' => $request->get('produit_id')]);
            
            app('App\Http\Controllers\StockController')->store($myRequest);*/
            
            //dd ($request);
            $user=Auth::user();
           
        $request->merge(['organisation_id' =>$user->organisation_id ]);
        $commande = Commandes::findOrFail($id);
                $commande->nom = $request->nom;
                $commande->quantite = $request->quantite;
                $commande->user_id = $request->user_id;
                $commande->produit_id = $request->produit_id;
        if ($request->etat =="on"){
            $commande['etat']=1;
            $request->merge([
              'type' => "Ajout"
          ]);
            $produit=Produits::where('id', $request->get('produit_id'))->first();
            $stock= new Stocks([
                'quantite_initial' => $produit['quantite'],
                //'quantite_limite'=> $produit['quantite_limite'],
                'quantite_limite'=> $request->get('quantite'),
                'quantite_final'=>$produit['quantite']+ $request->get('quantite'),
                'produit_id'=> $request->get('produit_id'),
                'type'=> $request->get('type')
              ]);
              $produit['quantite']=$stock['quantite_final'];
                  $produit->update();
                  $stock->save();

          }if ($request->etat!="on"){
            $commande['etat']=0; 
          }
          //dd($request);
        $commande->update($request->except('etat'));
        return redirect(route('commandes.index'));
        
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if( Commandes::findOrFail($id)->delete() ) {
            flash()->success('commande a ete supprime');
        } else {
            flash()->success('commnade n\' est pas supprimee');
        }

        return redirect()->back();
    }
}