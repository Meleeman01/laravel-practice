<div class="p-3">
            <h4 class="font-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
              @foreach ($archives as $stats)
              <li><a href="#">{{$stats['month']}}</a></li>
              @endforeach
            </ol>
          </div>