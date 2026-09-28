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
    .whoMain {
    padding: 90px 0;
    background: #f8f9fb;
    overflow: hidden;
}

.whoMain .container {
    position: relative;
}

.whoMain .row {
    align-items: center;
}

/* Left Content */
.whoLeft {
    padding: 45px;
    background: #ffffff;
    border-radius: 20px;
    position: relative;
    z-index: 2;
    box-shadow: 0 15px 45px rgba(0, 0, 0, 0.07);
}

.whoLeft h4 {
    margin: 0 0 20px;
    font-size: 38px;
    line-height: 1.2;
    font-weight: 700;
    color: #172033;
    position: relative;
    padding-bottom: 15px;
}

.whoLeft h4::after {
    content: "";
    width: 55px;
    height: 4px;
    background: #e6a23c;
    border-radius: 10px;
    position: absolute;
    left: 0;
    bottom: 0;
}

.whoLeft p {
    margin: 0;
    font-size: 16px;
    line-height: 1.9;
    color: #667085;
}

/* Right Side */
.whoRight {
    min-height: 350px;
    margin-left: -40px;
    border-radius: 20px;
    background:
        linear-gradient(
            135deg,
            rgba(23, 32, 51, 0.95),
            rgba(23, 32, 51, 0.75)
        ),
        url("../images/home/brand-hm.png") center/cover no-repeat;
    position: relative;
    overflow: hidden;
}

/* Decorative Circle */
.whoRight::before {
    content: "";
    position: absolute;
    width: 220px;
    height: 220px;
    border: 35px solid rgba(230, 162, 60, 0.15);
    border-radius: 50%;
    top: -80px;
    right: -70px;
}

/* Decorative Circle */
.whoRight::after {
    content: "";
    position: absolute;
    width: 120px;
    height: 120px;
    background: rgba(230, 162, 60, 0.12);
    border-radius: 50%;
    bottom: -40px;
    left: -30px;
}

/* Responsive */
@media (max-width: 991px) {
    .whoMain {
        padding: 60px 0;
    }

    .whoLeft {
        padding: 35px;
    }

    .whoLeft h4 {
        font-size: 32px;
    }

    .whoRight {
        margin-left: 0;
        margin-top: 30px;
        min-height: 280px;
    }
}

@media (max-width: 575px) {
    .whoMain {
        padding: 45px 0;
    }

    .whoLeft {
        padding: 25px;
        border-radius: 15px;
    }

    .whoLeft h4 {
        font-size: 28px;
    }

    .whoLeft p {
        font-size: 15px;
        line-height: 1.75;
    }

    .whoRight {
        min-height: 220px;
        border-radius: 15px;
    }
}

</style>


@endsection
@section('contents')
<div class="nv nv-home">

<!--Hero-->
@include(general()->theme.'.layouts.slider')


<div class="whoMain">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="whoLeft">
                    <h4>
                       Who We Are
                    </h4>
                    <p>

Nuvesta Global is a Lithuania-registered apparel sourcing and supply company connecting buyers across Europe, the UK and the USA with trusted manufacturing and sourcing partners in Bangladesh and selected Asian markets.

We coordinate product development, fabric and trim sourcing, costing, sampling, supplier selection, production follow-up, quality assurance and shipment—giving international buyers a structured sourcing partner from inquiry to delivery.

<br>
<br>
<b>
    European presence. Bangladesh manufacturing access. International sourcing support.
</b>
                    </p>
                </div>                
            </div>
            <div class="col-md-6">
                <div class="whoRight">
                    <img src="{{asset('welcome/images/home/WhatsApp Image 2026-09-27 at 3.00.36 PM.jpeg')}}" alt="H&amp;M">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ================= FEATURE STRIP ================= -->
<section class="feature-strip">
  <div class="container">
    <div class="row g-0 row-cols-2 row-cols-md-3 row-cols-lg-6">
      <div class="col feature-item" data-aos="fade-up" data-aos-delay="0"><i class="bi bi-shield-check"></i><p>Reliable<br>Factory Network</p></div>
      <div class="col feature-item" data-aos="fade-up" data-aos-delay="80"><i class="bi bi-clipboard2-data"></i><p>Quality<br>Focused</p></div>
      <div class="col feature-item" data-aos="fade-up" data-aos-delay="160"><i class="bi bi-gear"></i><p>Product<br>Expertise</p></div>
      <div class="col feature-item" data-aos="fade-up" data-aos-delay="240"><i class="bi bi-clock-history"></i><p>On-Time<br>Delivery</p></div>
      <div class="col feature-item" data-aos="fade-up" data-aos-delay="320"><i class="fa-regular fa-handshake"></i><p>Transparent<br>Communication</p></div>
      <div class="col feature-item" data-aos="fade-up" data-aos-delay="400"><i class="fa-solid fa-leaf"></i><p>Sustainable<br>Future</p></div>
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
        <a href="#" class="nv-btn nv-btn-outline">Learn More About Our Services <i class="bi bi-arrow-right"></i></a>
      </div>
      <div class="col-lg-8 col-xl-9">
        <div class="row g-0 row-cols-2 row-cols-md-3 row-cols-xl-6 steps">
          <div class="col step" data-aos="fade-up" data-aos-delay="0"><span class="step-num">01</span><i class="bi bi-lightbulb"></i><h6>Product<br>Development</h6><p>Tech packs, sampling and commercial development.</p></div>
          <div class="col step" data-aos="fade-up" data-aos-delay="90"><span class="step-num">02</span><i class="bi bi-layers"></i><h6>Fabric &amp; Trim<br>Sourcing</h6><p>Finding the right materials, mills and suppliers.</p></div>
          <div class="col step" data-aos="fade-up" data-aos-delay="180"><span class="step-num">03</span><i class="bi bi-buildings"></i><h6>Factory<br>Matching</h6><p>Partners based on quality, capacity and requirements.</p></div>
          <div class="col step" data-aos="fade-up" data-aos-delay="270"><span class="step-num">04</span><i class="bi bi-calculator"></i><h6>Costing &amp;<br>Negotiation</h6><p>Detailed FOB costing and commercial negotiation.</p></div>
          <div class="col step" data-aos="fade-up" data-aos-delay="360"><span class="step-num">05</span><i class="bi bi-scissors"></i><h6>Production<br>Management</h6><p>T&amp;A follow-up, monitoring and buyer communication.</p></div>
          <div class="col step" data-aos="fade-up" data-aos-delay="450"><span class="step-num">06</span><i class="bi bi-shield-check"></i><h6>Quality &amp;<br>Shipment</h6><p>Inspection, packing and shipment readiness.</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= PRODUCTS ================= -->
<section class="products">
  <div class="container">
    <div class="row g-4 align-items-center">
      <div class="col-lg-3" data-aos="fade-right">
        <p class="eyebrow">Our Products</p>
        <h2 class="section-title">Our Product Expertise</h2>
        <p class="section-text">Wide range of apparel categories with a focus on quality, trends and commercial value.</p>
        <a href="{{($productsPage = pageTemplate('Latest Products')) ? route('pageView',$productsPage->slug) : url('products-all')}}" class="nv-btn nv-btn-outline">View All Product Categories <i class="bi bi-arrow-right"></i></a>
      </div>
      <div class="col-lg-9">
        @php
          $ctgCount = isset($homeCategories) ? $homeCategories->count() : 0;
          $xlCols   = max(3, min(6, $ctgCount));
        @endphp
        @if($ctgCount)
        <div class="row g-2 row-cols-2 row-cols-md-3 row-cols-xl-{{$xlCols}} {{$ctgCount < 6 ? 'ctg-few' : ''}}">
          @foreach($homeCategories as $ctg)
          <div class="col" data-aos="fade-up" data-aos-delay="{{$loop->index*80}}">
            <a href="{{route('productCategory',$ctg->slug?:'no-title')}}" class="product-card">
              @php
                // no category/product image -> use a matching home photo if we have one
                $fallback = collect(['outerwear','knitwear','shirts','denim','activewear','pants'])
                    ->first(fn($k) => str_contains(Str::lower($ctg->slug.' '.$ctg->name), rtrim($k,'s')) || str_contains(Str::lower($ctg->name), Str::substr($k,0,4)));
                $imgSrc = $ctg->cardImage ?: ($fallback ? 'welcome/images/home/p-'.$fallback.'.jpg' : 'medies/noimage.jpg');
              @endphp
              <div class="ph"><img src="{{asset($imgSrc)}}" alt="{{$ctg->name}}" loading="lazy"></div>
              <div class="product-info">
                <h6>{{$ctg->name}}</h6>
                <p>
                  @if($ctg->subNames->count())
                    {{$ctg->subNames->implode(' | ')}}
                  @else
                    {{$ctg->productsTotal ? $ctg->productsTotal.' '.Str::plural('product',$ctg->productsTotal) : 'Explore range'}}
                  @endif
                </p>
              </div>
            </a>
          </div>
          @endforeach
        </div>
        @else
        <div class="row g-2 row-cols-2 row-cols-md-3 row-cols-xl-6">
          @foreach([
            ['pants','Pants &amp; Shorts','Chinos | Cargo | Casual | Denim'],
            ['outerwear','Outerwear','Jackets | Puffer | Technical | Workwear'],
            ['shirts','Shirts','Woven | Flannel | Oxford | Poplin'],
            ['knitwear','Knitwear','T-Shirts | Polo | Sweatshirts | Hoodies'],
            ['activewear','Activewear','Sportswear | Performance | Underwear'],
            ['denim','Denim','Jeans | Shorts | Jackets | Washed'],
          ] as $p)
          <div class="col" data-aos="fade-up" data-aos-delay="{{$loop->index*80}}">
            <a href="#" class="product-card">
              <div class="ph"><img src="{{asset('welcome/images/home/p-'.$p[0].'.jpg')}}" alt="{{strip_tags(html_entity_decode($p[1]))}}" loading="lazy"></div>
              <div class="product-info"><h6>{!!$p[1]!!}</h6><p>{{$p[2]}}</p></div>
            </a>
          </div>
          @endforeach
        </div>
        @endif
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
          <div class="col why-item" data-aos="zoom-in" data-aos-delay="0"><i class="bi bi-calendar2-check"></i><h6>26+ Years<br>Industry Experience</h6><p>Merchandising, costing, development, production and more.</p></div>
          <div class="col why-item" data-aos="zoom-in" data-aos-delay="90"><i class="bi bi-lightbulb"></i><h6>Deep Product<br>Knowledge</h6><p>Across woven, knit, denim and performance categories.</p></div>
          <div class="col why-item" data-aos="zoom-in" data-aos-delay="180"><i class="bi bi-building"></i><h6>Strategic<br>Factory Network</h6><p>Trusted and capable manufacturing partners in Bangladesh.</p></div>
          <div class="col why-item" data-aos="zoom-in" data-aos-delay="270"><i class="bi bi-tag"></i><h6>Commercial<br>Understanding</h6><p>From fabric to FOB — we make it work.</p></div>
          <div class="col why-item" data-aos="zoom-in" data-aos-delay="360"><i class="bi bi-people"></i><h6>One Partner<br>End-to-End</h6><p>Single point of contact from inquiry to shipment.</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= ABOUT + CTA ================= -->
<section class="about-band">
  <div class="d-none d-xl-block"></div>
  <div class="about-photo" data-aos="fade-up" role="img" aria-label="MD Ariful Islam, founder of Nuvesta Global" style="background-image:url('{{asset('welcome/images/home/founder.jpg')}}')"></div>
  <div class="about-text" data-aos="fade-up" data-aos-delay="100">
    <p class="eyebrow light">About Nuvesta</p>
    <h3>Built on 26+ Years of<br>Apparel Experience</h3>
    <p>Nuvesta Global LLC was created to combine decades of hands-on apparel experience with a modern, transparent approach to international sourcing.</p>
    <a href="{{($aboutPage = pageTemplate('About Us')) ? route('pageView',$aboutPage->slug) : url('about-us')}}" class="nv-btn nv-btn-light">Meet MD Ariful Islam <i class="bi bi-arrow-right"></i></a>
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
