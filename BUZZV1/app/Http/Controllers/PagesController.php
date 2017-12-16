<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Demand;

class PagesController extends Controller
{

    //Page d'accueil
    public function home()
    {
    	return view('pages.welcome')->with('categories', Category::all())->with('demands', Demand::all());
    }

    //Page à propos
    public function about()
    {
    	return view('pages.about');
    }
}
