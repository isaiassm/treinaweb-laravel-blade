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

   public function index()
   {
      $posts = Post::orderBy('created_at','desc')->paginate(2);
      return view('news.index')->with([
         'posts' => $posts
     ]);
   }
}
