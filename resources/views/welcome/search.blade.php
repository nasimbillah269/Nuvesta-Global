@extends(welcomeTheme().'layouts.app') @section('title')
<title>{{websiteTitle($term!=='' ? 'Search: '.$term : 'Search')}}</title>
@endsection @section('SEO')
<meta name="title" property="og:title" content="{{general()->meta_title}}" />
<meta name="description" property="og:description" content="{!!general()->meta_description!!}" />
<meta name="keywords" content="{{general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset(general()->logo())}}" />
<meta name="url" property="og:url" content="{{route('search')}}" />
<meta name="robots" content="noindex, follow" />
<link rel="canonical" href="{{route('search')}}">
@endsection

@php
  // escape first, then wrap the matched term in <mark>
  $hl = function ($text) use ($term) {
      $safe = e($text);
      if ($term === '') return $safe;
      return preg_replace('/('.preg_quote(e($term), '/').')/iu', '<mark>$1</mark>', $safe);
  };
  $activeCategory = request('category');
  $sort = request('sort', 'newest');
  $sorts = ['newest' => 'Newest first', 'oldest' => 'Oldest first', 'name_asc' => 'Name: A – Z', 'name_desc' => 'Name: Z – A'];
  $url = fn (array $params) => route('search', array_filter(array_merge(request()->only(['search','category','sort']), $params), fn($v) => $v !== null && $v !== ''));
@endphp

@section('contents')
<div class="nv nv-sp">

  <!-- ================= HEAD ================= -->
  <section class="sp-head">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="sp-crumbs">
          <li><a href="{{route('index')}}">Home</a></li>
          <li aria-current="page">Search</li>
        </ol>
      </nav>

      <h1>
        @if($term!=='')
          Results for <span>“{{$term}}”</span>
        @else
          Browse all products
        @endif
      </h1>
      <p class="sp-sub">
        {{$totalMatching}} {{Str::plural('product',$totalMatching)}} found
        @if($blogs->count() || $pages->count())
          · {{$blogs->count()+$pages->count()}} related {{Str::plural('article',$blogs->count()+$pages->count())}}
        @endif
      </p>

      <form class="sp-form" action="{{route('search')}}" method="get" role="search">
        <i class="bi bi-search" aria-hidden="true"></i>
        <input type="search" name="search" value="{{$term}}" placeholder="Search products, categories, SKU…" aria-label="Search">
        @if(request('sort'))<input type="hidden" name="sort" value="{{request('sort')}}">@endif
        <button type="submit" class="nv-btn nv-btn-accent">Search</button>
      </form>
    </div>
  </section>

  <section class="sp-main">
    <div class="container">

      @if($totalMatching)
      <!-- ================= TOOLBAR ================= -->
      <div class="sp-toolbar">
        <div class="sp-filters" role="group" aria-label="Filter by category">
          <a href="{{$url(['category' => null, 'page' => null])}}" class="sp-chip {{!$activeCategory ? 'is-active' : ''}}">All <span>{{$totalMatching}}</span></a>
          @foreach($facets as $facet)
            <a href="{{$url(['category' => $facet->slug, 'page' => null])}}" class="sp-chip {{$activeCategory==$facet->slug ? 'is-active' : ''}}">{{$facet->name}} <span>{{$facet->total}}</span></a>
          @endforeach
        </div>

        <form class="sp-sort" action="{{route('search')}}" method="get">
          <input type="hidden" name="search" value="{{$term}}">
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
      <p class="sp-count">Showing {{$products->firstItem()}}–{{$products->lastItem()}} of {{$products->total()}}</p>
      @endif
      @endif

      <!-- ================= PRODUCTS ================= -->
      @if($products->count())
        <div class="row g-3 g-lg-4 row-cols-2 row-cols-md-3 row-cols-xl-4">
          @foreach($products as $product)
          @php $ctg = $product->productCategories->first(); @endphp
          <div class="col" data-aos="fade-up" data-aos-delay="{{($loop->index % 4) * 70}}">
            <a href="{{route('productView',$product->slug?:Str::slug($product->name))}}" class="sp-card">
              <div class="sp-card-media {{$product->bannerFile ? 'has-alt' : ''}}">
                <img src="{{asset($product->image())}}" alt="{{$product->name}}" loading="lazy" class="sp-img-main">
                @if($product->bannerFile)
                  <img src="{{asset($product->banner())}}" alt="" aria-hidden="true" loading="lazy" class="sp-img-alt">
                @endif
                @if($product->created_at && $product->created_at->gt(now()->subDays(60)))
                  <span class="sp-badge">New</span>
                @endif
                <span class="sp-card-cta">View details <i class="bi bi-arrow-right"></i></span>
              </div>
              <div class="sp-card-body">
                @if($ctg)<span class="sp-card-cat">{{$ctg->name}}</span>@endif
                <h3 class="sp-card-title">{!!$hl($product->name)!!}</h3>
                @if($product->sku_code)<span class="sp-card-sku">SKU: {!!$hl($product->sku_code)!!}</span>@endif
              </div>
            </a>
          </div>
          @endforeach
        </div>

        @if($products->hasPages())
        <nav class="sp-pager" aria-label="Search results pages">
          @if($products->onFirstPage())
            <span class="is-disabled"><i class="bi bi-chevron-left"></i></span>
          @else
            <a href="{{$products->previousPageUrl()}}" rel="prev" aria-label="Previous page"><i class="bi bi-chevron-left"></i></a>
          @endif
          @foreach($products->getUrlRange(max(1,$products->currentPage()-2), min($products->lastPage(),$products->currentPage()+2)) as $page => $link)
            @if($page == $products->currentPage())
              <span class="is-current" aria-current="page">{{$page}}</span>
            @else
              <a href="{{$link}}">{{$page}}</a>
            @endif
          @endforeach
          @if($products->hasMorePages())
            <a href="{{$products->nextPageUrl()}}" rel="next" aria-label="Next page"><i class="bi bi-chevron-right"></i></a>
          @else
            <span class="is-disabled"><i class="bi bi-chevron-right"></i></span>
          @endif
        </nav>
        @endif

      @else
        <!-- ================= EMPTY ================= -->
        <div class="sp-empty">
          <div class="sp-empty-icon"><i class="bi bi-search"></i></div>
          <h2>No products found{{$term!=='' ? ' for “'.$term.'”' : ''}}</h2>
          <p>Try checking the spelling, using fewer or more general words, or browse one of our categories below.</p>
          @php $popular = \App\Models\Attribute::where('type',0)->where('status','active')->where(fn($q)=>$q->whereNull('parent_id')->orWhere('parent_id',0))->orderBy('view')->limit(8)->get(['name','slug']); @endphp
          @if($popular->count())
          <div class="sp-empty-chips">
            @foreach($popular as $c)
              <a href="{{route('productCategory',$c->slug?:'no-title')}}" class="sp-chip">{{$c->name}}</a>
            @endforeach
          </div>
          @endif
          <a href="{{route('index')}}" class="nv-btn nv-btn-outline"><i class="bi bi-arrow-left"></i> Back to home</a>
        </div>
      @endif

      <!-- ================= OTHER CONTENT ================= -->
      @if($blogs->count() || $pages->count())
      <div class="sp-more">
        <h2 class="sp-more-title">Related content</h2>
        <div class="row g-3">
          @foreach($blogs as $blog)
          <div class="col-md-6 col-xl-3">
            <a href="{{route('blogView',$blog->slug?:'no-title')}}" class="sp-link-card">
              <span class="sp-link-icon"><i class="bi bi-journal-text"></i></span>
              <span><small>Insight · {{$blog->created_at->format('d M Y')}}</small><strong>{!!$hl($blog->name)!!}</strong></span>
            </a>
          </div>
          @endforeach
          @foreach($pages as $pg)
          <div class="col-md-6 col-xl-3">
            <a href="{{$pg->template=='Front Page' ? route('index') : route('pageView',$pg->slug?:'no-title')}}" class="sp-link-card">
              <span class="sp-link-icon"><i class="bi bi-file-earmark-text"></i></span>
              <span><small>Page</small><strong>{!!$hl($pg->name)!!}</strong></span>
            </a>
          </div>
          @endforeach
        </div>
      </div>
      @endif

    </div>
  </section>

  <!-- ================= CTA ================= -->
  <section class="sp-cta">
    <div class="container">
      <div class="sp-cta-box">
        <div>
          <h2>Can’t find exactly what you need?</h2>
          <p>Send us your tech pack or reference — we’ll source it from our Bangladesh factory network.</p>
        </div>
        <a href="{{url('contact-us')}}" class="nv-btn nv-btn-accent">Request a Quote <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
  </section>

</div>
@endsection
