{{-- Numbered pagination in the Nuvesta style. Expects: $paginator --}}
@if($paginator->hasPages())
<nav class="sp-pager" aria-label="Pages">
  @if($paginator->onFirstPage())
    <span class="is-disabled"><i class="bi bi-chevron-left"></i></span>
  @else
    <a href="{{$paginator->previousPageUrl()}}" rel="prev" aria-label="Previous page"><i class="bi bi-chevron-left"></i></a>
  @endif

  @php
    $from = max(1, $paginator->currentPage() - 2);
    $to   = min($paginator->lastPage(), $paginator->currentPage() + 2);
  @endphp
  @if($from > 1)
    <a href="{{$paginator->url(1)}}">1</a>
    @if($from > 2)<span class="is-gap">…</span>@endif
  @endif
  @foreach($paginator->getUrlRange($from, $to) as $page => $link)
    @if($page == $paginator->currentPage())
      <span class="is-current" aria-current="page">{{$page}}</span>
    @else
      <a href="{{$link}}">{{$page}}</a>
    @endif
  @endforeach
  @if($to < $paginator->lastPage())
    @if($to < $paginator->lastPage() - 1)<span class="is-gap">…</span>@endif
    <a href="{{$paginator->url($paginator->lastPage())}}">{{$paginator->lastPage()}}</a>
  @endif

  @if($paginator->hasMorePages())
    <a href="{{$paginator->nextPageUrl()}}" rel="next" aria-label="Next page"><i class="bi bi-chevron-right"></i></a>
  @else
    <span class="is-disabled"><i class="bi bi-chevron-right"></i></span>
  @endif
</nav>
@endif
