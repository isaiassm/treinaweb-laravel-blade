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