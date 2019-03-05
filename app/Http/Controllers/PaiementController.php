<?php

namespace App\Http\Controllers;

use App\Paiement;
use Illuminate\Http\Request;
use Image;

class PaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paiements = Paiement::all();
     
       return view('paiements.index',compact('paiements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paiement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
        $paiement =new Paiement([ 
            'intitule'=> $request->get('intitule')
       ]);
        if($request->hasfile('image'))
        {
                
               $image=$request->file('image');
               $filename=time().'.'.$image->getClientOriginalExtension();
               $location=public_path('images/'.$filename);
               Image::make($image)->resize(800,400)->save($location); 
               $request->merge(['image' => $filename ]);
               $paiement->image = $filename;
        }
        $paiement->save();

        return redirect(route('paiements.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function show(Paiement $paiement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paiements = Paiement::find($id);
        
        return view('paiements.edit',compact('paiements','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paiement = Paiement::findOrFail($id);
        $paiement ['intitule']= $request->get('intitule');
        if($request->hasfile('imageup'))
        {
           $image=$request->file('imageup');
           $filename=time().'.'.$image->getClientOriginalExtension();
           $location=public_path('images/'.$filename);
           Image::make($image)->resize(800,400)->save($location); 
           $request->merge(['image' => $filename ]);
           $paiement->image = $filename;
        }

        $paiement->update();

        return redirect(route('paiements.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $nerd =  Paiement::find($id);
        $nerd->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the nerd!');
        return Redirect::to('paiements');
    }
}
