<?php

namespace App\Http\Controllers; use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Plannings;
use App\Personnel;
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
        $plannings = Plannings::get()->all();
        $personnels = Personnel::all();
        return view('plannings.index',compact('users','plannings','jours','Users','personnels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {$personnels = Personnel::pluck('nom','id');
        $jours = Jours::pluck('nom','id');
        $users = User::pluck('name','id');
        return view('plannings.create',compact('users','jours','personnels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personnel=$request->get('personnels');
     
        foreach($personnel as $key=>$id)
        {
           
       
            $heures=Plannings::get()->where('user_id',$id);
       
            if (  $heures!=null) {
             foreach ($heures as $heure ) {
            
                Plannings::find($heure['id'])->delete() ;
             }
            }
        
            if ($request->has('heureouvertureLundi')) {
               

                $horairelundi=new Plannings([ 
                    'jour'=> $request->get('Lundi'),
                'etat'=> 1,
                'heureouverture'=> $request->get('heureouvertureLundi'),
                'heurefermeture'=> $request->get('heurefermetureLundi'),
                'user_id'=> $id
            
                
               ]);
             
               $horairelundi->save();
               
            }else{
                $horairelundi=new Plannings([ 
                    'jour'=> $request->get('Lundi'),
                'etat'=> 1
            
                
               ]);
            }
           
           
            
            
            if ($request->has('heureouvertureMardi')) {
                $horaireMardi=new Plannings([ 
                    'jour'=> $request->get('Mardi'),
                'etat'=> 1,
                'heureouverture'=> $request->get('heureouvertureMardi'),
                'heurefermeture'=> $request->get('heurefermetureMardi'),
                'user_id'=> $id
            
                
               ]);
               $horaireMardi->save();
            }else{
                $horaireMardi=new Plannings([ 
                    'jour'=> $request->get('Mardi'),
                'etat'=> 1
            
                
               ]);
            }
         
            
            
            if ($request->has('heureouvertureMercredi')) {
                $horaireMercredi=new Plannings([ 
                    'jour'=> $request->get('Mercredi'),
                'etat'=> 1,
                'heureouverture'=> $request->get('heureouvertureMercredi'),
                'heurefermeture'=> $request->get('heurefermetureMercredi'),
                'user_id'=> $id
            
                
               ]);
               $horaireMercredi->save();
               
            }else{
                $horaireMercredi=new Plannings([ 
                    'jour'=> $request->get('Mercredi'),
                'etat'=> 1
            
                
               ]);
            }
          
            
            if ($request->has('heureouvertureJeudi')) {
                $horaireJeudi=new Plannings([ 
                    'jour'=> $request->get('Jeudi'),
                'etat'=> 1,
                'heureouverture'=> $request->get('heureouvertureJeudi'),
                'heurefermeture'=> $request->get('heurefermetureJeudi'),
                'user_id'=> $id
            
                
               ]);
               $horaireJeudi->save();
               
            }else{
                $horaireJeudi=new Plannings([ 
                    'jour'=> $request->get('Jeudi'),
                'etat'=> 1
            
                
               ]);
            }
          
            
            if ($request->has('heureouvertureVendredi')) {
                $horaireVendredi=new Plannings([ 
                    'jour'=> $request->get('Vendredi'),
                'etat'=> 1,
                'heureouverture'=> $request->get('heureouvertureVendredi'),
                'heurefermeture'=> $request->get('heurefermetureVendredi'),
                'user_id'=> $id
            
                
               ]);
               $horaireVendredi->save();
            }else{
                $horaireVendredi=new Plannings([ 
                    'jour'=> $request->get('Vendredi'),
                'etat'=> 1
            
                
               ]);
            }
        
            
            if ($request->has('heureouvertureSamedi')) {
                $horaireSamedi=new Plannings([ 
                    'jour'=> $request->get('Samedi'),
                'etat'=> 1,
                'heureouverture'=> $request->get('heureouvertureSamedi'),
                'heurefermeture'=> $request->get('heurefermetureSamedi'),
                'user_id'=> $id
            
                
               ]);
               $horaireSamedi->save();
               
            }else{
                $horaireSamedi=new Plannings([ 
                    'jour'=> $request->get('Samedi'),
                'etat'=> 1
            
                
               ]);
            }
           
            
            if ($request->has('heureouvertureDimanche')) {
                $horaireDimanche=new Plannings([ 
                    'jour'=> $request->get('Dimanche'),
                'etat'=> 1,
                'heureouverture'=> $request->get('heureouvertureDimanche'),
                'heurefermeture'=> $request->get('heurefermetureDimanche'),
                'user_id'=> $id
            
                
               ]);
               $horaireDimanche->save();
            }else{
                $horaireDimanche=new Plannings([ 
                    'jour'=> $request->get('Dimanche'),
                'etat'=> 1
            
                
               ]);
            }
      
            
         
       




           
        }
        
        
   
    $user=Auth::user();
   
   


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
       
       $plannings = Plannings::get()->where('user_id',$id);
       $users = User::pluck('name','id')->all();
       $jours = Jours::pluck('nom','id')->all();
       return view('plannings.edit',compact('plannings','jours','users','id'));
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
       
           
       
        $heures=Plannings::get()->where('user_id',$id);
       
        if (  $heures!=null) {
         foreach ($heures as $heure ) {
        
            Plannings::find($heure['id'])->delete() ;
         }
        }
    
        if ($request->has('heureouvertureLundi')) {
           

            $horairelundi=new Plannings([ 
                'jour'=> $request->get('Lundi'),
            'etat'=> 1,
            'heureouverture'=> $request->get('heureouvertureLundi'),
            'heurefermeture'=> $request->get('heurefermetureLundi'),
            'user_id'=> $id
        
            
           ]);
         
           $horairelundi->save();
           
        }else{
            $horairelundi=new Plannings([ 
                'jour'=> $request->get('Lundi'),
            'etat'=> 1
        
            
           ]);
        }
       
       
        
        
        if ($request->has('heureouvertureMardi')) {
            $horaireMardi=new Plannings([ 
                'jour'=> $request->get('Mardi'),
            'etat'=> 1,
            'heureouverture'=> $request->get('heureouvertureMardi'),
            'heurefermeture'=> $request->get('heurefermetureMardi'),
            'user_id'=> $id
        
            
           ]);
           $horaireMardi->save();
        }else{
            $horaireMardi=new Plannings([ 
                'jour'=> $request->get('Mardi'),
            'etat'=> 1
        
            
           ]);
        }
     
        
        
        if ($request->has('heureouvertureMercredi')) {
            $horaireMercredi=new Plannings([ 
                'jour'=> $request->get('Mercredi'),
            'etat'=> 1,
            'heureouverture'=> $request->get('heureouvertureMercredi'),
            'heurefermeture'=> $request->get('heurefermetureMercredi'),
            'user_id'=> $id
        
            
           ]);
           $horaireMercredi->save();
           
        }else{
            $horaireMercredi=new Plannings([ 
                'jour'=> $request->get('Mercredi'),
            'etat'=> 1
        
            
           ]);
        }
      
        
        if ($request->has('heureouvertureJeudi')) {
            $horaireJeudi=new Plannings([ 
                'jour'=> $request->get('Jeudi'),
            'etat'=> 1,
            'heureouverture'=> $request->get('heureouvertureJeudi'),
            'heurefermeture'=> $request->get('heurefermetureJeudi'),
            'user_id'=> $id
        
            
           ]);
           $horaireJeudi->save();
           
        }else{
            $horaireJeudi=new Plannings([ 
                'jour'=> $request->get('Jeudi'),
            'etat'=> 1
        
            
           ]);
        }
      
        
        if ($request->has('heureouvertureVendredi')) {
            $horaireVendredi=new Plannings([ 
                'jour'=> $request->get('Vendredi'),
            'etat'=> 1,
            'heureouverture'=> $request->get('heureouvertureVendredi'),
            'heurefermeture'=> $request->get('heurefermetureVendredi'),
            'user_id'=> $id
        
            
           ]);
           $horaireVendredi->save();
        }else{
            $horaireVendredi=new Plannings([ 
                'jour'=> $request->get('Vendredi'),
            'etat'=> 1
        
            
           ]);
        }
    
        
        if ($request->has('heureouvertureSamedi')) {
            $horaireSamedi=new Plannings([ 
                'jour'=> $request->get('Samedi'),
            'etat'=> 1,
            'heureouverture'=> $request->get('heureouvertureSamedi'),
            'heurefermeture'=> $request->get('heurefermetureSamedi'),
            'user_id'=> $id
        
            
           ]);
           $horaireSamedi->save();
           
        }else{
            $horaireSamedi=new Plannings([ 
                'jour'=> $request->get('Samedi'),
            'etat'=> 1
        
            
           ]);
        }
       
        
        if ($request->has('heureouvertureDimanche')) {
            $horaireDimanche=new Plannings([ 
                'jour'=> $request->get('Dimanche'),
            'etat'=> 1,
            'heureouverture'=> $request->get('heureouvertureDimanche'),
            'heurefermeture'=> $request->get('heurefermetureDimanche'),
            'user_id'=> $id
        
            
           ]);
           $horaireDimanche->save();
        }else{
            $horaireDimanche=new Plannings([ 
                'jour'=> $request->get('Dimanche'),
            'etat'=> 1
        
            
           ]);
        }
  
        
     
   
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
       
        $heures=Plannings::get()->where('user_id',$id);
       
      
         foreach ($heures as $heure ) {
        
            Plannings::find($heure['id'])->delete() ;
         }
      
    

        return redirect()->back();
    }
}
