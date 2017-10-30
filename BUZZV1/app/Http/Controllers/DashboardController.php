<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
