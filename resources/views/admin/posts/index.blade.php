@extends('layout.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
<table class="table table-striped">
        <thead>
          <tr>
            <th >Id</th>
            <th >Título</th>
            <th >Ações</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
          <tr>
            <td>{{$post->id}}</td>
            <td>
            <a href="{{ route('posts.show', $post) }}">
                {{$post->title}}
            </a>
            </td>
            <td>
        <a class="btn btn-success" href="{{ route('posts.edit', $post->id) }}">Editar</a>

        <form style="display: inline" action="{{ route('posts.destroy', $post->id)}}" method="post">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
            
        <button type="submit" class="btn btn-danger" 
        onclick="return confirm('tem certeza que deseja remover o post?')">Deletar</button>

        </form>
    </td>
          </tr>
          @empty
          <tr><td>Nenhum post cadastrado</td></tr>
          @endforelse
        </tbody>
      </table>
      
      <div class="row">
        <div class="col-md-10">
            {{ $posts->links() }}
        </div>
        <div class="col-md-2">
            <a href="{{ route('posts.create') }}" class="btn btn-default">Criar Post</a>
        </div>
        
        
      </div>

    </div>
</div>

      @endsection