<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdRequest;
use App\Http\Requests\DemandRequest;
use Illuminate\Http\Request;
use App\Models\Ad;
use App\Models\Demand;
use App\Models\Comment;
use App\Models\Media;
use App\Models\Category;
use Auth;
use Image;
use DB;

class DashboardController extends Controller
{
    //Afficher le tableau de bord
	public function showDashboard()
	{
		$ad = new Ad();

		$visitors_comments= DB::table('comments')
				->join('ads','comments.ad_id','=','ads.id')
				->join('users','comments.user_id','=','users.id')
				->where('ads.user_id', '=', Auth::user()->id)
				->where('comments.user_id', '!=', Auth::user()->id)
        ->paginate(15);

		return view('dashboard.dashboard', ['ad'=>$ad])->withComments($visitors_comments);
	}

	//Afficher la liste des favorites
	public function showFavorite()
	{
		return view('dashboard.favorites');
	}

	//Afficher les Commentaires
	public function reviews()
	{
		$comments = Comment::where('user_id','=',Auth::user()->id)->paginate(15);
		$visitors_comments= DB::table('comments')
				->join('ads','comments.ad_id','=','ads.id')
				->join('users','comments.user_id','=','users.id')
				->where('ads.user_id', '=', Auth::user()->id)
				->where('comments.user_id', '!=', Auth::user()->id)
        ->paginate(15);
		return view('dashboard.reviews')->withComments($comments)->withVisitorsComments($visitors_comments);
	}

	//Sauvegarder les favoris
	public function storeFavorite()
	{

	}

	//Annonce en ligne
	public function onlineAds(){
		//On retourne les médias de l'annonce
		$ads = Ad::where([
                    ['online', '=', 1],
                    ['user_id', '=', Auth::user()->id]
                ])
							->get();
		return view('dashboard.online_ads')->withAds($ads);
	}

	//Annonces en attente
	public function pendindAds(){
		$ads = Ad::where([
                    ['online', '=', 0],
                    ['user_id', '=', Auth::user()->id]
                ])
							->get();
		return view('dashboard.pending_ads')->withAds($ads);
	}

	//Annonces expirées
	public function expiredAds(){
		$ads = Ad::where([
                    ['expired', '=', 1],
                    ['user_id', '=', Auth::user()->id]
                ])
							->get();
		return view('dashboard.expired_ads')->withAds($ads);
	}

	//Afficher le formulaire d'édition d'une annonce
	public function showPublishForm()
	{
		return view('dashboard.publish')->with('categories',Category::all());
	}

		//Afficher le formulaire d'édition d'une demande
	public function showDemandForm()
	{
		return view('dashboard.demand')->with('categories', Category::all());
	}

	//Afficher les messages
	public function showMessage()
	{
		return view('dashboard.message');
	}

	public function addDemand(DemandRequest $request)
	{
		$demand = new Demand();
		$demand->title = $request->title;
		$demand->description = $request->description;
		$demand->user_id = Auth::user()->id;
		$demand->category_id = $request->category_id;
		if($demand->save())
		{
			flashy()->success("Demande enregistrée!");
		} else
		{
			flashy()->error("Impossible d'enregistrer votre demande");
		}
		return redirect()->back();
	}

	//Publier une annonce
	public function publish(AdRequest $request)
	{

		$ad = new Ad();
		$ad->title = $request->title;
		$ad->description = $request->description;
		$ad->user_id = Auth::user()->id;
		$ad->category_id = $request->category_id;
		$ad->price = $request->price;
		$ad->telephone = $request->telephone;
		$ad->site = $request->site;
		$ad->email = $request->email;
		$ad->facebook = $request->facebook;
		$ad->twitter = $request->twitter;
		$ad->google = $request->google;
		$ad->address = $request->street.' '.$request->number.', '.$request->npa.' '.$request->city;

		if($request->hasFile('image_'))
		{
			$image = $request->file('image_')[0];
			$filename = time(). '.' .$image->getClientOriginalExtension();
			Image::make($image)->resize(300,300)->save(public_path('/uploads/ads/medias/'.$filename));
			//On stocke $filename
			$ad->image = $filename;
		}

		if($ad->save()){
			$this->addMedia($request, $ad->id);
			flashy()->success("Annonce enregistrée!. Elle sera mise en ligne après vérification et validation");
		}else{
			flashy()->error("Impossible d'enregistrer votre annonce");
		}

		return redirect()->back();
	}

	//Ajouter les média d'une annonces
	private function addMedia(AdRequest $request, $ad_id)
	{
			if($request->hasFile('image_'))
			{
				$images = $request->file('image_');
				foreach ($images as $image) {
					$filename = $image->getClientOriginalName();
					Image::make($image)->save(public_path('/uploads/ads/medias/'.$filename));
					$media = new Media();
					$media->ad_id = $ad_id;
					//On stocke $filename
					$media->name = $filename;
					$media->save();
				}
			}
	}

}
