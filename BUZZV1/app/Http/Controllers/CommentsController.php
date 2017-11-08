<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;
use App\Models\Comment;
use Auth;
use Carbon;

class CommentsController extends Controller
{

    //Création d'un commentaire
    public function edit(Request $request, $ad_id){

      $ad = Ad::find($ad_id);

      $comment = new Comment();
      $comment->user_id = Auth::user()->id;
      $comment->content = nl2br($request->get('content'));
      $comment->rate = $request->get('rating');

      if($ad->comments()->save($comment))
        flashy()->success("Commentaire envoyé");
      return redirect()->back();
    }
}
