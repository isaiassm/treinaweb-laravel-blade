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
      $posts = Post::orderBy('created_at','desc')
                     ->whereHas('details', function($query){
                     $query->where('status', 'publicado')
                           ->where('visibility', 'publico');
                     })
                     ->paginate(2);

      return view('news.index')->with([
         'posts' => $posts
     ]);
   }

   public function listar()
   {
      $listar = Post::all();
      return view('post.listagem')->with('listar', $listar);
   }
}
