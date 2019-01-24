<?php

namespace App\Http\Controllers\Site;

use \App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
   public function show($id)
   {
      
      $post = Post::find($id);
      
      return view('post.single', [
         'post' => $post

      ]);

      
   }
}
