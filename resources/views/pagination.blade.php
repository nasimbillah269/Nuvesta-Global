{{-- Site-wide pagination (product category, brands, wishlist, orders…) in the Nuvesta style --}}
@if ($paginator->hasPages())
<div class="nv nv-pagination">
  <nav class="sp-pager" aria-label="Pages">
    @if ($paginator->onFirstPage())
      <span class="is-disabled" aria-disabled="true"><i class="bi bi-chevron-left"></i><b class="sp-pager-txt">Prev</b></span>
    @else
      <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="Previous page"><i class="bi bi-chevron-left"></i><b class="sp-pager-txt">Prev</b></a>
    @endif

    @foreach ($elements as $element)
      @if (is_string($element))
        <span class="is-gap">{{ $element }}</span>
      @endif
      @if (is_array($element))
        @foreach ($element as $page => $url)
          @if ($page == $paginator->currentPage())
            <span class="is-current" aria-current="page">{{ $page }}</span>
          @else
            <a href="{{ $url }}">{{ $page }}</a>
          @endif
        @endforeach
      @endif
    @endforeach

    @if ($paginator->hasMorePages())
      <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="Next page"><b class="sp-pager-txt">Next</b><i class="bi bi-chevron-right"></i></a>
    @else
      <span class="is-disabled" aria-disabled="true"><b class="sp-pager-txt">Next</b><i class="bi bi-chevron-right"></i></span>
    @endif
  </nav>
  <p class="sp-pager-info">Page {{ $paginator->currentPage() }} of {{ $paginator->lastPage() }}@if(method_exists($paginator,'total')) · {{ $paginator->total() }} items @endif</p>
</div>
@endif
