<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fournisseurs;
use App\Equipements;

class EquipementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipements = Equipements::with('fournisseur')->get();
        return view('equipements.index',compact('equipements'));
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
    public function store(ImagesRequest $request,Request $request)
    {
        $image = $request->file('image');

		if($image->isValid())
		{
			$chemin = config('images.path');

			$extension = $image->getClientOriginalExtension();

			do {
				$nom = str_random(10) . '.' . $extension;
			} while(file_exists($chemin . '/' . $nom));

			if($image->move($chemin, $nom)) {
				return view('photo_ok');
			}
		}

		return redirect('photo/form')
			->with('error','Désolé mais votre image ne peut pas être envoyée !');
        /*$equipements = Equipements::create($request->all());
        return redirect(route('equipements.index'));*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipement = Equipements::get()->where('id',$id);
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
    {
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
        //
    }
}
