@extends('layout.admin')

@section('title')
    Novo post
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <form class="form-horizontal" method="post" action="{{ route('posts.store') }}">
            {{ csrf_field() }}

            @include('admin.posts.form')
        </form>

    <a href="{{route('posts.index')}}">Volta para a lista de post</a>
        </div>
    </div>
    
@endsection