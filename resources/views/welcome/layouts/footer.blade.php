<!-- ================= FOOTER ================= -->
{{--
  Footer – all data comes from the admin panel:
    • Quick Links → pages found by their template (Pages › Page Template)
    • Products    → active top-level product categories
    • Contact     → Settings › General (email, mobile, addresses, social links)
--}}
@php
  $gs = general();

  // quick links: [label, page template, fallback name]
  $quickLinks = collect([['Home', 'Front Page']]);
  foreach ([['About Us'], ['Sourcing & Services', 'Service'], ['Latest Blog'], ['Contact Us']] as $templates) {
      $page = collect($templates)->map(fn ($t) => pageTemplate($t))->filter()->first();
      if ($page && $page->status == 'active') {
          $quickLinks->push([$page->name, $page]);
      }
  }

  $footerCategories = \App\Models\Attribute::where('type',0)->where('status','active')
      ->where(fn($q) => $q->whereNull('parent_id')->orWhere('parent_id',0))
      ->orderByDesc('fetured')->orderBy('view')->orderBy('name')
      ->limit(8)->get(['id','name','slug']);

  // fixed display order; categories not listed here follow at the end
  $footerOrder = ['menswear', 'womenswear', 'kidswear', 'outerwear', 'activewear', 'workwear', 'accessories'];
  $footerCategories = $footerCategories->sortBy(function ($c) use ($footerOrder) {
      $i = array_search(strtolower(trim($c->name)), $footerOrder);
      return $i === false ? count($footerOrder) : $i;
  })->values();

  // "Bangladesh Office: House 33, …" -> ['Bangladesh Office', 'House 33, …']
  $addresses = collect([$gs->address_one, $gs->address_two])->filter()->map(function ($a) {
      $parts = explode(':', $a, 2);
      return count($parts) == 2 ? [trim($parts[0]), trim($parts[1])] : [null, trim($a)];
  });

  $validLink = fn ($l) => $l && $l !== '#' && filter_var($l, FILTER_VALIDATE_URL);
  // Facebook, X, Instagram and LinkedIn are always shown; YouTube / Pinterest only when a link is set
  $socials = collect([
      ['facebook_link',  'bi-facebook',  'Facebook',  true],
      ['twitter_link',   'bi-twitter-x', 'X (Twitter)', true],
      ['instagram_link', 'bi-instagram', 'Instagram', true],
      ['linkedin_link',  'bi-linkedin',  'LinkedIn',  true],
      ['youtube_link',   'bi-youtube',   'YouTube',   false],
      ['pinterest_link', 'bi-pinterest', 'Pinterest', false],
  ])->map(fn ($s) => [$validLink($gs->{$s[0]}) ? $gs->{$s[0]} : null, $s[1], $s[2], $s[3]])
    ->filter(fn ($s) => $s[0] || $s[3]);
@endphp
<footer class="nv site-footer">
  <div class="container">
    <div class="footer-grid">
      <div>
        <a href="{{route('index')}}" class="brand">
          <img src="{{asset($gs->footerLogo())}}" alt="{{$gs->title ?: 'Nuvesta Global LLC'}}" class="brand-logo">
        </a>
        <p class="footer-tag">Global Apparel Sourcing &amp; Product Development .</p>
        @if($socials->count())
        <div class="footer-social">
          @foreach($socials as [$url, $icon, $label])
          <a href="{{$url ?: '#'}}" @if($url) target="_blank" rel="noopener" @endif aria-label="{{$label}}" title="{{$label}}"><i class="bi {{$icon}}"></i></a>
          @endforeach
        </div>
        @endif
      </div>

      <div class="footer-col">
        <h6>Quick Links</h6>
        <ul>
          @foreach($quickLinks as [$label, $page])
          <li><a href="{{$page === 'Front Page' ? route('index') : route('pageView',$page->slug ?: 'no-title')}}">{{$label}}</a></li>
          @endforeach
        </ul>
      </div>

      <div class="footer-col">
        <h6>Products</h6>
        <ul>
          @forelse($footerCategories as $ctg)
          <li><a href="{{route('productCategory',$ctg->slug ?: 'no-title')}}">{{$ctg->name}}</a></li>
          @empty
          <li><a href="{{($p = pageTemplate('Latest Products')) ? route('pageView',$p->slug) : url('products-all')}}">All Products</a></li>
          @endforelse
        </ul>
      </div>

      <div class="footer-col">
        <h6>Contact Us</h6>
        <ul class="contact">
          @if($gs->email)
          <li><i class="bi bi-envelope"></i><a href="mailto:{{$gs->email}}">{{$gs->email}}</a></li>
          @endif
          @if($gs->mobile)
          <li><i class="bi bi-whatsapp"></i><a href="https://wa.me/{{preg_replace('/\D/','',$gs->mobile)}}" target="_blank" rel="noopener">{{$gs->mobile}}</a></li>
          @endif
          @foreach($addresses as [$label, $address])
          <li class="addr"><i class="bi bi-geo-alt"></i><span>@if($label)<strong>{{$label}}</strong>@endif{{$address}}</span></li>
          @endforeach
        </ul>
      </div>

      <div class="footer-col footer-map">
        <img src="{{asset('welcome/images/home/worldmap.png')}}" alt="" aria-hidden="true">
        <div class="footer-regions"><span>Bangladesh</span><span>Lithuania / Europe</span><span>Global Markets</span></div>
        <p class="copyright">&copy; 2025 Nuvesta Global LLC. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
