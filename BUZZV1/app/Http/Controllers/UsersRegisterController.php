<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Session;
use Auth;

class UsersRegisterController extends Controller
{

    //Fonction permettant d'afficher la page d'inscription
    public function showRegistrationForm()
    {
    	return view('users.signup');
    }

    //Fonction permettant la réinitialisation du mot de passe
    public function register(UserRequest $request)
    {
        //create prend un tableau alors on fait à appel all()
        $request['password'] = bcrypt($request['password']);
        User::create($request->all());
        //Auth::loginUsingId($user);
        flashy()->success('Compte créé avec succès!');
        //Redirection à la page d'accueil
        return redirect()->route('root_path');
    }
}

