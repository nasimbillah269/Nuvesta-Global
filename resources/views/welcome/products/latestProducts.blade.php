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
.nv .sp-subnav{display:flex;flex-wrap:wrap;align-items:center;gap:8px;margin:-6px 0 22px}
.nv .sp-subnav-label{font-size:13px;color:var(--nv-muted);margin-right:4px}
.nv .sp-subchip{display:inline-flex;align-items:center;gap:6px;padding:6px 14px;border-radius:999px;border:1px solid var(--nv-line);background:#fff;color:var(--nv-text);font-size:13.5px;text-decoration:none;transition:border-color .2s,color .2s}
.nv .sp-subchip:hover{border-color:var(--nv-accent);color:var(--nv-accent-2)}
.nv .sp-subchip.is-active{border-color:var(--nv-accent);color:var(--nv-accent-2);font-weight:600}
.nv .sp-subchip span{font-size:11px;color:var(--nv-muted)}
a.sp-cat{display:flex;flex-direction:column;height:100%;background:#fff;border:1px solid #e4e4e7;border-radius:4px;overflow:hidden;text-decoration:none;color:var(--nv-navy);transition:border-color .3s,box-shadow .3s}
a.sp-cat:hover{border-color:var(--nv-navy);box-shadow:0 10px 26px rgba(30,49,91,.10)}
.sp-cat-media{position:relative;padding-top:100%;background:#f2f2f3;overflow:hidden}
.sp-cat-media img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;transition:transform .6s ease}
a.sp-cat:hover .sp-cat-media img{transform:scale(1.04)}
.sp-cat-body{display:flex;align-items:center;justify-content:space-between;gap:10px;padding:16px 18px}
.sp-cat-name{font-size:17px;font-weight:600;margin:0;color:var(--nv-navy)}
.sp-cat-count{display:block;font-size:13px;color:var(--nv-muted);margin-top:2px}
.sp-cat-arrow{flex:none;width:36px;height:36px;border-radius:50%;display:flex;align-items:center;justify-content:center;background:var(--nv-soft);color:var(--nv-navy);transition:background .2s,color .2s}
a.sp-cat:hover .sp-cat-arrow{background:var(--nv-accent);color:#fff}
@media (max-width:575.98px){.sp-cat-body{padding:12px}.sp-cat-name{font-size:15px}.sp-cat-arrow{width:30px;height:30px}}
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
          <a href="{{$url(['category' => null, 'page' => null])}}" class="sp-chip {{!$activeCategory ? 'is-active' : ''}}">All <span>{{$totalProducts}}</span></a>
          @foreach($facets as $facet)
            <a href="{{$url(['category' => $facet->slug, 'page' => null])}}" class="sp-chip {{$activeTop==$facet->slug ? 'is-active' : ''}}">{{$facet->name}} <span>{{$facet->total}}</span></a>
          @endforeach
        </div>

        @unless($showSubcats)
        <form class="sp-sort" action="{{$pageUrl}}" method="get">
          @if($activeCategory)<input type="hidden" name="category" value="{{$activeCategory}}">@endif
          <label for="spSort">Sort by</label>
          <select id="spSort" name="sort" onchange="this.form.submit()">
            @foreach($sorts as $key => $label)
              <option value="{{$key}}" {{$sort==$key ? 'selected' : ''}}>{{$label}}</option>
            @endforeach
          </select>
        </form>
        @endunless
      </div>

      @if($parentCat && $siblings->count() > 1)
        <!-- sibling sub-categories -->
        <div class="sp-subnav" role="group" aria-label="{{$parentCat->name}} categories">
          <span class="sp-subnav-label">{{$parentCat->name}}:</span>
          @foreach($siblings as $sc)
            <a href="{{$url(['category' => $sc->slug, 'page' => null])}}" class="sp-subchip {{$activeCategory==$sc->slug ? 'is-active' : ''}}">{{$sc->name}} <span>{{$sc->total}}</span></a>
          @endforeach
        </div>
      @endif

      @if($showSubcats)
        <p class="sp-count">{{$subcats->count()}} {{Str::plural('category',$subcats->count())}} in {{$current->name}}</p>

        <!-- ================= SUB-CATEGORIES ================= -->
        <div class="row g-3 g-lg-4 row-cols-2 row-cols-md-3 row-cols-xl-4">
          @foreach($subcats as $sc)
            <div class="col" data-aos="fade-up" data-aos-delay="{{($loop->index % 4) * 70}}">
              <a href="{{$url(['category' => $sc->slug, 'page' => null, 'sort' => null])}}" class="sp-cat">
                <div class="sp-cat-media">
                  @if($sc->cover)<img src="{{asset($sc->cover->image())}}" alt="{{$sc->name}}" loading="lazy">@endif
                </div>
                <div class="sp-cat-body">
                  <div>
                    <h3 class="sp-cat-name">{{$sc->name}}</h3>
                    <span class="sp-cat-count">{{$sc->total}} {{Str::plural('product',$sc->total)}}</span>
                  </div>
                  <span class="sp-cat-arrow"><i class="bi bi-arrow-right"></i></span>
                </div>
              </a>
            </div>
          @endforeach
        </div>
      @elseif($products->total())

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
  (function () {
    var row = document.querySelector('.nv .sp-filters');
    if (!row) return;

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
  })();
</script>
@endpush
