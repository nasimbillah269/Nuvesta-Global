@extends(welcomeTheme().'layouts.app') @section('title')
<title>{{websiteTitle()}}</title>
@endsection @section('SEO')
<meta name="title" property="og:title" content="{{general()->meta_title}}" />
<meta name="description" property="og:description" content="{!!general()->meta_description!!}" />
<meta name="keyword" property="og:keyword" content="{{general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset(general()->logo())}}" />
<meta name="url" property="og:url" content="{{route('index')}}" />
<link rel="canonical" href="{{route('index')}}" />

<style>
/* ---------- WHO WE ARE ---------- */
.nv .who{padding:80px 0;background:linear-gradient(180deg,#f7f8fb 0%,#fff 100%);overflow:hidden}
.nv .who-text{padding-right:24px}
.nv .who h2{font-size:40px;line-height:1.15;font-weight:700;color:var(--nv-navy);letter-spacing:-.015em !important;margin-bottom:24px;padding-bottom:18px;position:relative}
.nv .who h2::after{content:"";position:absolute;left:0;bottom:0;width:60px;height:4px;border-radius:4px;background:linear-gradient(90deg,var(--nv-accent),var(--nv-sky))}
.nv .who-lead{font-size:16px !important;line-height:1.8 !important;color:var(--nv-text) !important;margin-bottom:24px !important;text-align:justify !important}
.nv .who-tagline{font-size:15px !important;line-height:1.6 !important;font-weight:600;color:var(--nv-navy) !important;text-align:justify !important;
  background:#fff;border:1px solid var(--nv-line);border-left:4px solid var(--nv-accent);border-radius:10px;padding:16px 20px;box-shadow:0 6px 18px rgba(30,49,91,.06)}

.nv .who-media{position:relative;padding:0 0 28px 28px}
.nv .who-media::before{content:"";position:absolute;left:0;bottom:0;width:62%;height:70%;border-radius:18px;
  background:linear-gradient(135deg,var(--nv-navy) 0%,var(--nv-navy-3) 100%);z-index:0}
.nv .who-photo{position:relative;z-index:1;border-radius:18px;overflow:hidden;box-shadow:0 24px 50px rgba(18,31,59,.18);aspect-ratio:4/3}
.nv .who-photo img{width:100%;height:100%;object-fit:cover;display:block;transition:transform .8s ease}
.nv .who-media:hover .who-photo img{transform:scale(1.04)}
.nv .who-badge{position:absolute;z-index:2;left:0;bottom:48px;padding:14px 18px;background:#fff;border-radius:14px;box-shadow:0 14px 30px rgba(18,31,59,.16);display:flex;align-items:center;gap:12px}
.nv .who-badge b{font-size:30px;line-height:1;font-weight:700;color:var(--nv-accent)}
.nv .who-badge span{font-size:12px !important;line-height:1.35;color:var(--nv-navy) !important;font-weight:600}

@media (max-width:1199.98px){
  .nv .who h2{font-size:34px}
}
@media (max-width:991.98px){
  .nv .who{padding:56px 0}
  .nv .who-text{padding-right:0;margin-bottom:10px}
}
@media (max-width:575.98px){
  .nv .who{padding:44px 0}
  .nv .who h2{font-size:30px}
  .nv .who-media{padding:0 0 20px 16px}
  .nv .who-badge{bottom:34px;padding:10px 14px}
  .nv .who-badge b{font-size:24px}
}
</style>


@endsection
@section('contents')
<div class="nv nv-home">

<!--Hero-->
@include(general()->theme.'.layouts.slider')


<!-- ================= WHO WE ARE ================= -->
<section class="who">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6" data-aos="fade-right">
        <div class="who-text">
          <h2>Who We Are</h2>
          <p class="who-lead">Nuvesta Global is a Lithuania-registered apparel sourcing and supply company connecting buyers across Europe, the UK and the USA with trusted manufacturing and sourcing partners in Bangladesh and selected Asian markets. We coordinate product development, fabric and trim sourcing, costing, sampling, supplier selection, production follow-up, quality assurance and shipment—giving international buyers a structured sourcing partner from inquiry to delivery.</p>
          <p class="who-tagline">European presence. Bangladesh manufacturing access. International sourcing support.</p>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <div class="who-media">
          <div class="who-photo"><img src="{{asset('welcome/images/home/WhatsApp Image 2026-09-27 at 3.00.36 PM.jpeg')}}" alt="Nuvesta Global showroom and meeting room" loading="lazy"></div>
          <div class="who-badge"><b>26+</b><span>Years of Apparel<br>Industry Experience</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= FEATURE STRIP ================= -->
<section class="feature-strip">
  <div class="container">
    <div class="feature-panel">
      <div class="row g-0 row-cols-2 row-cols-md-3 row-cols-lg-6">
        <div class="col feature-item" data-aos="fade-up" data-aos-delay="0"><span class="feature-icon"><i class="bi bi-shield-check"></i></span><h3 class="feature-title">Reliable Factory Network</h3><p>Vetted &amp; compliant partners</p></div>
        <div class="col feature-item" data-aos="fade-up" data-aos-delay="80"><span class="feature-icon"><i class="bi bi-clipboard2-data"></i></span><h3 class="feature-title">Quality Focused</h3><p>Inline &amp; final inspections</p></div>
        <div class="col feature-item" data-aos="fade-up" data-aos-delay="160"><span class="feature-icon"><i class="bi bi-gear"></i></span><h3 class="feature-title">Product Expertise</h3><p>From development to costing</p></div>
        <div class="col feature-item" data-aos="fade-up" data-aos-delay="240"><span class="feature-icon"><i class="bi bi-clock-history"></i></span><h3 class="feature-title">On-Time Delivery</h3><p>Planned &amp; tracked timelines</p></div>
        <div class="col feature-item" data-aos="fade-up" data-aos-delay="320"><span class="feature-icon"><i class="fa-regular fa-handshake"></i></span><h3 class="feature-title">Transparent Communication</h3><p>One clear point of contact</p></div>
        <div class="col feature-item" data-aos="fade-up" data-aos-delay="400"><span class="feature-icon"><i class="fa-solid fa-leaf"></i></span><h3 class="feature-title">Sustainable Future</h3><p>Responsible sourcing choices</p></div>
      </div>
    </div>
  </div>
</section>

<!-- ================= SERVICES ================= -->
<section class="services">
  <div class="container">
    <div class="row g-4 align-items-start">
      <div class="col-lg-4 col-xl-3" data-aos="fade-right">
        <p class="eyebrow">Our Sourcing Services</p>
        <h2 class="section-title">From Product Idea to Shipment</h2>
        <p class="section-text">Nuvesta Global LLC provides end-to-end apparel sourcing and product development support for brands, retailers, importers and buying organizations.</p>
        <a href="{{($servicePage = pageTemplate('Sourcing & Services') ?: pageTemplate('Service')) ? route('pageView',$servicePage->slug) : '#'}}" class="nv-btn nv-btn-outline">Learn More About Our Services <i class="bi bi-arrow-right"></i></a>
      </div>
      <div class="col-lg-8 col-xl-9">
        <div class="row g-3 row-cols-2 row-cols-md-3 row-cols-xl-6 steps">
          <div class="col" data-aos="fade-up" data-aos-delay="0"><div class="step"><div class="step-top"><span class="step-icon"><i class="bi bi-lightbulb"></i></span><span class="step-num">01</span></div><h6>Product Development</h6><p>Tech packs, sampling and commercial development.</p></div></div>
          <div class="col" data-aos="fade-up" data-aos-delay="90"><div class="step"><div class="step-top"><span class="step-icon"><i class="bi bi-layers"></i></span><span class="step-num">02</span></div><h6>Fabric &amp; Trim Sourcing</h6><p>Finding the right materials, mills and suppliers.</p></div></div>
          <div class="col" data-aos="fade-up" data-aos-delay="180"><div class="step"><div class="step-top"><span class="step-icon"><i class="bi bi-buildings"></i></span><span class="step-num">03</span></div><h6>Factory Matching</h6><p>Partners based on quality, capacity and requirements.</p></div></div>
          <div class="col" data-aos="fade-up" data-aos-delay="270"><div class="step"><div class="step-top"><span class="step-icon"><i class="bi bi-calculator"></i></span><span class="step-num">04</span></div><h6>Costing &amp; Negotiation</h6><p>Detailed FOB costing and commercial negotiation.</p></div></div>
          <div class="col" data-aos="fade-up" data-aos-delay="360"><div class="step"><div class="step-top"><span class="step-icon"><i class="bi bi-scissors"></i></span><span class="step-num">05</span></div><h6>Production Management</h6><p>T&amp;A follow-up, monitoring and buyer communication.</p></div></div>
          <div class="col" data-aos="fade-up" data-aos-delay="450"><div class="step"><div class="step-top"><span class="step-icon"><i class="bi bi-shield-check"></i></span><span class="step-num">06</span></div><h6>Quality &amp; Shipment</h6><p>Inspection, packing and shipment readiness.</p></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= PRODUCTS ================= -->
@php
  // one card list for the slider: real categories, or a static fallback when none exist yet
  if(isset($homeCategories) && $homeCategories->count()){
    $productCards = $homeCategories->map(function($ctg){
      $fallback = collect(['outerwear','knitwear','shirts','denim','activewear','pants'])
          ->first(fn($k) => str_contains(Str::lower($ctg->slug.' '.$ctg->name), rtrim($k,'s')) || str_contains(Str::lower($ctg->name), Str::substr($k,0,4)));
      return [
        'url'   => route('productCategory',$ctg->slug?:'no-title'),
        'img'   => $ctg->cardImage ?: ($fallback ? 'welcome/images/home/p-'.$fallback.'.jpg' : 'medies/noimage.jpg'),
        'name'  => $ctg->name,
      ];
    });
  }else{
    $productCards = collect([
      ['pants','Pants & Shorts'],
      ['outerwear','Outerwear'],
      ['shirts','Shirts'],
      ['knitwear','Knitwear'],
      ['activewear','Activewear'],
      ['denim','Denim'],
    ])->map(fn($p) => ['url' => '#', 'img' => 'welcome/images/home/p-'.$p[0].'.jpg', 'name' => $p[1]]);
  }
@endphp
<section class="products">
  <div class="container">
    <div class="row g-4 align-items-center">
      <div class="col-lg-3" data-aos="fade-right">
        <p class="eyebrow">Our Products</p>
        <h2 class="section-title">Our Product Expertise</h2>
        <p class="section-text">Wide range of apparel categories with a focus on quality, trends and commercial value.</p>
        <a href="{{($productsPage = pageTemplate('Latest Products')) ? route('pageView',$productsPage->slug) : url('products-all')}}" class="nv-btn nv-btn-outline">View All Product Categories <i class="bi bi-arrow-right"></i></a>
        @if($productCards->count() > 5)
        <div class="ctg-nav">
          <button type="button" class="ctg-arrow ctg-prev" aria-label="Previous categories"><i class="bi bi-arrow-left"></i></button>
          <button type="button" class="ctg-arrow ctg-next" aria-label="Next categories"><i class="bi bi-arrow-right"></i></button>
        </div>
        @endif
      </div>
      <div class="col-lg-9" data-aos="fade-up">
        <div class="ctg-slider">
          @foreach($productCards as $card)
          <div class="ctg-slide">
            <a href="{{$card['url']}}" class="ctg-card">
              <div class="ctg-img"><img src="{{asset($card['img'])}}" alt="{{$card['name']}}" loading="lazy"></div>
              <div class="ctg-body">
                <h6 class="ctg-name">{{$card['name']}}</h6>
                <span class="ctg-go"><i class="bi bi-arrow-up-right"></i></span>
              </div>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= FABRIC + PLATFORM ================= -->
<section class="split">
  <div class="row g-0">
    <div class="col-lg-6 fabric-block">
      <div class="fabric-img" data-aos="fade-right" style="background-image:url('{{asset('welcome/images/home/fabric.jpg')}}')"></div>
      <div class="fabric-content" data-aos="fade-up">
        <p class="eyebrow">Fabric Sourcing</p>
        <h3>More Than Garments.<br>We Source the Materials Behind Them.</h3>
        <p>From cotton to technical fabrics, we help you find the right materials for your product, quality and target cost.</p>
        <a href="#" class="nv-btn nv-btn-light">Explore Fabric Categories <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
    <div class="col-lg-6 platform-block" style="background-image:url('{{asset('welcome/images/home/city.jpg')}}')">
      <div class="platform-content" data-aos="fade-up" data-aos-delay="150">
        <p class="eyebrow">Our Sourcing Platform</p>
        <h3>Bangladesh Manufacturing.<br>European Perspective.</h3>
        <div class="platform-cols">
          <div>
            <div class="flag-title">
              <span class="flag"><svg viewBox="0 0 30 20"><rect width="30" height="20" fill="#006a4e"/><circle cx="13.5" cy="10" r="6" fill="#f42a41"/></svg></span>
              BANGLADESH
            </div>
            <ul class="check-list">
              <li>Woven / Knit / Denim</li>
              <li>Outerwear / Activewear</li>
              <li>Performance Products</li>
            </ul>
          </div>
          <div>
            <div class="flag-title">
              <span class="flag"><svg viewBox="0 0 30 20"><rect width="30" height="20" fill="#003399"/><g fill="#ffcc00">@for($i=0;$i<12;$i++)<circle cx="{{round(15+6*cos($i*M_PI/6),2)}}" cy="{{round(10+6*sin($i*M_PI/6),2)}}" r=".9"/>@endfor</g></svg></span>
              LITHUANIA / EUROPE
            </div>
            <ul class="check-list">
              <li>Buyer Development</li>
              <li>Market Understanding</li>
              <li>Business Networking</li>
              <li>EU Market Expansion</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= WHY CHOOSE ================= -->
<section class="why">
  <div class="container">
    <div class="row g-4 align-items-center">
      <div class="col-lg-4" data-aos="fade-right">
        <p class="eyebrow">Why Choose Nuvesta</p>
        <h2 class="section-title">The Sourcing Partner Who Understands the Product, the Costing and the Factory</h2>
        <p class="section-text">With 26+ years of apparel experience, we go beyond sourcing — we bring product knowledge, commercial understanding and hands-on execution to your sourcing journey.</p>
      </div>
      <div class="col-lg-8">
        <div data-aos="fade-up" class="why-box row g-0 row-cols-2 row-cols-md-3 row-cols-xl-5">
          <div class="col why-item" data-aos="zoom-in" data-aos-delay="0"><span class="why-icon"><i class="bi bi-calendar2-check"></i></span><h6>26+ Years<br>Industry Experience</h6><p>Merchandising, costing, development, production and more.</p></div>
          <div class="col why-item" data-aos="zoom-in" data-aos-delay="90"><span class="why-icon"><i class="bi bi-lightbulb"></i></span><h6>Deep Product<br>Knowledge</h6><p>Across woven, knit, denim and performance categories.</p></div>
          <div class="col why-item" data-aos="zoom-in" data-aos-delay="180"><span class="why-icon"><i class="bi bi-building"></i></span><h6>Strategic<br>Factory Network</h6><p>Trusted and capable manufacturing partners in Bangladesh.</p></div>
          <div class="col why-item" data-aos="zoom-in" data-aos-delay="270"><span class="why-icon"><i class="bi bi-tag"></i></span><h6>Commercial<br>Understanding</h6><p>From fabric to FOB — we make it work.</p></div>
          <div class="col why-item" data-aos="zoom-in" data-aos-delay="360"><span class="why-icon"><i class="bi bi-people"></i></span><h6>One Partner<br>End-to-End</h6><p>Single point of contact from inquiry to shipment.</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= ABOUT + CTA ================= -->
<section class="about-band">
  <div class="d-none d-xl-block"></div>
  <div class="about-text" data-aos="fade-up" data-aos-delay="100">
    <p class="eyebrow light">About Nuvesta</p>
    <h3>Built on Apparel Experience</h3>
    <p>Nuvesta Global LLC was created to combine decades of hands-on apparel experience with a modern, transparent approach to international sourcing.</p>
  </div>
  <div class="expertise" data-aos="fade-up" data-aos-delay="200">
    <h6>My core expertise includes:</h6>
    <ul class="check-list light">
      <li>Merchandising</li><li>Costing</li><li>Product Development</li>
      <li>Fabric &amp; Trim Sourcing</li><li>Production Follow-up</li><li>Procurement</li>
      <li>Vendor Management</li><li>Buyer Communication</li>
    </ul>
  </div>
  <div class="cta-block" style="background-image:url('{{asset('welcome/images/home/city.jpg')}}')">
    <div class="cta-content" data-aos="fade-left" data-aos-delay="250">
      <h3>Looking for a Reliable<br>Bangladesh Sourcing Partner?</h3>
      <p>Whether you are a brand, importer, retailer or buying office — we can help you source your next apparel program.</p>
      <a href="#" class="nv-btn nv-btn-light">Start Your Inquiry <i class="bi bi-arrow-right"></i></a>
    </div>
  </div>
</section>

<!-- ================= PARTNERS ================= -->
<section class="partners">
  <div class="container">
    <div class="row g-3 align-items-center">
      <div class="col-lg-4" data-aos="fade-up">
        <p class="eyebrow">Our Global Partners</p>
        <p class="small-text">We work with brands, retailers and importers across Europe, UK, USA and beyond.</p>
      </div>
      <div class="col-lg-8">
        <div class="partner-logos">
          <div class="partner-logo" data-aos="fade-up" data-aos-delay="0"><img src="{{asset('welcome/images/home/brand-hm.png')}}" alt="H&amp;M"></div>
          <div class="partner-logo" data-aos="fade-up" data-aos-delay="70"><img src="{{asset('welcome/images/home/brand-zara.png')}}" alt="Zara"></div>
          <div class="partner-logo" data-aos="fade-up" data-aos-delay="140"><img src="{{asset('welcome/images/home/brand-ms.png')}}" alt="M&amp;S"></div>
          <div class="partner-logo" data-aos="fade-up" data-aos-delay="210"><img src="{{asset('welcome/images/home/brand-ca.png')}}" alt="C&amp;A"></div>
          <div class="partner-logo" data-aos="fade-up" data-aos-delay="280"><img src="{{asset('welcome/images/home/brand-next.png')}}" alt="Next"></div>
          <div class="partner-more" data-aos="fade-up" data-aos-delay="350">and more...</div>
        </div>
      </div>
    </div>
  </div>
</section>

</div>
@endsection

@push('js')
<script>
  // product categories slider – 5 cards visible, slides smoothly when there are more
  $(function () {
    var $slider = $('.nv .ctg-slider');
    if (!$slider.length || typeof $.fn.slick !== 'function') return;
    var many = $slider.children().length > 5;
    $slider.slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      infinite: many,
      autoplay: many,
      autoplaySpeed: 2800,
      speed: 700,
      cssEase: 'cubic-bezier(.45,.05,.25,1)',
      pauseOnHover: true,
      swipeToSlide: true,
      arrows: many,
      prevArrow: $('.nv .ctg-prev'),
      nextArrow: $('.nv .ctg-next'),
      dots: false,
      responsive: [
        { breakpoint: 1200, settings: { slidesToShow: 4, arrows: true, infinite: true, autoplay: true } },
        { breakpoint: 992,  settings: { slidesToShow: 3, arrows: true, infinite: true, autoplay: true } },
        { breakpoint: 768,  settings: { slidesToShow: 2, arrows: true, infinite: true, autoplay: true } }
      ]
    });
  });
</script>
@endpush
