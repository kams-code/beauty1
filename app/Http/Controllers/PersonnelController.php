<?php

namespace App\Http\Controllers; use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Personnel;
use App\Commandes;
use App\Reservations;
use App\Produits;
use App\Role;
use App\Services;
use App\Services_users;
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


    public function index1($id)
    {
        $roles = Role::pluck('name', 'id');
        $services = Services::pluck('nom', 'id');
        $organisations=Organisations::pluck('nom', 'id');

        $personnel = Personnel::get()->where('id',$id)->first();
        return view('personnel.utilisateur',compact('personnel','roles','services','organisations','id'));
        }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Services::pluck('nom', 'id');
        return view('personnel.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
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
=======
        if ($request->hasfile('cvup')) {
            $extension = $request->file('cvup')->getClientOriginalExtension();
            $filenamepdf = rand(11111111, 99999999). '.' . $extension;
            $request->file('cvup')->move(
              base_path().'/public/files/uploads/', $filenamepdf
            );
            
            $request->merge(['cv' => $filenamepdf]);
        }
        else{
            $request->merge(['cv' => '']);
>>>>>>> 26a9eb48f0c1ffacdfa2d005a21aefd917d7660a
        }

        if($request->hasfile('imageup'))
        {
           $image=$request->file('imageup');
           $filename=time().'.'.$image->getClientOriginalExtension();
           $location=public_path('images/'.$filename);
           Image::make($image)->resize(800,400)->save($location); 
            $request->merge(['image' => $filename]);
        }
        else{
            $request->merge(['imageup' => '']);
        }

        $personnel = Personnel::create($request->all());
        $services=$request->get('services_id');
        if (count((array)$services) != 0) {
            $id= $request->get('id');

           $data=array($personnel['id']);
            $insertQuery = 'DELETE FROM services_users WHERE services_id = ?';
            DB::insert($insertQuery, $data);

           foreach($services as $key=>$value)
           {
                $data=array($personnel['id'],$value);
                $insertQuery = 'INSERT into services_users (user_id,services_id) VALUES(?,?)';
                DB::insert($insertQuery, $data);
           }
        }
       
        return redirect(route('personnels.index'));
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
        return view('personnel.show',compact('personnel','services','reservations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personnel = Personnel::findOrFail($id);
        $services = Services_users::all();
        $Services = Services::all();
        return view('personnel.edit',compact('personnel','services','Services'));
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
        
        $extension = $request->file('cvup')->getClientOriginalExtension();
        $filenamepdf = rand(11111111, 99999999). '.' . $extension;
        $request->file('cvup')->move(
          base_path().'/public/files/uploads/', $filenamepdf
        );
        
        $request->merge(['cv' => $filenamepdf]);

 


        if($request->hasfile('imageup'))
        {
     
               $image=$request->file('imageup');
               $filename=time().'.'.$image->getClientOriginalExtension();
               $location=public_path('images/'.$filename);
               Image::make($image)->resize(800,400)->save($location); 
              $request->merge(['image' => $filename]);
               
        }
        $Personnel->update($request->all());
        return redirect(route('personnels.index'));
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
