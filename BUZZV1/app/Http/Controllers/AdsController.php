<?php

namespace App\Http\Controllers;

use App\Models\Ad;

class AdsController extends Controller
{
    public function showListing_()
    {
      return view('ads.ad');
    }
    //Retourne la liste des annonces donc la catégories est $category_id
    public function showAds($category_id)
    {
      $ads = Ad::where('category_id', '=', $category_id)
                ->get();
      return view('ads.ad')->withAds($ads);
    }

    //Retourne l'annonce donc l'id est spécifié en paramètre
    public function showAdDetails($ad_id)
    {
      $ad = Ad::find($ad_id);
      return view('ads.ad_details')->withAd($ad);
    }
}
