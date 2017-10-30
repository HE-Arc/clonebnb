<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdsController extends Controller
{
    //Afficher les annonces
    public function showListing()
    {
    	return view('ads.ad');
    }
}
