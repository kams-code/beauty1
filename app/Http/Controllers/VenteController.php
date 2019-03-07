<?php

namespace App\Http\Controllers; use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Vente;
use App\Produits;


class venteController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $produits=Produits::pluck('nom', 'id');
        $Produits=Produits::get();
        $Vente=Vente::get();
        return view('vente.index',compact('Vente','produits','Produits'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {$produits=Produits::pluck('nom', 'id');
        $Produits=Produits::get();
        $Vente=Vente::get();
        return view('vente.create',compact('Vente','produits','Produits'));
    }
    public function remove()
    {$produits=Produits::pluck('nom', 'id');
        $Produits=Produits::get();
        $Vente=Vente::get();
        return view('vente.remove',compact('Vente','produits','Produits'));
 }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $val="";
        foreach($produits as $key=>$value)
        {
            $val=$val. '/' .$value;
           
        }
        $vente= new Vente([
           
            'client_id'=> $request->get('valeur'),
            'produits_id_qte'=>$val
          ]);





        $produit=Produits::where('id', $request->get('produit_id'))->first();
        $stock= new Stocks([
            'quantite_initial' => $produit['quantite'],
            //'quantite_limite'=> $produit['quantite_limite'],
            'quantite_limite'=> $request->get('quantite'),
            'quantite_final'=>$produit['quantite']- $request->get('quantite'),
            'produit_id'=> $request->get('produit_id'),
            'type'=> $request->get('type')
          ]);
          $produit['quantite']=$stock['quantite_final'];
              $produit->update();
              $stock->save();

        return redirect(route('vente.index'));
   
    }
    public function sortir(Request $request)
    {
        $produit_id = $request->get('produit_id');
       $quantite= $request->get('quantite');
       dd($produit_id);
        return redirect(route('vente.index'));
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vente = Vente::get()->where('id',$id)->first();
        $produit=Produits::get()->where('id',$vente->produit_id)->first();
        
        return view('vente.show',compact('vente','produit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produits=Produits::pluck('nom', 'id');
      
        $vente=Vente::findOrFail($id);
        return view ('vente.edit',compact('vente','produits'));
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
        $vente = Vente::findOrFail($id);
        $vente->update($request->all());
        return redirect(route('vente.edit',$id));
    } 
    public function update1(Request $request, $id)
    {
        $vente = Vente::findOrFail($id);
        $vente->update($request->all());
        return $vente;
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if( Vente::findOrFail($id)->delete() ) {
            flash()->success('User has been deleted');
        } else {
            flash()->success('User not deleted');
        }

        return redirect()->back();
    }
}
