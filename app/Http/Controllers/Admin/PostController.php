<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Post;
use App\Http\Controllers\Controller;
use App\Category;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(3);

        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::get();


       return view('admin.posts.create', compact('categories'));
    }

    public function store(postRequest $request)
    {

        $post = Post::create($request->only('title', 'content'));

        $post->categories()->sync($request->categories_ids);

        $post->details()->create($request->only('status', 'visibility'));

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
        return view('admin.posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::get();
        return view ('admin.posts.edit', compact('post','categories'));
    }

    public function update(PostRequest $request, Post $post)
    {
        $result = $post->update($request->only('title', 'content'));



        if ($result){
            $post->categories()->sync($request->categories_ids);

            $post->details->update($request->only('status', 'visibility'));

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
