<?php

namespace App\Http\Controllers; use Illuminate\Support\Facades\Auth;

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
        return view('plannings.create',compact('users','jours'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jours=$request->get('jours');
        $montant=0;
        $val="";
        foreach($jours as $key=>$value)
        {
            $val=$val. '/' .$value;
           
        }
        
        $plannings = Plannings::get()->where('id',$value)->first();
   
        $plannings =new Plannings([ 
         'heureDeb'=>$request->get('heureDeb'),
         'heureFin'=>$request->get('heureFin'),
         'dateDeb'=>$request->get('dateDeb'),
        'dateFin'=>$request->get('dateFin'),
        'jours'=>$val,
        'user_id'=>$request->get('user_id'),
    ]);  
   
    $user=Auth::user();
   
   $plannings['organisation_id']=$user->organisation_id;
    
    $plannings ->save();


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
        $user=User::get()->where('id',$id)->first();
        return view('plannings.show',compact('users','planning','jours','user'));
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
        if( Plannings::findOrFail($id)->delete() ) {
            flash()->success('User has been deleted');
        } else {
            flash()->success('User not deleted');
        }

        return redirect()->back();
    }
}
