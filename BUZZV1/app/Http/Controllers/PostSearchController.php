<?php

namespace App\Http\Controllers;

use App\Models\PostSearch;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        $searchTerm = $request->input('searchTerm');
        $posts = Post::all()
        ->search($searchTerm);
        return view('posts.index', compact('posts', 'searchTerm'));
    }

   public function show($id)
   {
       $post = Post::find($id);
       return view('posts.show', compact('post'));
   }
}
