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
  $activeName = $activeCategory ? optional($facets->firstWhere('slug',$activeCategory))->name : null;
@endphp

@section('contents')
<div class="nv nv-sp">

  <!-- ================= HEAD ================= -->
  <section class="sp-head">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="sp-crumbs">
          <li><a href="{{route('index')}}">Home</a></li>
          <li aria-current="page">{{$page->name}}</li>
        </ol>
      </nav>
      <h1>{{$activeName ?: 'Our Products'}}</h1>
      <p class="sp-sub">
        @if($page->short_description)
          {{strip_tags($page->short_description)}}
        @else
          Explore our apparel range — woven, knit, denim, outerwear and more, manufactured by our trusted Bangladesh factory network.
        @endif
      </p>
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
            <a href="{{$url(['category' => $facet->slug, 'page' => null])}}" class="sp-chip {{$activeCategory==$facet->slug ? 'is-active' : ''}}">{{$facet->name}} <span>{{$facet->total}}</span></a>
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
