<?php

namespace App\Http\Controllers;

use App\Taxes;
use Illuminate\Http\Request;

class TaxesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taxes = Taxes::all();
     
       return view('taxes.index',compact('taxes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('taxes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $taxes =new Taxes([ 
            'intitule'=> $request->get('intitule'),
            'typevaleur'=> $request->get('typevaleur'),
            'valeur'=> $request->get('valeur')
       ]);

        $taxes->save();

        return redirect(route('taxes.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Taxes  $taxes
     * @return \Illuminate\Http\Response
     */
    public function show(Taxes $taxes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Taxes  $taxes
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $taxe = Taxes::find($id);
        
        return view('taxes.edit',compact('taxe','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Taxes  $taxes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $taxes = Taxes::findOrFail($id);
        $taxes ['intitule']= $request->get('intitule');
        $taxes ['typevaleur']= $request->get('typevaleur');
        $taxes['valeur']=$request->get('valeur');
        $taxes->update();

        return redirect()->route('taxes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Taxes  $taxes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Taxes $taxes)
    {
        if( Taxes::findOrFail($id)->delete() ) {
            flash()->success('User has been deleted');
        } 
        


        $nerd =  Taxes::find($id);
        $nerd->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the nerd!');
        return Redirect::to('taxes');
    }
}
