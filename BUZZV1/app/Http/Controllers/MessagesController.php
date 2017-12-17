<?php

namespace App\Http\Controllers;
use App\Models\Message;
use App\Http\Requests\MessageRequest;
use Auth;

class MessagesController extends Controller
{
    //Page de messages
    public function showMessage()
    {
    	return view('dashboard.message');
    }

    //Envoyer un message
    public function sendMessage(MessageRequest $request)
    {
      $message = new Message();
      $message->message = $request->get('message');
      $message->sender_id = Auth::user()->id;
      $message->receiver_id = $request->get('user_id');

      if($message->save())
  		{
  			flashy()->success("Message envoyé!");
  		}
      else
  		{
  			flashy()->error("Impossible d'envoyer le message");
  		}
  		return redirect()->back();
    }
}
