<!DOCTYPE html>
<html lang="en">

  @include('partials.head')

  <body>

    @include('partials.header')

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          
          @forelse ($posts as $post)
            <div class="post-preview">
              <a href="post.html">
                <h2 class="post-title">
                  ({{ $loop->iteration }}/{{ $loop->count }}) {{ $post['subject'] }}
                </h2>
                <h3 class="post-subtitle">
                    {{ $post['content'] }}
                </h3>
              </a>
              <p class="post-meta">
                Postado por <a href="#">{{ $post['author'] }}</a> em {{ $post['date'] }}
              </p>
            </div>

            @if (! $loop->last)
              <hr>
            @endif  
          @empty  
            <div class="post-preview">
              <p>Nenhum post encontrado</p>  
            </div>
            <hr>
          @endforelse
                    
          @includeWhen($paginate, 'partials.paginate')
        </div>
      </div>
    </div>
    <hr>

    @include('partials.footer')

  </body>

</html>
