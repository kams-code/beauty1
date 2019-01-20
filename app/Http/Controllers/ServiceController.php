<?php

namespace App\Http\Controllers;
use App\Services;
use App\Services_Users;
use App\User;
use App\ServiceUser;
use Illuminate\Http\Request;
use App\Categories;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::pluck('name', 'id');
        $services=Services::get();
        $categories=Categories::pluck('nom', 'id');
        return view('services.index',compact('services','users','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
        $users=User::pluck('nom', 'id');
        $categories=Categories::pluck('nom', 'id');
        $services=Stocks::get();
        return view('services.index',compact('services','users','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $service= new Services([
            'code' => $request->get('code'),
            'nom'=> $request->get('nom'),
            'description'=> $request->get('description'),
            'image'=> $request->get('image'),
            'montant' => $request->get('montant'),
            'is_promote'=> $request->get('is_promote'),
            'categorie_id'=> $request->get('categorie_id')
          ]);
          if ($service['is_promote'] =="on"){
            $service['is_promote']=1;
          }if ($service['is_promote'] !="on"){
            $service['is_promote']=0; 
          }
  $service->save();


        $users_ids=$request->get('users');
        
        foreach($users_ids as $key=>$value)
        {

            $service_user =new Services_Users([ 
             'user_id'=>$value,
            'services_id'=> $service->id
        ]);
        
        $service_user ->save();
        }
       
      
        return redirect(route('reservations.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $service = Services::get()->where('id',$id);
        return view('services.show',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        //
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
