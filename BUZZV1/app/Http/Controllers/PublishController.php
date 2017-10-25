<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublishController extends Controller
{
    //Afficher le formulaire de publication
    public function showPublishForm()
    {
    	return view('user_dashboard.conversation');
    }
}
