<?php

namespace App\Http\Controllers; use Illuminate\Support\Facades\Auth;

use App\User;
use App\Role;
use App\Permission;
use App\Services;
use App\Authorizable;
use App\Clients;
use App\Commandes;
use App\Reservations;
use App\Produits;
use App\Roles;
use App\Http\Requests;
use Charts;
use  App\Factures;
use  App\Jours;
use  App\Plannings;
use  App\Organisations;
use Illuminate\Http\Request;
use DB;
use Image;
class UserController extends Controller
{
    use Authorizable;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate();
         $ismploy = "0";

        return view('user.index', compact('users','ismploy'));
    }

    public function index1()
    {
        $users = User::all()->where('isemploye=1');
        $ismploy = "1";

        return view('user.index', compact('users','ismploy'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $roles = Role::pluck('name', 'id');
        $services = Services::pluck('nom', 'id');
        $organisations=Organisations::pluck('nom', 'id');

        $ismploy = $request->input('mploy');
        return view('user.new', compact('roles','services','organisations','ismploy'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'bail|required|min:2',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'roles' => 'required|min:1'
        ]);
       
        if($request->hasfile('imageup'))
        {
     
               $image=$request->file('imageup');
               $filename=time().'.'.$image->getClientOriginalExtension();
               $location=public_path('images/'.$filename);
               Image::make($image)->resize(800,400)->save($location); 
               $request->merge(['image' => $filename ]);
        }
     
        $user1=Auth::user();
        // hash password
        $request->merge(['password' => bcrypt($request->get('password'))]);
        if ($user1->organisation_id !=0) {
           
        $request->merge(['organisation_id' =>$user1->organisation_id ]);
        }
        
       
        // Create the user
        if ( $user = User::create($request->except('roles', 'permissions')) ) {
        
            $this->syncPermissions($request, $user);

            flash('User has been created.');

        } else {
            flash()->error('Unable to create user.');
        }

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { $users = User::pluck('name','id');
        $Users = User::get()->all();
        $jours = Jours::pluck('nom','id'); $user=User::where('id','=',$id)->first();
        $plannings = Plannings::where('user_id','=',$id)->get();
        $organisations=Organisations::where('id','=',$user->organisation_id)->get()->first();

        $roles =        DB::table('roles')->where('id','!=', 1)->pluck('name', 'id');
        $permissions = Permission::all('name', 'id');
        return view('user.show',compact('users','plannings','jours','user','Users','organisations','roles','permissions'));
          
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $user = User::find($id);
        $roles =        DB::table('roles')->pluck('name', 'id');
        $permissions = Permission::all('name', 'id');
        $services = Services::pluck('nom', 'id');
        $organisations=Organisations::pluck('nom', 'id');
        $ismploy = $request->input('mploy');

        return view('user.edit', compact('user', 'roles', 'permissions','services','organisations','ismploy'));
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
        $this->validate($request, [
            'name' => 'bail|required|min:2',
            'email' => 'required|email|unique:users,email,' . $id,
            'roles' => 'required|min:1'
        ]);

        // Get the user
        $user = User::findOrFail($id);


        if($request->hasfile('imageup'))
        {
     
               $image=$request->file('imageup');
               $filename=time().'.'.$image->getClientOriginalExtension();
               $location=public_path('images/'.$filename);
               Image::make($image)->resize(800,400)->save($location); 
               $request->merge(['image' => $filename ]);
        }
     
        $user1=Auth::user();
       
        if ($user1->organisation_id !=0) {
           
            $request->merge(['organisation_id' =>$user1->organisation_id ]);
            }
    


        // Update user
        $user->fill($request->except('roles', 'permissions', 'password'));

        // check for password change
        if($request->get('password')) {
            $user->password = bcrypt($request->get('password'));
        }

        // Handle the user roles
        $this->syncPermissions($request, $user);

        $user->save();

        flash()->success('User has been updated.');

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     * @internal param Request $request
     */
    public function destroy($id)
    {
        if ( Auth::user()->id == $id ) {
            flash()->warning('Deletion of currently logged in user is not allowed :(')->important();
            return redirect()->back();
        }

        if( User::findOrFail($id)->delete() ) {
            flash()->success('User has been deleted');
        } else {
            flash()->success('User not deleted');
        }

        return redirect()->back();
    }

    /**
     * Sync roles and permissions
     *
     * @param Request $request
     * @param $user
     * @return string
     */
    private function syncPermissions(Request $request, $user)
    {
        // Get the submitted roles
        $roles = $request->get('roles', []);
        $permissions = $request->get('permissions', []);

        // Get the roles
        $roles = Role::find($roles);
      
        // check for current role changes
        if( ! $user->hasAllRoles( $roles ) ) {
            // reset all direct permissions for user
            $user->permissions()->sync([]);
        } else {
            // handle permissions
            $user->syncPermissions($permissions);
        }

        $user->syncRoles($roles);

        return $user;
    }
}
