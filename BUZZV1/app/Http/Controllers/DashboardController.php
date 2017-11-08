<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request\AdsRequest;
use App\Models\Ads;

class DashboardController extends Controller
{
    //Afficher le tableau de bord
	public function showDashboard()
	{
		return view('dashboard.dashboard');
	}

	//Afficher la liste des favorites
	public function showFavorite()
	{
		return view('dashboard.favorites');
	}

	//Sauvegarder les favoris
	public function storeFavorite()
	{
	}

	//Afficher le formulaire d'édition d'une annonce
	public function showPublishForm()
	{
		return view('dashboard.publish');
	}

	//Afficher les messages
	public function showMessage()
	{
		return view('dashboard.message');
	}

	public function publish(Request $request)
	{
		$ads = new Ads();

		$ads->title = $request->get('title');
		$ads->description = $request->get('description');
		$ads->address = $request->get('address');
		$ads->category_id = $request->get('category_id');
		$ads->price = $request->get('price');

		$ads->save();
		return redirect()->back();
	}
}
