<?php

namespace App\Http\Controllers; use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Organisations;
use Image;
use App\User;
use App\Role;
class OrganisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      

        $organisations = Organisations::get();
        return view('organisations.index',compact('organisations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('organisations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $produits =new Organisations([ 
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
            $request->merge(['organisation_id' =>$produits->id ]);
            
           
            // Create the user
            if ( $user = User::create($request->except('roles', 'permissions')) ) {
    
                $roles = Role::get()->where('id','=',2);

$user->syncRoles($roles);
    
            } else {
                flash()->error('Unable to create user.');
            }

         
  
        return redirect(route('organisations.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $organisation = Organisations::find($id);
        
        return view('organisations.show',compact('organisation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $organisation = Organisations::find($id);
        
        return view('organisations.edit',compact('organisation','id'));
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
        $organisation = Organisations::findOrFail($id);
    
        if($request->hasfile('imageup'))
        {
        
               $image=$request->file('imageup');
               $filename=time().'.'.$image->getClientOriginalExtension();
               $location=public_path('images/'.$filename);
               Image::make($image)->resize(800,400)->save($location); 
               $organisation['image'] = $filename;
               
               $request->merge(['image' => $filename ]);
        }
        $organisation->update($request->except('online'));
       // return redirect(route('organisations.edit',$id));
       return redirect(route('organisations.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        if( Organisations::find($id)->delete() ) {
            flash()->success('organisation supprime');
        } else {
            flash()->success('organisation en vu');
        }

        return redirect(route('organisations.index'));
    }
}
