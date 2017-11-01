<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class PagesController extends Controller
{

    //Page d'accueil
    public function home()
    {
    	return view('pages.welcome')->with('categories', Category::all());
    }

    //Page à propos
    public function about()
    {
    	return view('pages.about');
    }

    //Liste des catégories
    public function showCategories()
    {

    }
}
