<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Image;

class UsersController extends Controller
{
    //Afficher le formulaire d'édition du pofil
    public function showEditForm()
    {
    	return view('dashboard.profile');
    }

    //Editer le profil
    public function edit(Request $request) 
    {
    	$user = Auth::user();

    	$user->first_name = $request->get('first_name');
    	$user->last_name = $request->get('last_name');
    	$user->username = $request->get('username');
    	$user->phone = $request->get('phone');
    	$user->language = $request->get('language');
    	$user->address = $request->get('address');
    	$user->sex = $request->get('sex');
    	$user->description = $request->get('description');
    	if($request->hasFile('photo'))
    	{
    		$photo = $request->file('photo');
    		$filename = time(). '.' .$photo->getClientOriginalExtension();
    		Image::make($photo)->resize(300,300)->save(public_path('/uploads/avatars/'.$filename));
    		//On stocke $filename
    		$user->photo = $filename;
    	}
    	$user->save();
   
    	flashy()->success("Mise à jour réussie");    
    	return redirect()->route('profil_path');
    }
}
