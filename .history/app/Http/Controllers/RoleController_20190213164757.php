<?php

namespace App\Http\Controllers; use Illuminate\Support\Facades\Auth;

use App\Authorizable;
use App\Permission;
use App\Role;
use Illuminate\Http\Request;
class RoleController extends Controller
{
    use Authorizable;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_role=Auth::user()->roles->first()->name;

        $roles = Role::get()->where('id','!=',1);
  
        $permissions = Permission::all();

        return view('role.index', compact('roles', 'permissions'));
    }
    public function index1()
    {
        $user_role=Auth::user()->roles->first()->name;
if( $user_role=="Admin"){
        $roles = Role::all();
    }else{
        $roles = Role::all()->except(1);
    }
        $permissions = Permission::all();

        return view('role.permission', compact('roles', 'permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('role.create');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $role = Role::find($id)->first();
        
        return view('role.show',compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $role = Role::find($id)->first();
        
        return view('role.edit',compact('role','id'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required|unique:roles']);

        if( Role::create($request->only('name')) ) {
            flash('Role Added');
        }

        return redirect()->back();
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
        
        $role = Role::findOrFail($id);
        $role->update($request->all());
        if($role = Role::findOrFail($id)) {
            // admin role has everything
            if($role->name === 'Admin') {
                $role->syncPermissions(Permission::all());
                return redirect()->route('roles.index');
            }

            $permissions = $request->get('permissions', []);

            $role->syncPermissions($permissions);

            flash( $role->name . ' permissions has been updated.');
        } else {
            flash()->error( 'Role with id '. $id .' note found.');
        }
       
        

        return redirect()->route('roles.index');
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
       

        if( Role::findOrFail($id)->delete() ) {
            flash()->success('Role has been deleted');
        } else {
            flash()->success('Role not deleted');
        }

        return redirect()->back();
    }
}
