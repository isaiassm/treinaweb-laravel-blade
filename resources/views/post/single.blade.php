@extends('layout.app')

@section('title')
{{ $post->title }}
@endsection

@section('header')
{{ $post->title }}  

  @parent
@endsection

@section('content')
   <!-- Post Content -->
   <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            {{ $post->content }}
          </div>
      </div>
    </div>
  </article>

  <hr>
@endsection
