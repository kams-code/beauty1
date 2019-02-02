<?php

namespace App\Http\Controllers; use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

//use App\Http\Requests\ImageRequest;
use App\Fournisseurs;
use App\Equipements;
use Image;
class EquipementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$equipements = Equipements::with('fournisseur')->get();
        $Fournisseurs = Fournisseurs::all();
        $equipements = Equipemnents::get();
        $fournisseurs = Fournisseurs::pluck('nom','id');
        return view('equipements.index',compact('equipements','fournisseurs','Fournisseurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fournisseurs = Fournisseurs::pluck('nom','id');
        return view('equipements.create',compact('fournisseurs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $user=Auth::user();

        $equipement= new Equipements([
            
            'nom'=> $request->get('nom'),
            'description'=> $request->get('description'),
            'fournisseur_id'=> $request->get('fournisseur_id')
          ]);
        if($request->hasfile('imageup'))
        {
     
               $image=$request->file('imageup');
               $filename=time().'.'.$image->getClientOriginalExtension();
               $location=public_path('images/'.$filename);
               Image::make($image)->resize(800,400)->save($location); 
               $request->merge(['image' => $filename ]);
               $equipement->image = $filename;
        }
       
        
        $request->merge(['organisation_id' =>$user->organisation_id ]);
        $equipement->save();
        //$equipements = Equipements::create($request->all());
        //dd($request);
         return redirect(route('equipements.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$equipement = Equipements::get()->where('id',$id);
        $equipement = Equipemen
        return $equipement;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipement = Equipements::findOrFail($id);
        $fournisseurs = Fournisseurs::pluck('nom','id')->all();
        return view('equipements.edit',compact('equipement','fournisseurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { $user=Auth::user();
        if($request->hasfile('imageup'))
        {
     
               $image=$request->file('imageup');
               $filename=time().'.'.$image->getClientOriginalExtension();
               $location=public_path('images/'.$filename);
               Image::make($image)->resize(800,400)->save($location); 
               $request->merge(['image' => $filename ]);
        }
        
        $request->merge(['organisation_id' =>$user->organisation_id ]);
        $equipement = Equipements::findOrFail($id);
        $equipement->update($request->all());
        return redirect(route('equipements.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        if( Equipements::findOrFail($id)->delete() ) {
            flash()->success('equipement supprime');
        } else {
            flash()->success('equipement en vu');
        }

        return redirect()->back();
    }
}
