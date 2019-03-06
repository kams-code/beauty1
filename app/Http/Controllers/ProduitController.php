<?php

namespace App\Http\Controllers; use Illuminate\Support\Facades\Auth;
use App\Produits;
use App\Stocks;
use App\Fournisseurs;
use App\Categorieproduits;
use App\Form;
use Illuminate\Http\Request;
use Image;

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
        $categories=Categorieproduits::all();
        $produits=Produits::all();
        return view ('produits.index',compact('produits','fournisseurs','categories'));
        
    }

    public function index1($id)

    {
        $fournisseurs=Fournisseurs::pluck('nom', 'id');
        $produits=Produits::get();
        $categories=Categorieproduits::get();
        
        return view ('produits.index1',compact('id','produits','fournisseurs','categories'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fournisseurs=Fournisseurs::pluck('nom', 'id');
        $categories=Categorieproduits::pluck('nom', 'id');
        return view ('produits.create',compact('fournisseurs','categories'));

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
     
    
  

  
     $produits =new Produits([ 
        'nom'=> $request->get('nom'),
       'description'=> $request->get('description'),

   ]);

   if($request->hasfile('image'))
   {

          $image=$request->file('image');
          $filename=time().'.'.$image->getClientOriginalExtension();
          $location=public_path('images/'.$filename);
          Image::make($image)->resize(800,400)->save($location); 
         
          $produits->image=$filename;
   }
   else{
      $produits->image="";
   }
   $user=Auth::user();
      
       $produits['organisation_id']=$user->organisation_id;
       $produits['vendable']=$request->get('vendable');
       if ($request->get('vendable') =="on"){
        $produits['vendable']=1;
        $produits['prix']=$request->get('prix');
        }
        else{
          $produits['vendable']=0;
          $produits['prix']=0;
        }
        if ($request->get('stockable') =="on"){
          $produits['stockable']=1;
          $produits['quantite']=$request->get('quantite');
        }
        else{
          $produits['stockable']=0;
          $produits['quantite']= 0;
        }
        $produits['fournisseur_id']=$request->get('fournisseur_id');
      $produits['categori_id']=$request->get('categorie_id');
      
      $produits['quantite_limite']=5;
        $produits->save();
        if ($request->get('stockable') =="on"){
           
            $stock= new Stocks([
                'quantite_initial' => $request->get('quantite'),
                'quantite_limite'=> $request->get('quantite'),
                'type'=> "Ajout",
                'produit_id'=>  $produits->id,
                'quantite_final'=> $request->get('quantite')
              ]);
            $stock->save();
          }
         
        return redirect(route('produits.index'));
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $produit = Produits::find($id);
        $fournisseurs = $produit->fournisseur()->get();
        return view('produits.show',compact('produit','fournisseurs'));
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
        $categories=Categorieproduits::pluck('nom', 'id');
        return view ('produits.edit',compact('produit','fournisseurs','categories'));
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
        $produits = Produits::findOrFail($id);
        $produits [ 
            'nom']= $request->get('nom');
            $produits [ 
                'description']= $request->get('description');
       if($request->hasfile('image'))
       {
    
              $image=$request->file('image');
              $filename=time().'.'.$image->getClientOriginalExtension();
              $location=public_path('images/'.$filename);
              Image::make($image)->resize(800,400)->save($location); 
             
              $produits->image=$filename;
       }
       $user=Auth::user();
           
       $produits['organisation_id']=$user->organisation_id;
       $produits['vendable']=$request->get('vendable');
       if ($request->get('vendable') =="on"){
        $produits['vendable']=1;
        $produits['prix']=$request->get('prix');
      }if ($request->get('stockable') =="on"){
        $produits['stockable']=1;
        
      }
      $produits['categori_id']=$request->get('categorie_id');
      $produits['quantite']=$request->get('quantite');
      $produits['quantite_limite']=5;

      $produits->update();
        if ($request->get('stockable') =="on"){
           
            $stock= new Stocks([
                'quantite_initial' => $request->get('quantite'),
                'quantite_limite'=>$request->get('quantite'),
                'type'=> "Ajout",
                'produit_id'=>  $produits->id,
                'quantite_final'=> $request->get('quantite')
              ]);
            $stock->save();
          }
         
         
      
        return redirect()->route('produits.index');
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

