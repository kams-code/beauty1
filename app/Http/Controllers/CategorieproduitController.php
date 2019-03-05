<?php

namespace App\Http\Controllers; use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Categorieproduits;
use Image;


class CategorieproduitController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorieproduits::get();
        return view('categorieproduits.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorieproduits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        $categorie =new Categorieproduits([ 
            'nom'=> $request->get('nom'),
           'description'=> " ",
       ]);
        if($request->hasfile('image'))
        {
     
               $image=$request->file('image');
               $filename=time().'.'.$image->getClientOriginalExtension();
               $location=public_path('images/'.$filename);
               Image::make($image)->resize(800,400)->save($location); 
              
              
        }
        $categorie->image=" ";
        $user=Auth::user();
       
        ///////////$categorie['organisation_id']=$user->organisation_id;
        $categorie->save();
        //return redirect(route('Categorieproduits.edit',$categorie));
        return redirect(route('categorieproduits.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorie = Categorieproduits::get()->where('id',$id)->first();
        
        return view('categorieproduits.show',compact('categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Categorieproduits::findOrFail($id);
        return view('categorieproduits.edit',compact('categorie'));
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
        $categorie = Categorieproduits::findOrFail($id);
       
        if($request->hasfile('imageup'))
        {
     
               $image=$request->file('imageup');
               $filename=time().'.'.$image->getClientOriginalExtension();
               $location=public_path('images/'.$filename);
               Image::make($image)->resize(800,400)->save($location); 
              
               $categorie['image']=$filename;
        }
        $categorie->update($request->except('test'));
       // return redirect(route('Categorieproduits.edit',$id));
       return redirect(route('categorieproduits.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        if( Categorieproduits::findOrFail($id)->delete() ) {
            flash()->success('categorie supprime');
        } else {
            flash()->success('categorie en vu');
        }

        return redirect()->back();
    }
}
