{{--
  Header – managed from the admin panel:
    • Logo            → Settings › General › Logo
    • Menu items      → Menus › menu with location "Header Menus" (sub-items become dropdowns)
    • Right button(s) → Menus › menu with location "Header Button" (each item = one button)
  If a menu is missing, sensible defaults are shown.
--}}
@php
  $headerMenu   = menu('Header Menus');
  $headerButton = menu('Header Button');
  $currentUrl   = url()->current();
  $quotePage    = pageTemplate('Get A Quote');
  $quoteUrl     = $quotePage ? route('pageView',$quotePage->slug) : url('get-a-quote');

  $menuUrl = function ($item) {
      $link = $item->menuLink();
      return $link ? asset($link) : '#';
  };
  $isActive = function ($item) use (&$isActive, $menuUrl, $currentUrl) {
      if (rtrim($menuUrl($item), '/') === rtrim($currentUrl, '/')) {
          return true;
      }
      foreach ($item->subMenus as $child) {
          if ($isActive($child)) return true;
      }
      return false;
  };
  $target = fn ($item) => $item->target ? 'target="_blank" rel="noopener"' : '';

  $searchChips = \App\Models\Attribute::where('type',0)->where('status','active')
      ->where(fn($q) => $q->whereNull('parent_id')->orWhere('parent_id',0))
      ->orderBy('view')->limit(6)->get(['id','name','slug']);
@endphp

<!-- ================= HEADER ================= -->
<header class="nv site-header">
  <nav class="navbar navbar-expand-xl">
    <div class="container">
      <a class="navbar-brand brand" href="{{route('index')}}">
        <img src="{{asset(general()->logo())}}" alt="{{general()->title ?: 'Nuvesta Global LLC'}}" class="brand-logo">
      </a>

      <div class="d-flex align-items-center gap-2 order-xl-3">
        @if($headerButton && $headerButton->subMenus->count())
          @foreach($headerButton->subMenus as $btn)
            <a href="{{$menuUrl($btn)}}" {!!$target($btn)!!} class="nv-btn {{$loop->first ? 'nv-btn-navy' : 'nv-btn-outline'}} d-none d-sm-inline-flex">{{$btn->menuName()}}</a>
          @endforeach
        @else
          <a href="{{$quoteUrl}}" class="nv-btn nv-btn-navy d-none d-sm-inline-flex">Enquiry</a>
        @endif
        <button type="button" class="header-search" data-nv-search-open aria-label="Search" aria-haspopup="dialog" aria-controls="nvSearch"><i class="bi bi-search"></i></button>
        <button class="navbar-toggler nv-burger" type="button" data-nv-drawer-open aria-controls="nvDrawer" aria-expanded="false" aria-label="Open menu">
          <span></span><span></span><span></span>
        </button>
      </div>

      <div class="collapse navbar-collapse justify-content-center" id="mainNav">
        <ul class="navbar-nav">
          @if($headerMenu && $headerMenu->subMenus->count())
            @foreach($headerMenu->subMenus as $item)
              @if($item->subMenus->count())
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle {{$isActive($item) ? 'active' : ''}}" href="{{$menuUrl($item)}}" data-bs-toggle="dropdown" aria-expanded="false">{{$item->menuName()}}</a>
                  <ul class="dropdown-menu">
                    @foreach($item->subMenus as $sub)
                      <li><a class="dropdown-item {{$isActive($sub) ? 'active' : ''}}" href="{{$menuUrl($sub)}}" {!!$target($sub)!!}>{{$sub->menuName()}}</a></li>
                    @endforeach
                  </ul>
                </li>
              @else
                <li class="nav-item"><a class="nav-link {{$isActive($item) ? 'active' : ''}}" href="{{$menuUrl($item)}}" {!!$target($item)!!}>{{$item->menuName()}}</a></li>
              @endif
            @endforeach
          @else
            <li class="nav-item"><a class="nav-link {{request()->routeIs('index') ? 'active' : ''}}" href="{{route('index')}}">Home</a></li>
          @endif

        </ul>
      </div>
    </div>
  </nav>
</header>

<!-- ================= MOBILE DRAWER ================= -->
<div class="nv nv-drawer" id="nvDrawer" role="dialog" aria-modal="true" aria-label="Main menu" hidden>
  <div class="nv-drawer-backdrop" data-nv-drawer-close></div>
  <aside class="nv-drawer-panel">
    <div class="nv-drawer-head">
      <a href="{{route('index')}}" class="brand"><img src="{{asset(general()->logo())}}" alt="{{general()->title ?: 'Nuvesta Global LLC'}}" class="brand-logo"></a>
      <button type="button" class="nv-drawer-x" data-nv-drawer-close aria-label="Close menu"><i class="bi bi-x-lg"></i></button>
    </div>

    <div class="nv-drawer-body">
      <button type="button" class="nv-drawer-search" data-nv-search-open data-nv-drawer-close>
        <i class="bi bi-search"></i><span>Search products…</span>
      </button>

      <nav aria-label="Mobile">
        @if($headerMenu && $headerMenu->subMenus->count())
          @include(general()->theme.'.layouts.partials.drawerItems', ['items' => $headerMenu->subMenus, 'level' => 0])
        @else
          <ul class="nv-dm-list"><li class="nv-dm-item is-active"><div class="nv-dm-row"><a class="nv-dm-link" href="{{route('index')}}">Home</a></div></li></ul>
        @endif
      </nav>
    </div>

    <div class="nv-drawer-foot">
      <div class="nv-drawer-btns">
        @if($headerButton && $headerButton->subMenus->count())
          @foreach($headerButton->subMenus as $btn)
            <a href="{{$menuUrl($btn)}}" {!!$target($btn)!!} class="nv-btn {{$loop->first ? 'nv-btn-navy' : 'nv-btn-outline'}}">{{$btn->menuName()}} <i class="bi bi-arrow-right"></i></a>
          @endforeach
        @else
          <a href="{{$quoteUrl}}" class="nv-btn nv-btn-navy">Enquiry <i class="bi bi-arrow-right"></i></a>
        @endif
      </div>
      <ul class="nv-drawer-contact">
        @if(general()->email)<li><i class="bi bi-envelope"></i><a href="mailto:{{general()->email}}">{{general()->email}}</a></li>@endif
        @if(general()->mobile)<li><i class="bi bi-telephone"></i><a href="tel:{{preg_replace('/[^\d+]/','',general()->mobile)}}">{{general()->mobile}}</a></li>@endif
      </ul>
      <div class="nv-drawer-social">
        @foreach(['facebook_link'=>'facebook','linkedin_link'=>'linkedin','instagram_link'=>'instagram','youtube_link'=>'youtube','twitter_link'=>'twitter-x'] as $field => $icon)
          @if(general()->$field)<a href="{{general()->$field}}" target="_blank" rel="noopener" aria-label="{{ucfirst($icon)}}"><i class="bi bi-{{$icon}}"></i></a>@endif
        @endforeach
      </div>
    </div>
  </aside>
</div>

<!-- ================= SEARCH POPUP ================= -->
<div class="nv nv-search" id="nvSearch" role="dialog" aria-modal="true" aria-label="Search" hidden
     data-endpoint="{{route('liveSearch')}}">
  <div class="nv-search-backdrop" data-nv-search-close></div>
  <div class="nv-search-panel">
    <form class="nv-search-form" action="{{route('search')}}" method="get" autocomplete="off" role="search">
      <i class="bi bi-search nv-search-icon" aria-hidden="true"></i>
      <input type="search" name="search" class="nv-search-input" placeholder="Search products, categories, insights…"
             aria-label="Search" aria-autocomplete="list" aria-controls="nvSearchResults" value="{{request()->routeIs('search') ? request('search') : ''}}">
      <span class="nv-search-spinner" aria-hidden="true"></span>
      <button type="button" class="nv-search-clear" aria-label="Clear search"><i class="bi bi-x-circle-fill"></i></button>
      <button type="button" class="nv-search-close" data-nv-search-close aria-label="Close search"><kbd>Esc</kbd></button>
    </form>

    <div class="nv-search-body">
      {{-- shown before typing --}}
      <div class="nv-search-intro">
        @if($searchChips->count())
        <p class="nv-search-label">Popular categories</p>
        <div class="nv-search-chips">
          @foreach($searchChips as $chip)
          <a href="{{route('productCategory',$chip->slug?:'no-title')}}" class="nv-chip"><i class="bi bi-arrow-up-right"></i>{{$chip->name}}</a>
          @endforeach
        </div>
        @endif
        <p class="nv-search-hint"><i class="bi bi-lightbulb"></i> Type at least 2 characters — results appear instantly. Press <kbd>Enter</kbd> to see all results.</p>
      </div>

      {{-- filled by JS --}}
      <div class="nv-search-results" id="nvSearchResults" role="listbox" aria-live="polite"></div>
    </div>

    <div class="nv-search-foot">
      <span><kbd>↑</kbd><kbd>↓</kbd> to navigate</span>
      <span><kbd>Enter</kbd> to select</span>
      <span><kbd>Esc</kbd> to close</span>
    </div>
  </div>
</div>

@push('js')
<script src="{{asset('welcome/assets/js/nv-search.js')}}"></script>
<script src="{{asset('welcome/assets/js/nv-drawer.js')}}"></script>
@endpush
