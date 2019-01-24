@extends('layout.app')

@section('title')
 Mais sobre ti
@endsection

@section('header')
<h1> Algumas noticias sobre o mundo da tecnologia</h1> 

  @parent
@endsection

@section('content')
   <!-- Post Content -->
   <article>
    <div class="container">
      <div class="row">
          @foreach ($listar as $lista)
          <div class="col-lg-8 col-md-10 mx-auto">
                {{ $lista->content }}
               </div>
          @endforeach
       
      </div>
    </div>
  </article>

  <hr>
@endsection