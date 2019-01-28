<!DOCTYPE html>
<html lang="en">

  @include('partials.head')

  <body>

    @include('partials.admin_header')

    <div class="container" style="margin-top: 130px">
    <!-- Main Content -->
    @yield('content')
    </div>    
  </body>

</html>
