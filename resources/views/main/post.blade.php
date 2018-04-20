<div class="post-preview">
  <a href="post.html">
    <h2 class="post-title">
      {{ $post['subject'] }}
    </h2>
    <h3 class="post-subtitle">
        {{ $post['content'] }}
    </h3>
  </a>
  <p class="post-meta">
    Postado por <a href="#">{{ $post['author'] }}</a> em {{ $post['date'] }}
  </p>
</div>
<hr>