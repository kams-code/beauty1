<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organisations;

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
        $organisation = Organisations::create($request->all());
        //return redirect(route('organisations.edit',$organisation));
        return redirect(route('organisations.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $organisation = Organisations::get()->where('id',$id);
        return $organisation;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $organisation = Organisations::findOrFail($id);
        return view('organisations.edit',compact('organisation'));
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
        $organisation->update($request->all());
       // return redirect(route('organisations.edit',$id));
       return redirect(route('organisations.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $organisation = Organisations::findOrFail($id);
        return view('organisations.edit',compact('organisation'));
        if( $or ) {
            flash()->success('organisation supprime');
        } else {
            flash()->success('organisation en vu');
        }

        return redirect()->back();
    }
}
