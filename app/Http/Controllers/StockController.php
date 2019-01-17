<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stocks;
use App\Produits;


class StockController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $produits=Produits::pluck('nom', 'id');
      
        $Stocks=Stocks::get();
        return view('stocks.index',compact('Stocks','produits'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Stocks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if($request->get('sorti_produit_id')!=null) 
       {
$produit_sortie=$request->get('sorti_produit_id');
$quantite_sortie=$request->get('sorti_quantite');
$stocksortie=Stocks::where('produit_id', $produit_sortie)->first();
$qteinit=$stocksortie->quantite_final;
$stocksortie->quantite_final=$qteinit-$quantite_sortie;
$stocksortie->update(@json_decode(json_encode($stocksortie), true));


       }else{
        $stock= new Stocks([
            'quantite_initial' => $request->get('quantite_initial'),
            'quantite_limite'=> $request->get('quantite_limite'),
            'produit_id'=> $request->get('produit_id')
          ]);
          $stockfind=Stocks::where('produit_id', $stock->produit_id)->first();
       
          if (Stocks::where('produit_id', $stock->produit_id)->exists()) {
            $stockfind=Stocks::where('produit_id', $stock->produit_id)->first();
       
            $stock= new Stocks([
                'quantite_initial' => $request->get('quantite_initial')+$stockfind->quantite_initial,
                'quantite_limite'=> $request->get('quantite_limite'),
                'produit_id'=> $request->get('produit_id')
              ]);
              $stock['quantite_final'] =$stock->quantite_final+$stockfind->quantite_final;



          $stocks = Stocks::findOrFail($stock->produit_id);
   
          $stocks->update(@json_decode(json_encode($stock), true));
          

        }else
        {
            $stock['quantite_final'] =$stock->quantite_initial;
          $stock->save();
        }
    }
        return redirect(route('stocks.index'));
   
    }
    public function sortir(Request $request)
    {
        $produit_id = $request->get('produit_id');
       $quantite= $request->get('quantite');
       dd($produit_id);
        return redirect(route('stocks.index'));
   
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
        $produits=Produits::pluck('nom', 'id');
      
        $stock=Stocks::findOrFail($id);
        return view ('Stocks.edit',compact('stock','produits'));
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
        $stock = Stocks::findOrFail($id);
        $stock->update($request->all());
        return redirect(route('stocks.edit',$id));
    } 
    public function update1(Request $request, $id)
    {
        $stock = Stocks::findOrFail($id);
        $stock->update($request->all());
        return $stock;
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
