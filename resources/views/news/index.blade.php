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
                    
          <!-- Pager -->
          <div class="clearfix">
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                @for ($i = 1; $i < 10; $i++)
                  <li class="page-item"><a class="page-link" href="#">{{ $i }}</a></li>
                @endfor
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <hr>

    @include('partials.footer')

  </body>

</html>
