 <?php $__env->startSection('title'); ?>
<title><?php echo e($page->seo_title?:websiteTitle($page->name)); ?></title>
<?php $__env->stopSection(); ?> <?php $__env->startSection('SEO'); ?>
<meta name="title" property="og:title" content="<?php echo e($page->seo_title?:websiteTitle($page->name)); ?>" />
<meta name="description" property="og:description" content="<?php echo $page->seo_description?:general()->meta_description; ?>" />
<meta name="keywords" content="<?php echo e($page->seo_keyword?:general()->meta_keyword); ?>" />
<meta name="image" property="og:image" content="<?php echo e(asset($page->image())); ?>" />
<meta name="url" property="og:url" content="<?php echo e(route('pageView',$page->slug?:'no-title')); ?>" />
<link rel="canonical" href="<?php echo e(route('pageView',$page->slug?:'no-title')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
<style>

</style>
<?php $__env->stopPush(); ?> 

<?php $__env->startSection('contents'); ?>


    <!-- ==========================================================================
         1. COMPACT PAGE COVER (ONLY PAGE NAME & BREADCRUMB)
         ========================================================================== -->
    <section class="about-cover-section">
        <div class="container">
            <h1 class="about-cover-title">About Us</h1>
            <div class="about-cover-breadcrumb">
                <a href="index.html">Home</a>
                <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                <span class="current">About Us</span>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         2. SECTION 1: WHO WE ARE & MISSION (ASYMMETRICAL LAYOUT)
         ========================================================================== -->
    <section class="about-intro-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <!-- Left Details Content -->
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="about-intro-label">Who We Are</span>
                    <h2 class="about-intro-title">About Nuvesta Global LLC</h2>
                    <p class="about-intro-text">
                        Nuvesta Global LLC is a global apparel sourcing and supply chain company connecting international buyers with trusted manufacturers in Bangladesh. With offices in Bangladesh and Vilnius, Lithuania, we provide reliable sourcing, quality assurance, production management, and logistics support.
                    </p>
                    <p class="about-intro-text">
                        We specialize in knit, woven and diversified apparel products, delivering quality, transparency, and on-time execution for brands, retailers, and importers worldwide.
                    </p>

                    <!-- Mission Panel -->
                    <div class="about-mission-panel">
                        <h3 class="about-mission-title"><i class="fa-solid fa-bullseye"></i>Our Mission</h3>
                        <p class="about-mission-text">
                            To be a trusted global sourcing partner by combining local manufacturing expertise with international standards and delivering dependable, cost-effective sourcing solutions.
                        </p>
                    </div>
                </div>

                <!-- Right Asymmetrical Collage -->
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="about-collage-wrap">
                        <div class="about-collage-bg-block"></div>
                        <div class="about-collage-img-primary">
                            <img src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?auto=format&fit=crop&w=600&h=750&q=80" alt="Garment factory environment">
                        </div>
                        <div class="about-collage-img-secondary">
                            <img src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?auto=format&fit=crop&w=500&h=375&q=80"
     alt="Garments Buying House">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         3. SECTION 2: MESSAGE FROM THE DIRECTOR
         ========================================================================== -->
    <section class="about-director-section">
        <div class="container">
            <div class="row g-5 align-items-stretch">
                <!-- Left Portrait Card -->
                <div class="col-lg-4 col-md-5" data-aos="fade-up">
                    <div class="about-director-card">
                        <div class="about-director-img-wrap">
                            <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=480&h=540&q=80" alt="MD Ariful Islam">
                        </div>
                        <div class="about-director-meta">
                            <h3 class="about-director-name">MD Ariful Islam</h3>
                            <span class="about-director-role">Director, Nuvesta Global LLC</span>
                            <span class="about-director-tagline">Global Sourcing, Local Expertise</span>
                        </div>
                    </div>
                </div>

                <!-- Right Message details -->
                <div class="col-lg-8 col-md-7 d-flex align-items-center" data-aos="fade-up" data-aos-delay="150">
                    <div class="about-director-message-box">
                        <span class="about-intro-label">Director's Message</span>
                        <h2 class="about-director-heading">Message from the Director</h2>
                        
                        <div class="about-director-quote">
                            <p class="mb-3">
                                At Nuvesta Global LLC, we build strong partnerships between global buyers and the best manufacturers in Bangladesh. Our focus is on quality, transparency, and timely delivery.
                            </p>
                            <p>
                                From factory sourcing and product development to quality control and logistics, we manage every step of the process to ensure our clients receive products that meet their expectations.
                            </p>
                        </div>

                        <div class="about-director-sig-wrap">
                            <h4 class="about-director-name mb-1">MD Ariful Islam</h4>
                            <span class="about-director-role">Director, Nuvesta Global LLC</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         4. SECTION 3: WHY CHOOSE US (INTERACTIVE ACCORDION LIST)
         ========================================================================== -->
    <section class="about-why-section">
        <div class="container">
            <div class="row g-5 align-items-center">
                <!-- Left: Content Grid -->
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="about-intro-label">Our Advantages</span>
                    <h2 class="about-intro-title">Why Choose Us</h2>
                    
                    <div class="about-why-grid">
                        <!-- Item 1 -->
                        <div class="about-why-grid-item">
                            <div class="about-why-icon-box">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <div class="about-why-info">
                                <h4>Trusted & Compliant Factory Network</h4>
                                <p>We work exclusively with audited and compliant facilities maintaining high labor and safety regulations.</p>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="about-why-grid-item">
                            <div class="about-why-icon-box">
                                <i class="fa-solid fa-wand-magic-sparkles"></i>
                            </div>
                            <div class="about-why-info">
                                <h4>Expert Product Development Support</h4>
                                <p>Our technical design advisors refine pattern layouts, fabric selections, and accessories seamlessly.</p>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="about-why-grid-item">
                            <div class="about-why-icon-box">
                                <i class="fa-solid fa-list-check"></i>
                            </div>
                            <div class="about-why-info">
                                <h4>Strong Quality Assurance System</h4>
                                <p>On-site checking staff runs pre-production, inline, and final batch inspection reports.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Content Grid Part 2 -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                    <div class="about-why-grid">
                        <!-- Item 4 -->
                        <div class="about-why-grid-item">
                            <div class="about-why-icon-box">
                                <i class="fa-solid fa-tags"></i>
                            </div>
                            <div class="about-why-info">
                                <h4>Competitive Pricing & Support</h4>
                                <p>Direct cost structures optimize materials, production, and administrative invoicing.</p>
                            </div>
                        </div>

                        <!-- Item 5 -->
                        <div class="about-why-grid-item">
                            <div class="about-why-icon-box">
                                <i class="fa-solid fa-arrows-spin"></i>
                            </div>
                            <div class="about-why-info">
                                <h4>Efficient Production & PPC</h4>
                                <p>Strict capacity checking, timing milestones, and performance follow-ups prevent order delays.</p>
                            </div>
                        </div>

                        <!-- Item 6 -->
                        <div class="about-why-grid-item">
                            <div class="about-why-icon-box">
                                <i class="fa-solid fa-truck-fast"></i>
                            </div>
                            <div class="about-why-info">
                                <h4>Transparent Cargo Shipping</h4>
                                <p>Daily status check updates ensure complete export shipping paperwork and cargo tracking.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         5. SECTION 4: OUR SERVICES (HOVER DRAW BLOCKS)
         ========================================================================== -->
    <section class="about-services-section">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <span class="about-intro-label">What We Do</span>
                <h2 class="about-intro-title mb-5">Our Services</h2>
            </div>

            <div class="about-services-grid">
                <!-- Service 1 -->
                <div class="about-service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-service-header">
                        <div class="about-service-icon-box">
                            <i class="fa-solid fa-shirt"></i>
                        </div>
                        <i class="fa-solid fa-arrow-right-long about-service-arrow"></i>
                    </div>
                    <h3 class="about-service-title">Apparel Sourcing</h3>
                    <p class="about-service-desc">Matching buyer styles and quantities with certified factories optimized for quality garment output.</p>
                </div>

                <!-- Service 2 -->
                <div class="about-service-card" data-aos="fade-up" data-aos-delay="150">
                    <div class="about-service-header">
                        <div class="about-service-icon-box">
                            <i class="fa-solid fa-compass-drafting"></i>
                        </div>
                        <i class="fa-solid fa-arrow-right-long about-service-arrow"></i>
                    </div>
                    <h3 class="about-service-title">Product Development</h3>
                    <p class="about-service-desc">Translating concepts and tech packs into precise fit, sizing, and pre-production approval samples.</p>
                </div>

                <!-- Service 3 -->
                <div class="about-service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="about-service-header">
                        <div class="about-service-icon-box">
                            <i class="fa-solid fa-circle-check"></i>
                        </div>
                        <i class="fa-solid fa-arrow-right-long about-service-arrow"></i>
                    </div>
                    <h3 class="about-service-title">Quality Assurance</h3>
                    <p class="about-service-desc">Performing material testing, inline assembly tracking, and final statistical AQL quality audits.</p>
                </div>

                <!-- Service 4 -->
                <div class="about-service-card" data-aos="fade-up" data-aos-delay="250">
                    <div class="about-service-header">
                        <div class="about-service-icon-box">
                            <i class="fa-solid fa-calendar-check"></i>
                        </div>
                        <i class="fa-solid fa-arrow-right-long about-service-arrow"></i>
                    </div>
                    <h3 class="about-service-title">Production PPC</h3>
                    <p class="about-service-desc">Monitoring factory capacity timelines, schedules, and daily outputs to ensure on-time delivery.</p>
                </div>

                <!-- Service 5 -->
                <div class="about-service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-service-header">
                        <div class="about-service-icon-box">
                            <i class="fa-solid fa-boxes-packing"></i>
                        </div>
                        <i class="fa-solid fa-arrow-right-long about-service-arrow"></i>
                    </div>
                    <h3 class="about-service-title">Raw Material Sourcing</h3>
                    <p class="about-service-desc">Evaluating suppliers to secure premium yarn, dyes, fabrics, and accessories at target price points.</p>
                </div>

                <!-- Service 6 -->
                <div class="about-service-card" data-aos="fade-up" data-aos-delay="350">
                    <div class="about-service-header">
                        <div class="about-service-icon-box">
                            <i class="fa-solid fa-ship"></i>
                        </div>
                        <i class="fa-solid fa-arrow-right-long about-service-arrow"></i>
                    </div>
                    <h3 class="about-service-title">Logistics & Shipping</h3>
                    <p class="about-service-desc">Coordinating booking slots, export customs documentation, and freight loading structures.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         6. SECTION 5: OUR PROCESS (DYNAMIC TIMELINE FLOW)
         ========================================================================== -->
    <section class="about-process-section">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <span class="about-intro-label">Operations</span>
                <h2 class="about-intro-title mb-5">Our Process</h2>
            </div>

            <div class="about-process-grid">
                <!-- Step 1 -->
                <div class="about-process-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-process-num-circle">1</div>
                    <h4 class="about-process-step-title">Requirement Analysis</h4>
                    <p class="about-process-step-desc">Gathering style specs and target milestones.</p>
                </div>

                <!-- Step 2 -->
                <div class="about-process-item" data-aos="fade-up" data-aos-delay="150">
                    <div class="about-process-num-circle">2</div>
                    <h4 class="about-process-step-title">Design Development</h4>
                    <p class="about-process-step-desc">Refining sketches, selecting materials and samples.</p>
                </div>

                <!-- Step 3 -->
                <div class="about-process-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="about-process-num-circle">3</div>
                    <h4 class="about-process-step-title">Factory Sourcing</h4>
                    <p class="about-process-step-desc">Matching order specs with certified facilities.</p>
                </div>

                <!-- Step 4 -->
                <div class="about-process-item" data-aos="fade-up" data-aos-delay="250">
                    <div class="about-process-num-circle">4</div>
                    <h4 class="about-process-step-title">Order Execution</h4>
                    <p class="about-process-step-desc">Managing production timelines and workflow monitoring.</p>
                </div>

                <!-- Step 5 -->
                <div class="about-process-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-process-num-circle">5</div>
                    <h4 class="about-process-step-title">Final Inspection</h4>
                    <p class="about-process-step-desc">Running AQL final quality assurance audits.</p>
                </div>

                <!-- Step 6 -->
                <div class="about-process-item" data-aos="fade-up" data-aos-delay="350">
                    <div class="about-process-num-circle">6</div>
                    <h4 class="about-process-step-title">Delivery</h4>
                    <p class="about-process-step-desc">Coordinating logistics and customs booking pipelines.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         7. TOP QUALITY CTA CONSULTATION BANNER
         ========================================================================== -->
    <section class="about-banner-section">
        <div class="container text-center" data-aos="zoom-in">
            <h2 class="about-banner-heading">Your Trusted Apparel Sourcing Partner</h2>
            <p class="about-banner-text mx-auto">
                Partner with Nuvesta Global LLC for reliable sourcing solutions, premium quality products, and seamless supply chain management—helping your business grow with confidence.
            </p>
            <a href="contact.html" class="about-banner-button">Book Your Consultation</a>
        </div>
    </section>



<?php $__env->stopSection(); ?> 
<?php $__env->startPush('js'); ?> 
<?php $__env->stopPush(); ?>



<?php echo $__env->make(welcomeTheme().'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\nuvesta-globa\resources\views/welcome/pages/aboutUs.blade.php ENDPATH**/ ?>