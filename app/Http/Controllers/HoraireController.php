<?php

namespace App\Http\Controllers; use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Horaires;
use Image;
use App\User;
use App\Role;
class HoraireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      

        $Horaires = Horaires::get();
        return view('Horaires.index',compact('Horaires'));
    }
    public function index1( )
    { 
        $user1=Auth::user();
       $id=$user1->Horaire_id;
    $Horaires = Horaires::get();
    $Horaire = Horaires::findOrFail($id);
       // return redirect(route('Horaires.edit',$id));
       return view('Horaires.paramettre',compact('Horaire'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Horaires.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $produits =new Horaires([ 
            'nom'=> $request->get('nom'),
        'pays'=> $request->get('nom'),
        'ville'=> $request->get('nom'),
        'description'=> $request->get('nom'),
        'adresse'=> $request->get('nom'),
        'telephone'=> $request->get('telephone'),
        'email'=> $request->get('email'),
        'identifiant'=> $request->get('name')

        
       ]);
    
       if($request->hasfile('imageup'))
       {
              $image=$request->file('imageup');
              $filename=time().'.'.$image->getClientOriginalExtension();
              $location=public_path('images/'.$filename);
              Image::make($image)->resize(800,400)->save($location); 
              $request->merge(['image' => $filename ]);
            
              $produits->image=$filename;
       }
       
     

            $produits->save();


         
                  
           
         
            $user1=Auth::user();
            // hash password
            $request->merge(['password' => bcrypt($request->get('password'))]);
            $request->merge(['Horaire_id' =>$produits->id ]);
            
           
            // Create the user
            if ( $user = User::create($request->except('roles', 'permissions')) ) {
    
                $roles = Role::get()->where('id','=',2);

$user->syncRoles($roles);
    
            } else {
                flash()->error('Unable to create user.');
            }

         
  
        return redirect(route('Horaires.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $Horaire = Horaires::find($id);
        
        return view('Horaires.show',compact('Horaire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $Horaire = Horaires::find($id);
        
        return view('Horaires.edit',compact('Horaire','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {dd($request);
        $Horaire = Horaires::findOrFail($id);
   
        if($request->hasfile('imageup'))
        {
        
               $image=$request->file('imageup');
               $filename=time().'.'.$image->getClientOriginalExtension();
               $location=public_path('images/'.$filename);
               Image::make($image)->resize(800,400)->save($location); 
               $Horaire['image'] = $filename;
               
               $request->merge(['image' => $filename ]);
        }
        $Horaire['heureouverture']=$request->get('heureouverture');
        $Horaire['heurefermeture']=$request->get('heurefermeture');
        $Horaire['tempstransition']=$request->get('tempstransition');


        $Horaire->update($request->except('online'));
       // return redirect(route('Horaires.edit',$id));
       return redirect(route('Horaires.index'));
    }
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        if( Horaires::find($id)->delete() ) {
            flash()->success('Horaire supprime');
        } else {
            flash()->success('Horaire en vu');
        }

        return redirect(route('Horaires.index'));
    }
}
