@extends(welcomeTheme().'layouts.app') @section('title')
<title>{{$page->seo_title?:websiteTitle($page->name)}}</title>
@endsection @section('SEO')
<meta name="title" property="og:title" content="{{$page->seo_title?:general()->meta_title}}" />
<meta name="description" property="og:description" content="{!!$page->seo_description?:general()->meta_description!!}" />
<meta name="keywords" content="{{$page->seo_keyword?:general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset($page->image())}}" />
<meta name="url" property="og:url" content="{{route('pageView',$page->slug?:'no-title')}}" />
<link rel="canonical" href="{{route('pageView',$page->slug?:'no-title')}}">
@endsection

@php
  $pageUrl = route('pageView',$page->slug?:'no-title');
  $activeCategory = request('category');
  $sort  = request('sort','newest');
  $sorts = ['newest' => 'Newest first', 'oldest' => 'Oldest first', 'name_asc' => 'Name: A – Z', 'name_desc' => 'Name: Z – A'];
  $url   = function (array $params) use ($pageUrl) {
      $q = array_filter(array_merge(request()->only(['category','sort']), $params), fn($v) => $v !== null && $v !== '');
      return $pageUrl.($q ? '?'.http_build_query($q) : '');
  };
  $activeName = $current ? $current->name : null;
  $activeTop  = $ancestors->count() ? $ancestors->first()->slug : $activeCategory;   // chip to highlight
@endphp

@push('css')
<style>
.nv .sp-head h1{margin-bottom:22px}
.nv .sp-subfilters{padding-bottom:14px;margin-bottom:14px;border-bottom:1px solid var(--nv-line)}
</style>
@endpush

@section('contents')
<div class="nv nv-sp">

  <!-- ================= HEAD ================= -->
  <section class="sp-head">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="sp-crumbs">
          <li><a href="{{route('index')}}">Home</a></li>
          @if($current)
            <li><a href="{{$pageUrl}}">{{$page->name}}</a></li>
            @foreach($ancestors as $anc)<li><a href="{{$url(['category' => $anc->slug, 'page' => null])}}">{{$anc->name}}</a></li>@endforeach
            <li aria-current="page">{{$current->name}}</li>
          @else
            <li aria-current="page">{{$page->name}}</li>
          @endif
        </ol>
      </nav>
      <h1>{{$activeName ?: 'Our Products'}}</h1>
      <form class="sp-form" action="{{route('search')}}" method="get" role="search">
        <i class="bi bi-search" aria-hidden="true"></i>
        <input type="search" name="search" placeholder="Search products, categories, SKU…" aria-label="Search products">
        <button type="submit" class="nv-btn nv-btn-accent">Search</button>
      </form>
    </div>
  </section>

  <section class="sp-main">
    <div class="container">

      <!-- ================= TOOLBAR ================= -->
      <div class="sp-toolbar">
        <div class="sp-filters" role="group" aria-label="Filter by category">
          <a href="{{$url(['category' => null, 'page' => null])}}" class="sp-chip {{!$activeCategory ? 'is-active' : ''}}">All</a>
          @foreach($facets as $facet)
            <a href="{{$url(['category' => $facet->slug, 'page' => null])}}" class="sp-chip {{$activeTop==$facet->slug ? 'is-active' : ''}}">{{$facet->name}}</a>
          @endforeach
        </div>

        <form class="sp-sort" action="{{$pageUrl}}" method="get">
          @if($activeCategory)<input type="hidden" name="category" value="{{$activeCategory}}">@endif
          <label for="spSort">Sort by</label>
          <select id="spSort" name="sort" onchange="this.form.submit()">
            @foreach($sorts as $key => $label)
              <option value="{{$key}}" {{$sort==$key ? 'selected' : ''}}>{{$label}}</option>
            @endforeach
          </select>
        </form>
      </div>

      <!-- ================= SUB-CATEGORIES ================= -->
      @foreach($subnavRows as $row)
        <div class="sp-filters sp-subfilters" role="group" aria-label="{{$row->cat->name}} categories">
          <a href="{{$url(['category' => $row->cat->slug, 'page' => null])}}" class="sp-chip {{$activeCategory==$row->cat->slug ? 'is-active' : ''}}">All {{$row->cat->name}}</a>
          @foreach($row->items as $sc)
            <a href="{{$url(['category' => $sc->slug, 'page' => null])}}" class="sp-chip {{$chain->contains('slug',$sc->slug) ? 'is-active' : ''}}">{{$sc->name}}</a>
          @endforeach
        </div>
      @endforeach

      @if($products->total())

        <p class="sp-count">Showing {{$products->firstItem()}}–{{$products->lastItem()}} of {{$products->total()}} products</p>

        <!-- ================= GRID ================= -->
        <div class="row g-3 g-lg-4 row-cols-2 row-cols-md-3 row-cols-xl-4">
          @foreach($products as $product)
            <div class="col" data-aos="fade-up" data-aos-delay="{{($loop->index % 4) * 70}}">
              @include(welcomeTheme().'.products.includes.productCard')
            </div>
          @endforeach
        </div>

        @include(general()->theme.'.layouts.partials.nvPager', ['paginator' => $products])
      @else
        <div class="sp-empty">
          <div class="sp-empty-icon"><i class="bi bi-box-seam"></i></div>
          <h2>No products in this category yet</h2>
          <p>Please check another category, or contact us — we can source it for you.</p>
          <a href="{{$url(['category' => null, 'page' => null])}}" class="nv-btn nv-btn-outline"><i class="bi bi-arrow-left"></i> View all products</a>
        </div>
      @endif

    </div>
  </section>

  <!-- ================= CTA ================= -->
  <section class="sp-cta">
    <div class="container">
      <div class="sp-cta-box">
        <div>
          <h2>Have your own design or tech pack?</h2>
          <p>Tell us what you need — we’ll develop, cost and produce it with the right factory in Bangladesh.</p>
        </div>
        <a href="{{url('get-a-quote')}}" class="nv-btn nv-btn-accent">Request a Quote <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
  </section>

</div>
@endsection

@push('js')
<script>
  // category chips: horizontal scroll on small screens (swipe, mouse drag, edge fades, active chip in view)
  document.querySelectorAll('.nv .sp-filters').forEach(function (row) {

    function updateFades() {
      var max = row.scrollWidth - row.clientWidth;
      row.classList.toggle('fade-start', row.scrollLeft > 4);
      row.classList.toggle('fade-end', max > 4 && row.scrollLeft < max - 4);
    }

    // bring the selected category into view
    var active = row.querySelector('.sp-chip.is-active');
    if (active && row.scrollWidth > row.clientWidth) {
      row.scrollLeft = Math.max(0, active.offsetLeft - row.offsetLeft - 20);
    }

    // click-and-drag with a mouse (touch devices already swipe natively)
    var down = false, moved = false, startX = 0, startLeft = 0;
    row.addEventListener('pointerdown', function (e) {
      if (e.pointerType !== 'mouse' || row.scrollWidth <= row.clientWidth) return;
      down = true; moved = false; startX = e.clientX; startLeft = row.scrollLeft;
    });
    window.addEventListener('pointermove', function (e) {
      if (!down) return;
      var dx = e.clientX - startX;
      if (!moved && Math.abs(dx) > 5) { moved = true; row.classList.add('is-dragging'); }
      if (moved) row.scrollLeft = startLeft - dx;
    });
    window.addEventListener('pointerup', function () {
      if (!down) return;
      down = false;
      setTimeout(function () { row.classList.remove('is-dragging'); }, 0);
    });
    // a drag must not open the chip link underneath
    row.addEventListener('click', function (e) { if (moved) { e.preventDefault(); moved = false; } }, true);

    row.addEventListener('scroll', updateFades, { passive: true });
    window.addEventListener('resize', updateFades);
    updateFades();
  });
</script>
@endpush
