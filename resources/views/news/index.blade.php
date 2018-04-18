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