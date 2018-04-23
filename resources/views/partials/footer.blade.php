<!-- Footer -->
<footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            @social(['color'=>'red'])
              @slot('link')
                <a href="http://twitter.com/treinaweb">
              @endslot

              <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
            @endsocial

            @social(['color'=>'blue'])
              @slot('link')
                <a href="http://facebook.com/treinaweb">
              @endslot

              <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
            @endsocial

            @social(['color'=>'black'])
              @slot('link')
                <a href="http://github.com/treinaweb">
              @endslot

              <i class="fa fa-github fa-stack-1x fa-inverse"></i>
            @endsocial
          </ul>
          <p class="copyright text-muted">{{ $copyright }}</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>