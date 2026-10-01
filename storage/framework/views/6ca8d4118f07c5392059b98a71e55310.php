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
            <div class="row g-5">
                <!-- Left Details Content -->
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="about-intro-label">Who We Are</span>
                    <!--<h2 class="about-intro-title">About Nuvesta Global LLC</h2>-->
                                      <p>

Nuvesta Global is a Lithuania-registered apparel sourcing and supply company connecting buyers across Europe, the UK and the USA with trusted manufacturing and sourcing partners in Bangladesh and selected Asian markets.

We coordinate product development, fabric and trim sourcing, costing, sampling, supplier selection, production follow-up, quality assurance and shipment—giving international buyers a structured sourcing partner from inquiry to delivery.

<br>
<br>
<b>
    European presence. Bangladesh manufacturing access. International sourcing support.
</b>
                    </p>
                    
                    <span class="about-intro-label">  Why Nuvesta?</span>
                    
                    <p>
                       <b> European Presence</b>
                        Lithuania-based, serving buyers across Europe, the UK and the USA.
                    </p>
                    <p>
                       <b>Bangladesh Sourcing Network</b>
                        Access to trusted factories, buying houses, fabric mills and suppliers. 
                    </p>
                    <p>
                        <b>End-to-End Support</b>
                         From product development and sourcing to production, quality and shipment.
                    </p>
   
                    <p>
                        
                    <b>One Reliable Partner</b>
                    One clear communication point for your apparel sourcing needs.
                    </p>
                    
                  
                    
                    <p>
                        <b>Our Mission</b>

                        To make apparel sourcing simple, reliable and transparent connecting 
                        international buyers with the right manufacturing partners.
                    </p>





                    
                    
                    
                    
                    
                    

                  
                </div>

                <!-- Right Asymmetrical Collage -->
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="about-collage-wrap">
                        <div class="about-collage-bg-block"></div>
                        <div class="about-collage-img-primary">
                            <img src="<?php echo e(asset('welcome/images/home/WhatsApp Image 2026-09-27 at 3.00.36 PM.jpeg')); ?>" alt="Garment factory environment">
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
    
    
        <section class="about-why-section pt-0">
        <div class="container">
            <div class="row g-5">
                <!-- Left: Content Grid -->
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="about-intro-label">WHAT NUVESTA DOES</span>
                    <!--<h2 class="about-intro-title">Why Choose Us</h2>-->
                    <h4>
                        From Product Idea to Shipment

                    </h4>
                    
                    <p>
                        Nuvesta Global LLC provides end-to-end apparel sourcing and product development 
                        support for brands, retailers, importers and buying organizations.
                    </p>
                    
                    <div class="about-why-grid">
                        <!-- Item 1 -->
                        <div class="about-why-grid-item">
                            <div class="about-why-icon-box">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <div class="about-why-info">
                                <h4>Product Development</h4>
                                <p>Tech packs, specifications, sampling and commercial development.</p>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="about-why-grid-item">
                            <div class="about-why-icon-box">
                                <i class="fa-solid fa-wand-magic-sparkles"></i>
                            </div>
                            <div class="about-why-info">
                                <h4>Fabric & Trim Sourcing</h4>
                                <p>Identifying suitable fabrics, trims, mills and suppliers according to quality and target cost.</p>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="about-why-grid-item">
                            <div class="about-why-icon-box">
                                <i class="fa-solid fa-list-check"></i>
                            </div>
                            <div class="about-why-info">
                                <h4>Factory Matching</h4>
                                <p>Selecting manufacturing partners according to product category, capacity, quality and buyer requirements.</p>
                            </div>
                        </div>
                         <div class="about-why-grid">
                        <!-- Item 4 -->
                        <div class="about-why-grid-item">
                            <div class="about-why-icon-box">
                                <i class="fa-solid fa-tags"></i>
                            </div>
                            <div class="about-why-info">
                                <h4>Costing & Negotiation</h4>
                                <p>Detailed FOB costing and commercial negotiation.</p>
                            </div>
                        </div>

                        <!-- Item 5 -->
                        <div class="about-why-grid-item">
                            <div class="about-why-icon-box">
                                <i class="fa-solid fa-arrows-spin"></i>
                            </div>
                            <div class="about-why-info">
                                <h4>Production Management</h4>
                                <p>T&A follow-up, material status, production monitoring and buyer communication.</p>
                            </div>
                        </div>

                        <!-- Item 6 -->
                        <div class="about-why-grid-item">
                            <div class="about-why-icon-box">
                                <i class="fa-solid fa-truck-fast"></i>
                            </div>
                            <div class="about-why-info">
                                <h4>Quality & Shipment</h4>
                                <p>Quality follow-up, inspection coordination, packing and shipment readiness.</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                <!-- Right: Content Grid Part 2 -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                    <img class="about-2" src="<?php echo e(asset('welcome/images/home/about-page.jpeg')); ?>" alt="Garment factory environment">
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
                <!-- <div class="col-lg-4 col-md-5" data-aos="fade-up">
                    <div class="about-director-card">
                        <div class="about-director-img-wrap">
                            <img src="<?php echo e(asset('welcome/images/home/founder.jpg')); ?>" alt="MD Ariful Islam">
                        </div>
                        <div class="about-director-meta">
                            <h3 class="about-director-name">Md Ariful Islam</h3>
                            <span class="about-director-role">Managing Director, Nuvesta Global LLC</span>
                            <span class="about-director-tagline">Global Sourcing, Local Expertise</span>
                        </div>
                    </div>
                </div> -->

                <!-- Right Message details -->
                <div class="col-lg-12 col-md-12 d-flex align-items-center" data-aos="fade-up" data-aos-delay="150">
                    <div class="about-director-message-box">
                        
                        <h2 class="about-director-heading mb-2">Message from  Managing Director</h2>
                        <h5 class="about-director-subheading">Reliable Sourcing. Real Partnership.</h5>

                        <div class="about-director-quote">
                            <p class="mb-3">
                                At Nuvesta Global LLC, we make international apparel sourcing simpler, more transparent and more reliable.
                            </p>
                            <p class="mb-3">
                                We connect buyers with trusted manufacturing and sourcing capabilities in Bangladesh, supported by our European presence in Lithuania.
                            </p>
                            <p class="mb-3">
                                Our role is straightforward: understand your requirements, source the right solutions, control quality and deliver on time.
                            </p>
                            <p class="mb-3">
                                From product development, fabrics and sampling to production, quality assurance and shipment, we manage the process with close attention to detail.
                            </p>
                            <p class="mb-3">
                                Our commitment is to build long-term relationships based on trust, communication and consistent performance.
                            </p>
                            <p class="about-director-motto">
                                We source with purpose.<br>
                                We execute with responsibility.<br>
                                We deliver with confidence.
                            </p>
                        </div>

                        <div class="about-director-sig-wrap">
                            <h4 class="about-director-name mb-1">Md. Ariful Islam</h4>
                            <span class="about-director-role">Managing Director, Nuvesta Global LLC</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-director-section">
        <div class="container">
            <div class="row g-5 align-items-stretch">
                

                <!-- Right Message details -->
                <div class="col-lg-12 col-md-12 d-flex align-items-center" data-aos="fade-up" data-aos-delay="150">
                    <div class="about-director-message-box">
                        
                        <h2 class="about-director-heading mb-2">Message from  Director</h2>
                        <h5 class="about-director-subheading">Building trust through knowledge, sourcing and execution.</h5>

                        <div class="about-director-quote">
                            <p class="mb-3">
                                At Nuvesta Global, our purpose is to make international sourcing simpler, more transparent and more reliable.
                            </p>
                            <p class="mb-3">
                                With over 26 years of experience in apparel merchandising, product development, costing, sourcing and production, I understand the importance of combining buyer expectations with the right products, materials, factories and commercial solutions.
                            </p>
                            <p class="mb-3">
                                From our European presence in Lithuania and our established sourcing network in Bangladesh, Nuvesta connects international buyers with reliable manufacturing and sourcing opportunities.
                            </p>
                            <p class="mb-3">
                                We support the journey from product concept and material sourcing to sampling, costing, quality, production and shipment&mdash;with a clear focus on communication, accountability and long-term relationships.
                            </p>
                            <p class="mb-0">
                                Our philosophy is simple:
                            </p>
                            <p class="about-director-motto mt-2 mb-3">
                                Understand. Source. Develop. Deliver.
                            </p>
                            <p class="mb-0">
                                We welcome the opportunity to work with buyers and partners who value quality, transparency and dependable sourcing.
                            </p>
                        </div>

                        <div class="about-director-sig-wrap">
                            <h4 class="about-director-name mb-1">Sayem Khan</h4>
                            <span class="about-director-role">Director | Nuvesta Global LLC</span>
                        </div>
                    </div>
                </div>
                
                
                <!-- Left Portrait Card -->
                <!-- <div class="col-lg-4 col-md-5" data-aos="fade-up">
                    <div class="about-director-card">
                        <div class="about-director-img-wrap">
                            <img src="<?php echo e(asset('welcome/images/home/director-sayem-khan.jpg')); ?>" alt="Abu Shadath Sayem Khan" style="object-position: center top;">
                        </div>
                        <div class="about-director-meta">
                            <h3 class="about-director-name">Abu Shadath Sayem Khan</h3>
                            <span class="about-director-role"> Director, Nuvesta Global LLC</span>
                            <span class="about-director-tagline">Global Sourcing, Local Expertise</span>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         4. SECTION 3: WHY CHOOSE US (INTERACTIVE ACCORDION LIST)
         ========================================================================== -->


    <!-- ==========================================================================
         5. SECTION 4: OUR SERVICES (HOVER DRAW BLOCKS)
         ========================================================================== -->
    

    <!-- ==========================================================================
         6. SECTION 5: OUR PROCESS (DYNAMIC TIMELINE FLOW)
         ========================================================================== -->
    

    <!-- ==========================================================================
         7. TOP QUALITY CTA CONSULTATION BANNER
         ========================================================================== -->
    <section class="about-banner-section">
        <div class="container text-center" data-aos="zoom-in">
            <h2 class="about-banner-heading">Your Trusted Apparel Sourcing Partner</h2>
            <p class="about-banner-text mx-auto">
                Partner with Nuvesta Global LLC for reliable sourcing solutions, premium quality products, and seamless supply chain management—helping your business grow with confidence.
            </p>
            <a href="<?php echo e(($quotePage = pageTemplate('Get A Quote')) ? route('pageView',$quotePage->slug) : url('get-a-quote')); ?>" class="about-banner-button">Book Your Consultation</a>
        </div>
    </section>



<?php $__env->stopSection(); ?> 
<?php $__env->startPush('js'); ?> 
<?php $__env->stopPush(); ?>



<?php echo $__env->make(welcomeTheme().'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nasim/nuvesta/Nuvesta-Global/resources/views/welcome/pages/aboutUs.blade.php ENDPATH**/ ?>