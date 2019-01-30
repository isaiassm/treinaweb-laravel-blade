<?php

namespace App\Http\Controllers\Site;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CommentController extends Controller
{
    public function store($postId, Request $request)
    {
        $post = Post::find($postId);

        $post->comments()->create($request->all());

        return back()->with(['success' => 'Comentario criado com sucesso']);
    }
}
