<?php

namespace App\Http\Controllers; use Illuminate\Support\Facades\Auth;
use App\Services;
use App\Services_Users;
use App\User;
use App\Stocks;
use App\ServiceUser;
use Illuminate\Http\Request;
use App\Categories;
use Image;

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
        $services=Services::with('categorie')->get();
        $categories=Categories::all();
        return view('services.index',compact('services','Users','categories'));
    }
    public function index1($id)
    {
        $users=User::all();
        $categories=Categories::all();
        $services=Stocks::get();
        return view('services.add',compact('services','users','categories','id'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
        $users=User::pluck('name', 'id');
        $categories=Categories::pluck('nom', 'id');
        $services=Stocks::get();
        return view('services.create',compact('services','users','categories'));
        //return view('services.create');
    }

      /**
     * Show the form for creating a new employees resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add($id)
    {
       
       
        //return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->has('my_multi_select1')) {
         

           $users=$request->get('my_multi_select1');
       
           $val="";
           foreach($users as $key=>$value)
           {
               $val=$val. '/' .$value;
              
           }

        }else{
        $string = bin2hex(openssl_random_pseudo_bytes(10));

        $service= new Services([
            'code' =>$request->get('code') ,
            'nom'=> $request->get('nom'),
            'description'=> $request->get('description'),
            
            'montant' => $request->get('montant'),
            'is_promote'=> $request->get('is_promote'),
            'categorie_id'=> $request->get('categorie_id')
          ]);
          if($request->hasfile('imageup'))
          {
       
                 $image=$request->file('imageup');
                 $filename=time().'.'.$image->getClientOriginalExtension();
                 $location=public_path('images/'.$filename);
                 Image::make($image)->resize(800,400)->save($location); 
                $request->merge(['image' => $filename]);
                 $service->image=$filename;
          }
         
            

          if ($service['is_promote'] =="on"){
            $service['is_promote']=1;
          }if ($service['is_promote'] !="on"){
            $service['is_promote']=0; 
          }
          $user=Auth::user();
       
              $service['organisation_id']=$user->organisation_id;
  $service->save();
 /*
        $users_ids=$request->get('users');
        
        foreach($users_ids as $key=>$value)
        {

            $service_user =new Services_Users([ 
             'user_id'=>$value,
            'services_id'=> $service->id
        ]);
        $user=Auth::user();
       
              $service_user['organisation_id']=$user->organisation_id;
        $service_user ->save();
        }*/
       
      
       // d return redirect(route('reservations.index'));
    }
       return redirect(route('services.index'));
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

       // $service = Services::get()->where('id',$id);
       $users = User::pluck('name','id');
       $categories = Categories::all();
       $service = Services::findOrFail($id);
        return view('services.show',compact('service','users','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$service = Services::get()->where('id',$id)->first();

        $service = Services::findOrFail($id);
         $users=User::pluck('name', 'id');
        $categories=Categories::pluck('nom', 'id');
        
        return view('services.edit',compact('service','users','categories'));
        
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

        if ($request->has('my_multi_select1')) {
         
 
            $users=$request->get('my_multi_select1');
        
            $val="";
            $Users=Users::all();
            foreach($users as $key=>$value)
            {
                foreach ($Users as $user) {
                    if ($user->id==$value and mb_strpos($user['services_id'],$id) !== false) {
                        $user['services_id']=$user['services']. '/' .$id;
                        $user->update();
                    }
                    
                }
                $val=$val. '/' .$value;
               
            }
            $service = Services::findOrFail($id);
            $service['users_id'] =  $val;
            $service->update();
            
            
         }else{



        $service = Services::findOrFail($id);
    
        if($request->hasfile('imageup'))
        {
        
               $image=$request->file('imageup');
               $filename=time().'.'.$image->getClientOriginalExtension();
               $location=public_path('images/'.$filename);
               Image::make($image)->resize(800,400)->save($location); 
               $organisation['image'] = $filename;
               
               $request->merge(['image' => $filename ]);
        }
        $service->update($request->except('is_promote'));}
       
       return redirect(route('services.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if( Services::findOrFail($id)->delete() ) {
            flash()->success('le service a ete supprime');
        } else {
            flash()->success('le service n\'a pas ete supprime');
        }

        return redirect(route('services.index'));
    }
}
