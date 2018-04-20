<!DOCTYPE html>
<html lang="en">

  @include('partials.head')

  <body>

    @include('partials.header')

    <!-- Main Content -->
    @yield('content')

    @include('partials.footer', ['copyright'=>'Treinaweb todos os direitos reservador @ 2018'])

  </body>

</html>
