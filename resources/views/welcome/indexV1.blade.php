@extends(welcomeTheme().'layouts.app') @section('title')
<title>{{websiteTitle()}}</title>
@endsection @section('SEO')
<meta name="title" property="og:title" content="{{general()->meta_title}}" />
<meta name="description" property="og:description" content="{!!general()->meta_description!!}" />
<meta name="keyword" property="og:keyword" content="{{general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset(general()->logo())}}" />
<meta name="url" property="og:url" content="{{route('index')}}" />
<link rel="canonical" href="{{route('index')}}" />
@endsection 
@push('css') 


<style>
.video-banner-section{
    position:relative;
    width:100%;
    overflow:hidden;
}

.banner-image{
    width:100%;
    display:block;
}

.bg-video{
    width:100%;
    display:none;
}

.video-play-btn{
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    width:80px;
    height:80px;
    border-radius:50%;
    background:#fff;
    display:flex;
    justify-content:center;
    align-items:center;
    cursor:pointer;
    z-index:10;
    font-size:28px;
}
</style>
@endpush 
@section('contents')


   <!--Slider Part Include Start-->
   @include(general()->theme.'.layouts.slider')





<!-- ==========================================================================
         STATS SECTION
         ========================================================================== -->
    <section class="stats-section">
        <div class="container d-flex justify-content-center">
            <div class="stats-card-wrap">
                <!-- Stat Item 1 -->
                <div class="stat-item" data-aos="fade-up" data-aos-delay="0">
                    <div class="stat-icon-wrap">
                        <img src="{{asset('welcome/images/Nuvesta/Manufacturing  partner.png')}}" alt="Manufacturing Partners Icon">
                    </div>
                    <div class="stat-info">
                        <h3>Trusted </h3>
                        <p> Manufacturing<br>Partner</p>
                    </div>
                </div>
                <!-- Stat Item 2 -->
                <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-icon-wrap">
                        <img src="{{asset('welcome/images/Nuvesta/products categories.png')}}" alt="Product Categories Icon">
                    </div>
                    <div class="stat-info">
                        <h3>20+</h3>
                        <p>Product<br>Categories</p>
                    </div>
                </div>
                <!-- Stat Item 3 -->
                <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-icon-wrap">
                        <img src="{{asset('welcome/images/Nuvesta/global.png')}}" alt="Global Export Network Icon">
                    </div>
                    <div class="stat-info">
                        <h3>Global</h3>
                        <p>Export<br>Network</p>
                    </div>
                </div>
                <!-- Stat Item 4 -->
                <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-icon-wrap">
                        <img src="{{asset('welcome/images/Nuvesta/End to End.png')}}" alt="End to End Production Support Icon">
                    </div>
                    <div class="stat-info">
                        <h3>End to End</h3>
                        <p>Production<br>Support</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         ABOUT NUVESTA SECTION
         ========================================================================== -->
    <section class="about-nuvesta-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left: Circular Image Layout -->
                <div class="col-lg-6 mb-0" data-aos="fade-right">
                    <div class="about-image-layout">
                        <div class="about-img-circle-lg">
                            <img src="{{asset('welcome/images/Nuvesta/about1.webp')}}" alt="Apparel Clothes Rack Sourcing">
                        </div>
                        <div class="about-img-circle-sm">
                            <img src="{{asset('welcome/images/Nuvesta/about2.webp')}}" alt="Bangladesh Clothing Production">
                        </div>
                    </div>
                </div>
                <!-- Right: Content -->
                <div class="col-lg-6 ps-lg-5" data-aos="fade-left">
                    <span class="about-subtitle">About Nuvesta</span>
                    <h2 class="about-heading">Global Sourcing.<br>Local Expertise.</h2>
                    <p class="about-desc">Nuvesta Global LLC helps international brands source high-quality apparel from
                        Bangladesh through a transparent and reliable supply chain.</p>
                    <p class="about-desc">From factory selection and product development to quality assurance and
                        shipment coordination, we manage every step of the sourcing journey so you can focus on growing
                        your brand.</p>

                    <h4 class="about-key-stats-title">Key Stats</h4>
                    <ul class="about-key-stats-list">
                        <li>100+ Manufacturing Partners</li>
                        <li>20+ Product Categories</li>
                        <li>Global Export Network</li>
                        <li>End-to-End Production Support</li>
                    </ul>
                    <a href="#" class="about-read-more-btn" id="about-read-more-btn">READ MORE</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========================================================================
         SERVICES SECTION (WHAT WE DO)
         ========================================================================== -->
    <section class="svc-section">
        <div class="container">
            <!-- Section Header -->
            <div class="text-center svc-header" data-aos="fade-up">
                <span class="svc-subtitle">What We Do</span>
                <h2 class="svc-title">Our Services</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <p class="svc-desc">From factory sourcing and product development to quality control and global
                            logistics, we manage every step of your apparel supply chain. Delivering quality,
                            transparency, and on-time results for brands worldwide.</p>
                    </div>
                </div>
            </div>

            <!-- Services Cards Row -->
            <div class="svc-cards-wrap">
                <!-- Service 1 -->
                <div class="svc-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="svc-icon">
                        <img src="{{asset('welcome/images/Nuvesta/factory  sourcing.png')}}" alt="Factory Sourcing Icon">
                    </div>
                    <h4 class="svc-card-title">Factory Sourcing</h4>
                    <p class="svc-card-desc">Access a network of audited and compliant garment manufacturers.</p>
                </div>
                <!-- Service 2 -->
                <div class="svc-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="svc-icon">
                        <img src="{{asset('welcome/images/Nuvesta/products  development .png')}}" alt="Product Development Icon">
                    </div>
                    <h4 class="svc-card-title">Product Development</h4>
                    <p class="svc-card-desc">Transform concepts into production-ready samples.</p>
                </div>
                <!-- Service 3 -->
                <div class="svc-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="svc-icon">
                        <img src="{{asset('welcome/images/Nuvesta/qulity.png')}}" alt="Quality Assurance Icon">
                    </div>
                    <h4 class="svc-card-title">Quality Assurance</h4>
                    <p class="svc-card-desc">Multi-stage inspections to ensure international quality standards.</p>
                </div>
                <!-- Service 4 -->
                <div class="svc-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="svc-icon">
                        <img src="{{asset('welcome/images/Nuvesta/Merchandising Support.png')}}" alt="Merchandising Support Icon">
                    </div>
                    <h4 class="svc-card-title">Merchandising Support</h4>
                    <p class="svc-card-desc">Dedicated coordination between buyer and factory.</p>
                </div>
                <!-- Service 5 -->
                <div class="svc-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="svc-icon">
                        <img src="{{asset('welcome/images/Nuvesta/logitics .png')}}" alt="Logistics Management Icon">
                    </div>
                    <h4 class="svc-card-title">Logistics Management</h4>
                    <p class="svc-card-desc">Smooth shipment planning and export coordination.</p>
                </div>
                <!-- Service 6 -->
                <div class="svc-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="svc-icon">
                        <img src="{{asset('welcome/images/Nuvesta/cost  optimazition.png')}}" alt="Cost Optimization Icon">
                    </div>
                    <h4 class="svc-card-title">Cost Optimization</h4>
                    <p class="svc-card-desc">Competitive pricing without compromising quality.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         WHY GLOBAL BUYERS TRUST US
         ========================================================================== -->
    <section class="section-padding why-trust-section">
        <img src="{{asset('welcome/images/Nuvesta/background.webp')}}" class="wt-section-bg" alt="Background">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left: Big Graphic Circle & Title -->
                <div class="col-lg-5 why-trust-left" data-aos="fade-right">
                    <div class="why-trust-img-wrap">
                        <img src="{{asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-16.webp')}}"
                            alt="Why Buyers Trust Nuvesta Global">
                    </div>
                    <h2 class="why-trust-title">
                        Why<br>
                        <span class="gomenew">Global Buyers</span>
                        Trust Us
                    </h2>
                </div>

                <!-- Right: Numbered Item Stack -->
                <div class="col-lg-7 trust-list-col ps-lg-5">
                    <!-- Item 1 -->
                    <div class="trust-item-bar" data-aos="fade-left" data-aos-delay="0">
                        <img src="{{asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-17.png')}}" class="trust-num-img" alt="01">
                        <img src="{{asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-23.png')}}" class="trust-text-img"
                            alt="VERIFIED FACTORIES">
                    </div>
                    <!-- Item 2 -->
                    <div class="trust-item-bar" data-aos="fade-left" data-aos-delay="100">
                        <img src="{{asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-18.png')}}" class="trust-num-img" alt="02">
                        <img src="{{asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-24.png')}}" class="trust-text-img"
                            alt="QUALITY FIRST">
                    </div>
                    <!-- Item 3 -->
                    <div class="trust-item-bar" data-aos="fade-left" data-aos-delay="200">
                        <img src="{{asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-19.png')}}" class="trust-num-img" alt="03">
                        <img src="{{asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-25.png')}}" class="trust-text-img"
                            alt="RELIABLE">
                    </div>
                    <!-- Item 4 -->
                    <div class="trust-item-bar" data-aos="fade-left" data-aos-delay="300">
                        <img src="{{asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-20.png')}}" class="trust-num-img" alt="04">
                        <img src="{{asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-26.png')}}" class="trust-text-img"
                            alt="ON-TIME DELIVERY">
                    </div>
                    <!-- Item 5 -->
                    <div class="trust-item-bar" data-aos="fade-left" data-aos-delay="400">
                        <img src="{{asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-21.png')}}" class="trust-num-img" alt="05">
                        <img src="{{asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-27.png')}}" class="trust-text-img"
                            alt="DEDICATED TEAM">
                    </div>
                    <!-- Item 6 -->
                    <div class="trust-item-bar" data-aos="fade-left" data-aos-delay="500">
                        <img src="{{asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-22.png')}}" class="trust-num-img" alt="06">
                        <img src="{{asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-28.png')}}" class="trust-text-img"
                            alt="BANGLADESH EXPERTISE">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         FEATURE PRODUCTS (Our Product Line)
         ========================================================================== -->
    <section class="prod-line-section">
        <div class="container">
            <div class="prod-line-header" data-aos="fade-up">
                <span class="prod-line-subtitle">Feature Products</span>
                <h2 class="prod-line-title">Our Product Line</h2>
            </div>

            <div class="prod-line-slider-wrap" data-aos="fade-up">
                <div class="prod-line-slider">
                    <!-- Slide 1 -->
                    
                       @foreach($category as $categori)
                    
                    <a href="{{route('productCategory',$categori->slug?:'no-title')}}" class="prod-slide-wrap">
                        <div class="prod-slide-item">
                            <div class="prod-slide-text">
                                <h4 class="prod-slide-name">{{$categori->name}}</h4>
                                <p class="prod-slide-desc">{!! $categori->description !!}</p>
                                 <span>View All</span>
                            </div>
                            <div class="prod-slide-img">
                                <img src="{{asset($categori->image())}}" alt="{{$categori->name}}">
                            </div>
                           
                        </div>
                    </a>
                    
                    @endforeach
                    
                    
                    
                    <!-- Slide 2 -->
                    {{--<div class="prod-slide-wrap">
                        <div class="prod-slide-item">
                            <div class="prod-slide-text">
                                <h4 class="prod-slide-name">WOMEN KNIT</h4>
                                <p class="prod-slide-desc">We take pride in delivering reliable<br>sourcing quality
                                    management.</p>
                            </div>
                            <div class="prod-slide-img">
                                <img src="{{asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-30.webp')}}" alt="Women Knit">
                            </div>
                        </div>
                    </div>--}}
                    <!-- Slide 3 -->
                    {{--<div class="prod-slide-wrap">
                        <div class="prod-slide-item">
                            <div class="prod-slide-text">
                                <h4 class="prod-slide-name">WOMEN KNIT</h4>
                                <p class="prod-slide-desc">We take pride in delivering reliable<br>sourcing quality
                                    management.</p>
                            </div>
                            <div class="prod-slide-img">
                                <img src="{{asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-31.webp')}}" alt="Women Knit">
                            </div>
                        </div>
                    </div>--}}
                    <!-- Slide 4 -->
                    {{--<div class="prod-slide-wrap">
                        <div class="prod-slide-item">
                            <div class="prod-slide-text">
                                <h4 class="prod-slide-name">WOMEN KNIT</h4>
                                <p class="prod-slide-desc">We take pride in delivering reliable<br>sourcing quality
                                    management.</p>
                            </div>
                            <div class="prod-slide-img">
                                <img src="{{asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-29.webp')}}" alt="Women Knit">
                            </div>
                        </div>
                    </div>--}}
                    
                </div>
            </div>
        </div>
    </section>



    <!-- ==========================================================================
         VIDEO PLAY SECTION
         ========================================================================== -->
    {{--<section class="video-banner-section"
        style="background-image: url('{{asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-32.webp')}}');">

        <div class="video-play-btn" id="video-play-btn" data-aos="zoom-in">
            <i class="fa-solid fa-play"></i>
        </div>
    </section>--}}
    
    
<section class="video-banner-section">

    <!-- Banner Image -->
    <img src="{{ asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-32.webp') }}"
         class="banner-image"
         alt="Banner">

    <!-- Video -->
    <video class="bg-video" playsinline>
        <source src="{{ asset('welcome/images/Nuvesta/vdeo.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Play Button -->
    <div class="video-play-btn" id="video-play-btn">
        <i class="fa-solid fa-play"></i>
    </div>

</section>



    <!-- ==========================================================================
         CERTIFICATIONS & EXPORT DESTINATIONS
         ========================================================================== -->
    <section class="cert-dest-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Certifications -->
                <div class="col-lg-5 text-center" data-aos="fade-right">
                    <h2 class="cd-title">Certifications</h2>
                    <div class="cert-logos">
                        <div class="cert-logo-row-1">
                            <img src="{{asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-33.png')}}" alt="BSCI" class="cert-img bsci">
                            <img src="{{asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-34.png')}}" alt="Sedex"
                                class="cert-img sedex">
                            <img src="{{asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-35.png')}}" alt="WRAP" class="cert-img wrap">
                        </div>
                        <div class="cert-logo-row-2">
                            <img src="{{asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-36.png')}}" alt="OEKO-TEX"
                                class="cert-img oeko">
                            <img src="{{asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-37.png')}}" alt="ISO" class="cert-img iso">
                        </div>
                    </div>
                </div>

                <!-- Spacer -->
                <div class="col-lg-1"></div>

                <!-- Export Destinations -->
                <div class="col-lg-6 text-center mt-5 mt-lg-0" data-aos="fade-left">
                    <h2 class="cd-title">Our Export Destinations</h2>
                    <div class="map-container">
                        <img src="{{asset('welcome/images/Nuvesta/worldmap.webp')}}" alt="World Map" class="world-map-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========================================================================
         TESTIMONIALS SECTION
         ========================================================================== -->
    <section class="section-padding testimonials-section">
        <div class="container">
            <!-- Heading -->
            <div class="text-center mb-3" data-aos="fade-up">
                <span class="section-subtitle">Testimonials</span>
                <h2 class="section-title">What Our Clients Say</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <p class="text-muted">We take pride in delivering reliable sourcing, quality management
                            solutions for our international clients. Here's what some of our foreign partners have to
                            say about working with Nuvesta Global LLC.</p>
                    </div>
                </div>
            </div>

            <!-- Testimonials Slider Wrapper -->
            <div class="row justify-content-center" data-aos="fade-up">
                <div class="col-lg-10 position-relative testimonials-slider-container">
                    <div class="testimonials-slider">
                        <!-- Slide 1 -->
                        <div class="testimonial-slide">
                            <div class="testimonial-card-wrapper">
                                <div class="testimonial-card-top-stripes"></div>
                                <div class="testimonial-card-bottom-gradient">
                                    <div class="testimonial-avatar-container">
                                        <img src="{{asset('welcome/images/Nuvesta/mati.webp')}}" alt="Harry Spencer"
                                            class="testimonial-avatar-img">
                                    </div>
                                    <p class="testimonial-quote-text">"The origins of the first constellations date back
                                        to prehistoric times. They varied in size or shape, others became popular and
                                        then were forgotten, and some were limited to a single culture."</p>
                                    <a href="#" class="testimonial-author-pill-btn">HARRY SPENCER</a>
                                    <p class="testimonial-author-title">Designation</p>
                                    <p class="testimonial-author-sub">Company Name</p>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="testimonial-slide">
                            <div class="testimonial-card-wrapper">
                                <div class="testimonial-card-top-stripes"></div>
                                <div class="testimonial-card-bottom-gradient">
                                    <div class="testimonial-avatar-container">
                                        <img src="{{asset('welcome/images/Nuvesta/2.webp')}}" alt="Harry Spencer"
                                            class="testimonial-avatar-img">
                                    </div>
                                    <p class="testimonial-quote-text">"The origins of the first constellations date back
                                        to prehistoric times. They varied in size or shape, others became popular and
                                        then were forgotten, and some were limited to a single culture."</p>
                                    <a href="#" class="testimonial-author-pill-btn">HARRY SPENCER</a>
                                    <p class="testimonial-author-title">Designation</p>
                                    <p class="testimonial-author-sub">Company Name</p>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 3 -->
                        <div class="testimonial-slide">
                            <div class="testimonial-card-wrapper">
                                <div class="testimonial-card-top-stripes"></div>
                                <div class="testimonial-card-bottom-gradient">
                                    <div class="testimonial-avatar-container">
                                        <img src="{{asset('welcome/images/Nuvesta/3.webp')}}" alt="Harry Spencer"
                                            class="testimonial-avatar-img">
                                    </div>
                                    <p class="testimonial-quote-text">"The origins of the first constellations date back
                                        to prehistoric times. They varied in size or shape, others became popular and
                                        then were forgotten, and some were limited to a single culture."</p>
                                    <a href="#" class="testimonial-author-pill-btn">HARRY SPENCER</a>
                                    <p class="testimonial-author-title">Designation</p>
                                    <p class="testimonial-author-sub">Company Name</p>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 4 -->
                        <div class="testimonial-slide">
                            <div class="testimonial-card-wrapper">
                                <div class="testimonial-card-top-stripes"></div>
                                <div class="testimonial-card-bottom-gradient">
                                    <div class="testimonial-avatar-container">
                                        <img src="{{asset('welcome/images/Nuvesta/4.webp')}}" alt="Harry Spencer"
                                            class="testimonial-avatar-img">
                                    </div>
                                    <p class="testimonial-quote-text">"The origins of the first constellations date back
                                        to prehistoric times. They varied in size or shape, others became popular and
                                        then were forgotten, and some were limited to a single culture."</p>
                                    <a href="#" class="testimonial-author-pill-btn">HARRY SPENCER</a>
                                    <p class="testimonial-author-title">Designation</p>
                                    <p class="testimonial-author-sub">Company Name</p>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 5 -->
                        <div class="testimonial-slide">
                            <div class="testimonial-card-wrapper">
                                <div class="testimonial-card-top-stripes"></div>
                                <div class="testimonial-card-bottom-gradient">
                                    <div class="testimonial-avatar-container">
                                        <img src="{{asset('welcome/images/Nuvesta/5.webp')}}" alt="Harry Spencer"
                                            class="testimonial-avatar-img">
                                    </div>
                                    <p class="testimonial-quote-text">"The origins of the first constellations date back
                                        to prehistoric times. They varied in size or shape, others became popular and
                                        then were forgotten, and some were limited to a single culture."</p>
                                    <a href="#" class="testimonial-author-pill-btn">HARRY SPENCER</a>
                                    <p class="testimonial-author-title">Designation</p>
                                    <p class="testimonial-author-sub">Company Name</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         TRUSTED BY THE BEST BRANDS
         ========================================================================== -->
    <section class="brands-section">
        <div class="container" data-aos="fade-up">
            <h3 class="text-center mb-5 brands-section-title">Trusted By The Best Brands</h3>
            <!-- Brands Slider Wrapper -->
            <div class="row justify-content-center">
                <div class="col-lg-10 position-relative brands-slider-container">
                    <div class="brands-slider">
                        <!-- Slide 1: Dior -->
                        <div class="brand-slide">
                            <div class="brand-logo-circle">
                                <img src="{{asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-40.png')}}" alt="Dior Brand Logo"
                                    class="brand-logo-img">
                            </div>
                        </div>
                        <!-- Slide 2: Chanel -->
                        <div class="brand-slide">
                            <div class="brand-logo-circle">
                                <img src="{{asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-41.png')}}" alt="Chanel Brand Logo"
                                    class="brand-logo-img">
                            </div>
                        </div>
                        <!-- Slide 3: Zara -->
                        <div class="brand-slide">
                            <div class="brand-logo-circle">
                                <img src="{{asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-39.png')}}" alt="Zara Brand Logo"
                                    class="brand-logo-img">
                            </div>
                        </div>
                        <!-- Slide 4: Louis Vuitton -->
                        <div class="brand-slide">
                            <div class="brand-logo-circle">
                                <img src="{{asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-42.png')}}"
                                    alt="Louis Vuitton Brand Logo" class="brand-logo-img">
                            </div>
                        </div>
                        <!-- Slide 5: CK -->
                        <div class="brand-slide">
                            <div class="brand-logo-circle">
                                <img src="{{asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-43.png')}}" alt="CK Brand Logo"
                                    class="brand-logo-img">
                            </div>
                        </div>
                        <!-- Slide 6: Dior (Duplicate for smooth centerMode looping) -->
                        <div class="brand-slide">
                            <div class="brand-logo-circle">
                                <img src="{{asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-40.png')}}" alt="Dior Brand Logo"
                                    class="brand-logo-img">
                            </div>
                        </div>
                        <!-- Slide 7: Chanel (Duplicate for smooth centerMode looping) -->
                        <div class="brand-slide">
                            <div class="brand-logo-circle">
                                <img src="{{asset('welcome/images/Nuvesta/Nuvesta Website Mockup 2-41.png')}}" alt="Chanel Brand Logo"
                                    class="brand-logo-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         CALL TO ACTION SECTION
         ========================================================================== -->
    <section class="cta-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="cta-card" data-aos="zoom-in">
                        <div class="cta-content-wrap">
                            <h3 class="cta-title">The Style You Need, The<br>Quality You Trust</h3>
                            <a href="#" class="cta-btn" id="cta-book-consultation">Book Your Consultation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





@endsection 
@push('js') 


<script>
    $(document).ready(function () {

    $('#video-play-btn').on('click', function () {

        $('.banner-image').fadeOut(300, function () {

            $('.bg-video').fadeIn(300);

            let video = $('.bg-video').get(0);

            video.play();

        });

        $(this).fadeOut();
    });

});
</script>


<script>
    (function ($) {

    $.fn.lazyObserver = function (callback) {

        let observer = new IntersectionObserver(function (entries, obs) {

            entries.forEach(entry => {

                if (entry.isIntersecting) {

                    let el = $(entry.target);
                    callback.call(entry.target, el);

                    obs.unobserve(entry.target);
                }

            });

        }, {
            threshold: 0.2
        });

        return this.each(function () {
            observer.observe(this);
        });

    };

})(jQuery);
</script>

<script>
  $(".homeCtg").lazyObserver(function (wrapper) {

    wrapper.find(".skeleton-category").fadeOut(200);
    wrapper.find(".real-category")
        .removeClass("d-none")
        .hide()
        .fadeIn(300);

});
</script>



<script>
(function ($) {

    $.fn.lazyObserver = function (callback) {

        let observer = new IntersectionObserver((entries, obs) => {

            entries.forEach(entry => {

                if (entry.isIntersecting) {

                    callback.call(entry.target, entry);

                    // STOP observing properly
                    obs.unobserve(entry.target);
                }

            });

        }, {
            threshold: 0.2
        });

        return this.each(function () {
            observer.observe(this);
        });

    };

})(jQuery);


</script>


<script>
    $(".product-wrapper").lazyObserver(function () {

    let wrapper = $(this);

    wrapper.find(".skeleton-container").fadeOut(200);
    wrapper.find(".real-products").removeClass("d-none").hide().fadeIn(300);

});
</script>

<script type="text/javascript">
    $(document).ready(function () {
        
        
        
        // $('.hero-sectionClick').on('click', function(e){
        //     e.preventDefault(); // prevent default behavior
    
        //     // scroll target
        //     var target = $('#hero-section'); // your section class
        //     if(target.length){
        //         // calculate offset top minus 140px
        //         var scrollTo = target.offset().top - 240;
    
        //         // smooth scroll
        //         $('html, body').animate({
        //             scrollTop: scrollTo
        //         }, 100); // 800ms animation
        //     }
        // });
        

        if ($('#OfferModal').length > 0) {
    
            let today = new Date().toISOString().split('T')[0]; // YYYY-MM-DD
            let lastShownDate = localStorage.getItem('offerModalShownDate');
    
            if (lastShownDate !== today) {
    
                setTimeout(function () {
                    $('#OfferModal').modal('show');
                    localStorage.setItem('offerModalShownDate', today);
                }, 1000);
    
            }
        }
        
        
        const second = 1000,
              minute = second * 60,
              hour = minute * 60,
              day = hour * 24;

        // Get the date from the data attribute (d/m/Y format from Carbon)
        let birthday = $('.mainOfferq').data('date');

        // Split the date (d/m/Y) into day, month, year
        let dateParts = birthday.split('/');
        let dayOfMonth = dateParts[0];
        let month = dateParts[1] - 1; // Month is 0-based in JavaScript (0 = January)
        let year = dateParts[2];

        // Create a JavaScript Date object in MM/DD/YYYY format
        let formattedBirthday = new Date(year, month, dayOfMonth).getTime();

        // Get today's date in MM/DD/YYYY format
        let today = new Date(),
            dd = String(today.getDate()).padStart(2, '0'),
            mm = String(today.getMonth() + 1).padStart(2, '0'),
            yyyy = today.getFullYear();

        today = mm + '/' + dd + '/' + yyyy;

        // If today's date is greater than the birthday, set the birthday to the next year
        if (today > birthday) {
            formattedBirthday = new Date(yyyy + 1, month, dayOfMonth).getTime();
        }

        // Countdown target date
        const countDown = formattedBirthday;

        // Update the countdown every second
        const x = setInterval(function () {
            const now = new Date().getTime(),
                  distance = countDown - now;

            $('#days').text(Math.floor(distance / day));
            $('#hours').text(Math.floor((distance % day) / hour));
            $('#minutes').text(Math.floor((distance % hour) / minute));
            $('#seconds').text(Math.floor((distance % minute) / second));

            // If the countdown reaches 0, display the message and hide countdown
            if (distance < 0) {
                $('#headline').text("Today is the Day!");
                $('#countdown').hide();
                $('#content').show();
                clearInterval(x);
            }
        }, 1000);
    });
</script>

@endpush