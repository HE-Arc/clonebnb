<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    //Page de contact
    public function create()
    {
    	return view('contacts.contact');
    }

    //Function appelée lors de la soumission du formulaire
    public function store(ContactRequest $request) 
    {

    	$mailable = new ContactMessageCreated($request->name, $request->email, $request->subject, $request->message);
    	Mail::to(config('buzzConfig'))->send($mailable);
    	//Message flash
    	
    	//Redirection après l'envoie
    	return redirect()->route('root_path');
    }
}
