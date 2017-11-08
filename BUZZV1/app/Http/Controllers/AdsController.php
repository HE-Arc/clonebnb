<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request\AdsRequest;

class AdsController extends Controller
{
    //Afficher les annonces
    public function showListing()
    {
    	return view('ads.ad');
    }

    //Afficher le détail d'une annonce
    public function showListingDetails()
    {
      return view('ads.ad_details');
    }
}
