<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //Fonction permettant de se connecter
    public function login()
    {
    	return view('users.login');
    }

    //Fonction permettant de sinscrire
    public function signup(Request $request)
    {
    	return view('users.signup');
    }

    //Fonction permettant la réinitialisation du mot de passe
    public function reset()
    {
        return view('users.reset');
    }
}
