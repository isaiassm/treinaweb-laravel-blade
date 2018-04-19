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