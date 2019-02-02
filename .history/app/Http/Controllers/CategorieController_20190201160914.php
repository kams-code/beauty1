<?php

namespace App\Http\Controllers; use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Categories;
use Image;


class CategorieController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::get();
        return view('categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        $categorie =new Categories([ 
            'nom'=> $request->get('nom'),
           'description'=> $request->get('description'),
       ]);
        if($request->hasfile('image'))
        {
     
               $image=$request->file('image');
               $filename=time().'.'.$image->getClientOriginalExtension();
               $location=public_path('images/'.$filename);
               Image::make($image)->resize(800,400)->save($location); 
              $request->merge(['image' => $filename]);
               $categorie->image=$filename;
        }
        $user=Auth::user();
       
        $categorie['organisation_id']=$user->organisation_id;
        $categorie->save();
        //return redirect(route('Categories.edit',$categorie));
        return redirect(route('categories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorie = Categories::findOrFail($id);
        //$categorie = Categories::get()->where('id',$id);
        return view('categorie.show',compact('categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit = Categories::findOrFail($id);
        return view('categories.edit',compact('produit'));
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
        $categorie = Categories::findOrFail($id);
        $categorie->update($request->all());
       // return redirect(route('Categories.edit',$id));
       return redirect(route('categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        if( categorie::findOrFail($id)->delete() ) {
            flash()->success('categorie supprime');
        } else {
            flash()->success('categorie en vu');
        }

        return redirect()->back();
    }
}
