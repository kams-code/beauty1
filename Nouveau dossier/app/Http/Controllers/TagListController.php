<?php

namespace App\Http\Controllers; use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\TagList;

class TagListController extends Controller
{
    /**
     *
     */
    public function create() {
        $tags = TagList::all();
        return view('taglist.create', compact('tags'));
    }
    public function create1() {
        
        return view('taglist.insert', compact('tags'));
    }

    /**
     *
     */
    public function store(Request $request) {
        $validator = \Validator::make($request->all(), [
            'tags'=>['required', 'array'],
            'tags.*.value'=>['required', 'string', 'min:3', 'max:200']
        ]);
        if($validator->fails()){
            return response()->json([
                'data'=> ['errors'=>$validator->errors()->toArray()]
            ], 400);
        } else {
            $userId = auth()->user()->id;
            \DB::transaction(function() use ($request, $userId) {
                    Commandes::query()->delete();
                    collect($request->input('tags'))->map(function($t) use ($userId){
                        return ['name'=>$t['value'], 'user_id'=>$userId];
                    })->each(function($tag){
                        TagList::create($tag);
                    });
                  

            });
            return response()->json(['data'=>['message'=>'Saved!']]);
        }
    }
}
