<?php

namespace App\Http\Controllers; use Illuminate\Support\Facades\Auth;

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
        $Produits=Produits::get();
        $Stocks=Stocks::get();
        return view('stocks.index',compact('Stocks','produits','Produits'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {$produits=Produits::pluck('nom', 'id');
        $Produits=Produits::get();
        $Stocks=Stocks::get();
        return view('Stocks.create',compact('Stocks','produits','Produits'));
    }
    public function remove()
    {$produits=Produits::pluck('nom', 'id');
        $Produits=Produits::get();
        $Stocks=Stocks::get();
        return view('stocks.remove',compact('Stocks','produits','Produits'));
 }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
if($request->get('type')=="Ajout"){

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
}
if($request->get('type')=="Retrait"){

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
        $stock = Stocks::get()->where('id',$id)->first();
        $produit=Produits::get()->where('id',$stock->produit_id)->first();
        
        return view('stocks.show',compact('stock','produit'));
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
        if( Stocks::findOrFail($id)->delete() ) {
            flash()->success('User has been deleted');
        } else {
            flash()->success('User not deleted');
        }

        return redirect()->back();
    }
}
