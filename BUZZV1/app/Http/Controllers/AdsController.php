<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Media;
use App\Models\Category;

class AdsController extends Controller
{
    public function showListing_()
    {
      return view('ads.ad');
    }
    /*
    *Retourne la liste des annonces donc la catégories est $category_id
    *La catégory donc l'id est en paramètre
    *La liste de toute les catégetClientOriginalExtensio
    */
    public function showAds($category_id)
    {
      $ads = Ad::where('category_id', '=', $category_id)
                ->paginate(15);

      $category = Category::find($category_id);
      return view('ads.ad')->withAds($ads)->withCategory($category)->withCategories(Category::All());
    }

    //Retourne l'annonce donc l'id est spécifié en paramètre
    public function showAdDetails($ad_id)
    {
      $ad = Ad::find($ad_id);
      //On retourne les médias de l'annonce
      $medias = Media::where('ad_id', '=', $ad_id)
                ->get();
      return view('ads.ad_details')->withAd($ad)->withMedias($medias);
    }
}
