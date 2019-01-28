@extends('layout.admin')

@section('title')
    Detalhes do post
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
        <p>O id do post é: {{$post->id}}</p>
        <p>O título do post é: {{$post->title}}</p>
        <p>O conteúdo do post é: {{$post->content}}</p>

        <a href="{{ route ('post.index')}}">Voltar para a lista de projetos</a>
        </div>
    </div>

    
@endsection