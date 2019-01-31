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
        $Users=User::pluck('name', 'id');
        $services=Services::get();
        $categories=Categories::pluck('nom', 'id');
        return view('services.index',compact('services','users','Users','categories'));
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
        return view('services.create',compact('services','users','categories'));
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

        $service= new Services([
            'code' => $request->get('code'),
            'nom'=> $request->get('nom'),
            'description'=> $request->get('description'),
            
            'montant' => $request->get('montant'),
            'is_promote'=> $request->get('is_promote'),
            'categorie_id'=> $request->get('categorie_id')
          ]);
          if($request->hasfile('image'))
          {
       
                 $image=$request->file('image');
                 $filename=time().'.'.$image->getClientOriginalExtension();
                 $location=public_path('images/'.$filename);
                 Image::make($image)->resize(800,400)->save($location); 
                
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
       return dire
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
        $service = Services::get()->where('id',$id)->first();
        return view('services.edit',compact('service'));
        
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
        if( Services::findOrFail($id)->delete() ) {
            flash()->success('User has been deleted');
        } else {
            flash()->success('User not deleted');
        }

        return redirect()->back();
    }
}
