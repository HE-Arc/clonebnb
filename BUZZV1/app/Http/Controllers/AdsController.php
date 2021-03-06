<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Favorite;
use App\Models\Media;
use App\Models\Category;
use App\Models\Price;
use Illuminate\Http\Request;
use Auth;

class AdsController extends Controller
{
    public function showListing_()
    {
      return view('ads.ad');
    }
    /*
    *Retourne la liste des annonces donc la catégories est $category_id
    *Affichage sous forme de grille
    */
    public function showAdsGrid($category_id)
    {
      $ads = Ad::where(function($query) use ($category_id){
        //Filtre par catégorie
        $query->where('category_id',"=", $category_id);
        //Filtre par mot clé
        if(request()->has('term')){
          $query->where("title","LIKE","%".request('term')."%");
        }
      })
      ->paginate(10);

      $category = Category::find($category_id);

      return view('ads.ad')->withAds($ads)->withCategory($category);
    }

    /*
    *Retourne la liste des annonces donc la catégories est $category_id
    *Affichage sous forme de liste
    */
    public function showAdsList($category_id)
    {
      $ads = Ad::where(function($query) use ($category_id){
        //Filtre par catégorie
        $query->where('category_id',"=", $category_id);
        //Filtre par mot clé
        if(request()->has('term')){
          $query->where("title","LIKE","%".request('term')."%");
        }
      })
      ->paginate(10);

      $category = Category::find($category_id);

      return view('ads.ad')->withAds($ads)->withCategory($category);
    }

    //Retourne l'annonce donc l'id est spécifié en paramètre
    public function showAdDetails($ad_id)
    {
      $ad = Ad::find($ad_id);
      return view('ads.ad_details')->withAd($ad);
    }

    //Ajouter comme favoris
    public function postFavorite(Request $request){

      //Id de l'annonce
      $ad_id = $request['ad_id'];
      $is_fav = $request['is_fav'] = true;
      $update = false; //Checker si fav ou pas

      $ad = Ad::find($ad_id);
      if (!$ad) {
        return null;
      }
      //L'utilisateur
      $user = Auth::user();
      //On va checker si l'annonce est déjà en favoris.
      $favorite = $user->favorites()->where('ad_id', $ad_id)->first();

      if($favorite) {
        $already_fav = $favorite->isFav;//Colonne boolean isFav. Si true, c'est en fav sinon pas
        $update = true;
        if($already_fav == $is_fav){
          $favorite->delete();
          return null;
        }
      } else {
        $favorite = new Favorite();
      }
      $favorite->isFav = $is_fav;
      //On set le user id
      $favorite->user_id = $user->id;
      //L'id de l'annonce
      $favorite->ad_id = $ad->id;

      if ($update) {
          $favorite->update();
      } else {
          $favorite->save();
        }
      return null;
    }
}
