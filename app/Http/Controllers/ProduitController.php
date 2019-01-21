<?php

namespace App\Http\Controllers;
use App\Produits;
use App\Fournisseurs;
use App\Form;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fournisseurs=Fournisseurs::pluck('nom', 'id');
        $produits=Produits::get();
        return view ('produits.index',compact('produits','fournisseurs'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fournisseurs=Fournisseurs::pluck('nom', 'id');
      
        return view ('produits.create',compact('fournisseurs'));

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
     
    
    if($request->hasfile('filename'))
     {

        foreach($request->file('filename') as $image)
        {
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/images/', $name);  
            $data[] = $name;  
        }
     }

     $form= new Form();
     dd($form);
  
     $form->filename=json_encode($data);
     $form->save();
     $produits =new Produits([ 
        'nom'=> $request->get('nom'),
       'image'=> $form->filename,
       'description'=> $request->get('description'),
   ]);
  
        $produit->save();
        return redirect(route('produits.index'));
   
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
        $produit=Produits::findOrFail($id);
        $fournisseurs=Fournisseurs::pluck('nom', 'id');
      
        return view ('produits.edit',compact('produit','fournisseurs'));
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
        $produit = Produits::findOrFail($id);
        $produit->update($request->all());
        return redirect(route('produits.edit',$id));
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if( Produits::findOrFail($id)->delete() ) {
            flash()->success('User has been deleted');
        } 
        


        $nerd =  Produits::find($id);
        $nerd->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the nerd!');
        return Redirect::to('produits');
    }
}
