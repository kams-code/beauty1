<?php

namespace App\Http\Controllers; use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Formule;
use App\Services;
use App\Clients;
use DateTime;
class FormuleController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
        $services=Services::all();
        
        $formules=Formule::get();
     
        return view('formules.index',compact('formules','services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services=Services::pluck('nom','id');
        $clients=Clients::pluck('nom','id');
        $formules=Formule::get();
        return view('formules.create',compact('formules','services','clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $first = explode(" - ",  $request->get('periode'));
        foreach ($first as $key => $value) {
           if($key==0){
               $debut=DateTime::createFromFormat('d/m/Y', $value);
           }if($key==1){
               $fin=DateTime::createFromFormat('d/m/Y', $value);
           }
        }
   
            $services=$request->get('services');
       
        $val="";
        foreach($services as $key=>$value)
        {
            $val=$val. '/' .$value;
           
        }


        $tick= new Formule([
            'nom' => $request->get('nom'),
            'prix'=> $request->get('prix'),
            'services_id'=>$val
          ]);
     
        
  $tick->save();









 
        return redirect(route('formules.index'));
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Formule=Formule::findOrFail($id);
        $services=Services::get()-> where('id_Formule',$id);
        $clients=Clients::get()-> where('id_Formule',$id);
        return view('formules.show',compact('Formule','services','clients'));
    }
 /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $services=Services::pluck('nom','id');
        $clients=Clients::pluck('nom','id');
        $formules=Formule::get();
        $formule=Formule::findOrFail($id);
      
   
        return view('formules.edit', compact('formules','services','clients','formules','formule'));
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
         
        $Formule=Formule::findOrFail($id);
   
            $services=$request->get('services');
       
        $val="";
        foreach($services as $key=>$value)
        {
            $val=$val. '/' .$value;
           
        }


        $tick['nom'] = $request->get('nom');
        $tick['prix'] = $request->get('prix');
        $tick['services_id'] = $val;
           
     
        
  $tick->save();
     
            return redirect(route('formules.index'));
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if( Formule::findOrFail($id)->delete() ) {
            flash()->success('User has been deleted');
        } else {
            flash()->success('User not deleted');
        }

        return redirect()->back();  //
    }
}
