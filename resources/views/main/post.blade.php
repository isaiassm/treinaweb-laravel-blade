@posttype($post['type'], 'video')
  <div class="post-preview" style="background-color:cornflowerblue">
@elseposttype($post['type'], 'nota')
  <div class="post-preview" style="background-color:burlywood">
@else
  <div class="post-preview">
@endposttype


  <a href="post.html">
    <h2 class="post-title">
      {{ $post['subject'] }}
    </h2>
    <h3 class="post-subtitle">
        {{ $post['content'] }}
    </h3>
  </a>
  <p class="post-meta">
    Postado por <a href="#">{{ $post['author'] }}</a> em @datebr($post['date'])
  </p>
</div>
<hr>