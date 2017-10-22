<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Session;
use Auth;
use Redirect;

class UsersLoginController extends Controller
{
    //Fonction permettant d'afficher la page de login
    public function showLoginForm()
    {
    	return view('users.login');
    }

    //Fonction permettant la connexion
    public function login(Request $request)
    {
        $data = ['email' => $request->email, 'password' => $request->password];
        if (Auth::attempt($data)) {
            flashy()->success('Vous êtes connecté!');
            return redirect()->route('root_path');
        } 
        flashy()->error("Nom d'utilisateur ou mot de passe incorrect!");            
        return Redirect::back();
    }
}

