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
}
