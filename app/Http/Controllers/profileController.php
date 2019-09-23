<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use app\Profile;



class profileController extends Controller
{

    public function index()
    {
//     $profil = DB::table('profiles')->get ();
//     return response()->json(array('date' => $profil));
//        $profiles=\App\Profile::all();
//        return view('layouts.controller-profile2',compact('profiles'));
        $profiles = \App\Profile::all();
        return response()->json($profiles, 200);
    }

    public function store(Request $request)
    {
        $prof = new \App\Profile();
        $prof->name = $request->name;
        $prof->lastname = $request->lastname;
        $prof->gnsiat = $request->gnsiat;
        $prof->madrak = $request->madrak;
        $prof->aboutme = $request->aboutme;
        $prof->doreh = $request->doreh;
        $prof->save();

//        $imagename = 'profile_' . $prof->id . '.' . $request->file('image')->getClientOriginalExtension();
//        $request->file('image')->move(public_path('images'), $imagename);
//        $prof->imagename = $imagename;
//        $prof->save();
//        return back();


    }
    public function show($id)
    {
        $profile =\App\Profile::find($id);
        if(!$profile){
            return response()->json(['message'=>'not find'], 404);
        }
        return response()->json($profile, 200);
    }

    public function update(Request $request,$id){

        $profile = \App\Profile::find($id);
        $profile->name=$request->name;
        $profile->lastname=$request->lastname;
        $profile->gnsiat=$request->gnsiat;
        $profile->madrak=$request->madrak;
        $profile->aboutme=$request->aboutme;
        $profile->doreh=$request->doreh;
        $profile->save();
        return response()->json(['message'=>'saved successfully'], 200);
    }
    public function destroy($id)
    {
        $profile =\App\Profile::find($id)->delete();
        if(!$profile){
            return response()->json(['message'=>'Not found'],404);
        }
        return response()->json(['message'=>'deleted successfully'], 200);
    }


}
