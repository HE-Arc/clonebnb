<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    //Page d'accueil
    public function home() 
    {
    	return view('pages/welcome');
    }

    //Page à propos
    public function about() 
    {
    	return view('pages/about');
    }
}
