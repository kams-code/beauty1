<?php

namespace App\Http\Controllers; use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Personnel;
use App\Commandes;
use App\Reservations;
use App\Produits;
use App\Services;
use App\User;
use App\Roles;use App\Permission;
use App\Http\Requests;
use Charts;
use Image;
use  App\Factures;
use  App\Jours;
use  App\Plannings;
use  App\Organisations;


use DB;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnels = Personnel::get();
        return view('personnel.index',compact('personnels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Personnel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        $extension = $request->file('cv')->getClientOriginalExtension();
        $filename = rand(11111111, 99999999). '.' . $extension;
        Request::file('cv')->move(
          base_path().'/public/files/uploads/', $filename
        );
        if(\Auth::user()->level == 2) {
            $approved = $request['approved'];
        } else {
            $approved = 3;
        }
        dd($filename);
        $fullPath = '/public/files/uploads/' . $filename;
        $upload = new Uploads(array(
            'name' => $request['name'],
            'format' => $extension,
            'path' => $fullPath,
            'approved' => $approved,
        ));
        $upload->save();
        $uploads = Uploads::orderBy('approved')->get();






        if($request->hasfile('imageup'))
        {
     
               $image=$request->file('imageup');
               $filename=time().'.'.$image->getPersonnelOriginalExtension();
               $location=public_path('images/'.$filename);
               Image::make($image)->resize(800,400)->save($location); 
              $request->merge(['image' => $filename]);
               
        }
        $personnel = Personnel::create($request->all());
        return redirect(route('personnel.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personnel = Personnel::get()->where('id',$id)->first();

        $reservations = Reservations::get()->where('Personnel_id','=',$id);
        $services = Services::all();
        return view('Personnel.show',compact('personnel','services','reservations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Personnel = Personnel::findOrFail($id);
        return view('Personnel.edit',compact('Personnel'));
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
        $Personnel = Personnel::findOrFail($id);
        $Personnel->update($request->all());
        return redirect(route('personnel.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if( Personnel::findOrFail($id)->delete() ) {
            flash()->success('equipement supprime');
        } else {
            flash()->success('equipement en vu');
        }

        return redirect()->back();
    }
}
