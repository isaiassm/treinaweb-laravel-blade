@extends('layout.app')

@section('title')
  Página Inicial
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        @each('main.post', $posts, 'post', 'main.empty_post')
                  
        @include('main.paginate')
      </div>
    </div>
  </div>
  <hr>
@endsection
