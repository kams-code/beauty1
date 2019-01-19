<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Plannings;
use App\User;
use App\Jours;

class PlanningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::pluck('name','id');
        $Users = User::get()->all();
        $jours = Jours::pluck('nom','id');
        $plannings = Plannings::with('user','jour')->get();
        return view('plannings.index',compact('users','plannings','jours','Users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jours = Jours::pluck('nom','id');
        $users = User::pluck('name','id');
        return view('planning.create',compact('users','jours'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        
        //$plannings = Plannings::create($request->all());
        $jours_ids=$request->get('jours');
        
        foreach($jours_ids as $key=>$value)
        {

            $jour =new Jours([ 
             'dateDeb'=>$request->get('dateDeb'),
             'dateDeb'=>$request->get('dateDeb'),
            'user_id'=>$request->get('user_id'),
            'jour_id'=>$value
        ]);
        
        $reservation ->save();
        }
        return redirect(route('plannings.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $planning = Plannings::get()->where('id',$id);
        return $planning;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $planning = Plannings::findOrFail($id);
       $users = User::pluck('name','id')->all();
       $jours = Jours::pluck('nom','id')->all();
       return view('plannings.edit',compact('planning','jours','users'));
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
        $planning = Planning::findOrFail($id);
        $planning->update($request->all());
        return redirect(route('plannings.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $planning = Planning::findOrFail($id);
        $planning->delete();
        return redirect(route-('plannings.index'));
    }
}
