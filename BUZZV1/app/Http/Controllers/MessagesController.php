<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    //Page de messages
    public function showMessage()
    {
    	return view('dashboard.message');
    }
}
