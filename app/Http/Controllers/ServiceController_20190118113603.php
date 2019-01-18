<?php

namespace App\Http\Controllers;
use App\Services;
use App\User;
use App\ServiceUser;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::with('user')->get();
        return view('services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $service = new Services;
        $service->nom = 'God of War';
        $service->montant = 40;
        $service->description ='fghjkl';
        $service->code='sdfg';
        $service->image='fgh';
        $service->is_promote = 1;

        $service->save();

        $user = User::find([1, 2]);
        $service->users()->attach($user);
        dd($service->users());

        return 'Success';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $ServicesUser= ServiceUser::get()->where('service_id',$id)->all();
        dd($ServicesUser);
        $user= Services::get()->where('id',$id);
        dd( $service);
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
