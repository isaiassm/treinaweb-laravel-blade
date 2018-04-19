{{ $name }}
{{ $description }}

<br>
{!! $name !!}

<br>
@json($posts)

<script>
  var posts = @json($posts);

  console.log(posts);
</script>

<br>
@{{ name }}
@{{ age }}
@{{ email }}

<br>
@verbatim
  {{ name }}
  {{ age }}
  {{ email }}
@endverbatim

@php
  $comments = -10;

  $category = 'c#-avancado';
@endphp

{{-- ficar somente no blade (php) --}}

<!-- chegar no front-end -->


@if ($comments === 1)
  <p>Temos 1 comentário</p>
@elseif ($comments > 1)
  <p>Temos {{ $comments }} comentários</p>
@elseif ($comments < 0)
  <p>Número de comentário invalido</p>  
@else
  <p>Não temos nenhum comentário</p>
@endif


@unless ($comments > 0)
  <p>Número de comentário invalido</p>  
@endunless

@switch ($category)
  @case('php-basico')
    <p>Muito bom começar seus estudos em PHP!!!</p>
    @break

  @case('php-avancado')
    <p>Legal você voltar a estudar PHP!!!</p>
    @break

  @default
    <p>Muito bom ter você em nosso blog!!!</p>
@endswitch

