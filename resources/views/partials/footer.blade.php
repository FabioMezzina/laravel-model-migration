<footer>
  @if (Request::path() == '/')
    <a class="cta" href="{{ route('home-js') }}">Homepage JS</a>
  @else
    <a class="cta" href="{{ route('home') }}">Homepage PHP</a>  
  @endif
</footer>