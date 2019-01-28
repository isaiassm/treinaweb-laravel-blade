<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Post;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(3);

        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
       return view('admin.posts.create');
    }

    public function store(postRequest $request)
    {

        $post = Post::create($request->all());

        if($post){
            $request->session()->flash('success', 'Post cadastrado com sucesso');
                }
        else{
            $request->session()->flash('error', 'Erro ao cadastrar Post');
        }

         return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function edit(Post $post)
    {
        return view ('admin.posts.edit', compact('post'));
    }

    public function update(PostRequest $request, Post $post)
    {
        $result = $post->update($request->all());

        if ($result){
            $request->session()->flash('success', 'Post atualizado com sucesso');
        }
        else{
            $request->session()->flash('error', 'Erro ao atualizar post');
        }

        return redirect()->route('posts.index');
    }

    public function destroy(Post $post, Request $request)
    {
        if($post->delete()){
            $request->session()->flash('success', 'Post deletado com sucesso');
        }
        else{
            $request->session()->flash('error', 'Erro ao deletar o post');
        }
        return redirect()->route('posts.index');
    }




}
