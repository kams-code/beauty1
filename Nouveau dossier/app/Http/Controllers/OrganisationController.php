<?php

namespace App\Http\Controllers; use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Organisations;
use App\Horaires;
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
    public function index1( )
    { 
        $user1=Auth::user();
       $id=$user1->organisation_id;
    $organisations = Organisations::get();
    $organisation = Organisations::findOrFail(1);
       // return redirect(route('organisations.edit',$id));
       return view('organisations.paramettre',compact('organisation'));
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
    {    $organisation = Organisations::findOrFail($id);
        if ($request->has('Lundi')) {
        
            if ($request->has('heureouvertureLundi')) {
                $horairelundi=new Horaires([ 
                    'jour'=> $request->get('Lundi'),
                'etat'=> 1,
                'heureouverture'=> $request->get('heureouvertureLundi'),
                'heurefermeture'=> $request->get('heurefermetureLundi'),
                'organisation_id'=> $id
            
                
               ]);
               
            }else{
                $horairelundi=new Horaires([ 
                    'jour'=> $request->get('Lundi'),
                'etat'=> 1
            
                
               ]);
            }
            $horairelundi->save();
            
            
            if ($request->has('heureouvertureMardi')) {
                $horaireMardi=new Horaires([ 
                    'jour'=> $request->get('Mardi'),
                'etat'=> 1,
                'heureouverture'=> $request->get('heureouvertureMardi'),
                'heurefermeture'=> $request->get('heurefermetureMardi'),
                'organisation_id'=> $id
            
                
               ]);
               
            }else{
                $horaireMardi=new Horaires([ 
                    'jour'=> $request->get('Mardi'),
                'etat'=> 1
            
                
               ]);
            }
            $horaireMardi->save();
            
            
            if ($request->has('heureouvertureMercredi')) {
                $horaireMercredi=new Horaires([ 
                    'jour'=> $request->get('Mercredi'),
                'etat'=> 1,
                'heureouverture'=> $request->get('heureouvertureMercredi'),
                'heurefermeture'=> $request->get('heurefermetureMercredi'),
                'organisation_id'=> $id
            
                
               ]);
               
            }else{
                $horaireMercredi=new Horaires([ 
                    'jour'=> $request->get('Mercredi'),
                'etat'=> 1
            
                
               ]);
            }
            $horaireMercredi->save();
            
            if ($request->has('heureouvertureJeudi')) {
                $horaireJeudi=new Horaires([ 
                    'jour'=> $request->get('Jeudi'),
                'etat'=> 1,
                'heureouverture'=> $request->get('heureouvertureJeudi'),
                'heurefermeture'=> $request->get('heurefermetureJeudi'),
                'organisation_id'=> $id
            
                
               ]);
               
            }else{
                $horaireJeudi=new Horaires([ 
                    'jour'=> $request->get('Jeudi'),
                'etat'=> 1
            
                
               ]);
            }
            $horaireJeudi->save();
            
            if ($request->has('heureouvertureVendredi')) {
                $horaireVendredi=new Horaires([ 
                    'jour'=> $request->get('Vendredi'),
                'etat'=> 1,
                'heureouverture'=> $request->get('heureouvertureVendredi'),
                'heurefermeture'=> $request->get('heurefermetureVendredi'),
                'organisation_id'=> $id
            
                
               ]);
               
            }else{
                $horaireVendredi=new Horaires([ 
                    'jour'=> $request->get('Vendredi'),
                'etat'=> 1
            
                
               ]);
            }
            $horaireVendredi->save();
            
            if ($request->has('heureouvertureSamedi')) {
                $horaireSamedi=new Horaires([ 
                    'jour'=> $request->get('Samedi'),
                'etat'=> 1,
                'heureouverture'=> $request->get('heureouvertureSamedi'),
                'heurefermeture'=> $request->get('heurefermetureSamedi'),
                'organisation_id'=> $id
            
                
               ]);
               
            }else{
                $horaireSamedi=new Horaires([ 
                    'jour'=> $request->get('Samedi'),
                'etat'=> 1
            
                
               ]);
            }
            $horaireSamedi->save();
            
            if ($request->has('heureouvertureDimanche')) {
                $horaireDimanche=new Horaires([ 
                    'jour'=> $request->get('Dimanche'),
                'etat'=> 1,
                'heureouverture'=> $request->get('heureouvertureDimanche'),
                'heurefermeture'=> $request->get('heurefermetureDimanche'),
                'organisation_id'=> $id
            
                
               ]);
               
            }else{
                $horaireDimanche=new Horaires([ 
                    'jour'=> $request->get('Dimanche'),
                'etat'=> 1
            
                
               ]);
            }
            $horaireDimanche->save();
            
            
            
        }
       




























       
   
        if($request->hasfile('imageup'))
        {
        
               $image=$request->file('imageup');
               $filename=time().'.'.$image->getClientOriginalExtension();
               $location=public_path('images/'.$filename);
               Image::make($image)->resize(800,400)->save($location); 
               $organisation['image'] = $filename;
               
               $request->merge(['image' => $filename ]);
        }
        $organisation['tempstransition']=$request->get('tempstransition');

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
