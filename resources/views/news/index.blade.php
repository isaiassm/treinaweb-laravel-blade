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
  $myVar = 10;

  $myVar = $myVar + 10;

  echo $myVar;
@endphp

{{-- ficar somente no blade (php) --}}

<!-- chegar no front-end -->