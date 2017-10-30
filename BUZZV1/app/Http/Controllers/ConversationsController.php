<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConversationsController extends Controller
{
    //Afficher les Conversations
    public function showConversation()
    {
      return view('dashboard.conversation');
    }
}
