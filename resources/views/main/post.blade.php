<div class="post-preview">
<a href="{{ route('posts.show', $post) }}">
    <h2 class="post-title">
      {{ $post->title }}
    </h2>
    <h3 class="post-subtitle">
        {{ $post->content }}
    </h3>
  </a>
  <p class="post-meta">
    Postado por <a href="#">Linguagens </a> em @datebr($post->created_at)
  </p>
</div>
<hr>