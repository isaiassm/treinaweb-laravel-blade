<!DOCTYPE html>
<html lang="en">

  @include('partials.head')

  <body>

    @include('partials.header')

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          @each('main.post', $posts, 'post', 'main.empty_post')
                    
          @includeFirst(['main.paginate', 'blog.paginate', 'partials.paginate'], ['first'=>'Primeiro','last'=>'Último'])
        </div>
      </div>
    </div>
    <hr>

    @include('partials.footer', ['copyright'=>'Treinaweb todos os direitos reservador @ 2018'])

  </body>

</html>
