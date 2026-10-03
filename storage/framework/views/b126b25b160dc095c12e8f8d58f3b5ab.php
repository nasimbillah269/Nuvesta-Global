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
<?php $__env->stopPush(); ?> <?php $__env->startSection('contents'); ?>





<!-- home appoinment form start -->

<!-- home appoinment form end -->









    <!-- ==========================================================================
         CONTACT COVER HEADER
         ========================================================================== -->
    <section class="contact-cover-section">
        <div class="container">
            <h1 class="contact-cover-title">Contact Us</h1>
            <div class="contact-cover-breadcrumb">
                <a href="<?php echo e(route('index')); ?>">Home</a>
                <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                <span class="current">Contact Us</span>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         MAIN CONTACT SECTION
         ========================================================================== -->
    <section class="contact-main-section section-padding">
        <div class="container">
            <div class="row g-5">
                
                <!-- Contact Information Column -->
                <div class="col-lg-5">
                    <div class="contact-info-wrapper">
                        <span class="section-subtitle">Get In Touch</span><br>
                        <h2 class="section-title contact-heading mb-4">Let's Work Together</h2>
                        <!--<p class="contact-description mb-5">-->
                        <!--    We are always ready to help you. Reach out to us any time for inquiries, orders, or partnerships. Our team will get back to you as soon as possible.-->
                        <!--</p>-->
                        
                        <div class="contact-info-card">
                            <div class="contact-icon-box">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="contact-info-content">
                                <h4>Lithuania Office</h4>
                                <p>Girulių g. 5, LT-12124<br>Vilnius, Lithuania</p>
                            </div>
                        </div>
                        
                        <!-- <div class="contact-info-card">
                            <div class="contact-icon-box">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="contact-info-content">
                                <h4>Bangladesh Office</h4>
                                <p>House 33, (5th Floor), Road 3 Sector 9,<br>Uttara, Dhaka 1230 Bangladesh.</p>
                            </div>
                        </div> -->

                        

                        <div class="contact-info-card">
                            <div class="contact-icon-box">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="contact-info-content">
                                <h4>Call Us</h4>
                                <p><a href="tel:+447782273969">+447782273969</a></p>
                                <p><a href="tel:+447782273969">+8801812370181</a></p>
                            </div>
                        </div>

                        <div class="contact-info-card">
                            <div class="contact-icon-box">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <div class="contact-info-content">
                                <h4>Email Us</h4>
                                <p><a href="mailto:contact@nuvestagloballlc.com">info@nuvestagloballlc.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Column -->
                <div class="col-lg-7">
                    <div class="contact-form-container shadow-sm">
                        <h3 class="contact-form-title">Send a Message</h3>
                        
                        
                     <?php if(Session::has('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success! </strong> <?php echo e(Session::get('success')); ?>

                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                        
                        <form action="<?php echo e(route('contactMail')); ?>" method="post" class="nuvesta-contact-form">
                             <?php echo csrf_field(); ?>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contactName" class="form-label">Full Name</label>
                                        <input type="text" id="contactName" name="name" value="" class="form-control contact-input" placeholder="Enter your name" required>
                                         <?php if($errors->has('name')): ?>
                                            <p style="color: red; margin: 0; font-size: 10px;"><?php echo e($errors->first('name')); ?></p>
                                            <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contactEmail" class="form-label">Email Address</label>
                                        <input type="email" id="contactEmail" name="email" value="" class="form-control contact-input" placeholder="Enter your email" required>
                                         <?php if($errors->has('email')): ?>
                                            <p style="color: red; margin: 0; font-size: 10px;"><?php echo e($errors->first('email')); ?></p>
                                          <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="contactSubject" class="form-label">Subject</label>
                                        <input type="text" id="contactSubject" name="subject" value="" class="form-control contact-input" placeholder="Subject of your message" required>
                                         <?php if($errors->has('subject')): ?>
                                        <p style="color: red; margin: 0; font-size: 10px;"><?php echo e($errors->first('subject')); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="contactMessage" class="form-label">Message</label>
                                        <textarea id="contactMessage" rows="6" name="message" class="form-control contact-textarea" placeholder="Write your message here..." required></textarea>
                                          <?php if($errors->has('message')): ?>
                                                <p style="color: red; margin: 0; font-size: 10px;"><?php echo e($errors->first('message')); ?></p>
                                                <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-coral contact-submit-btn w-100">
                                        Send Message <i class="fa-solid fa-paper-plane ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         MAP SECTION
         ========================================================================== -->
    <section class="contact-map-section">
        <div class="container">
            
        <div class="contact-map-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2303.352905310409!2d25.21460107608246!3d54.73859627272566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd91a208f77fc1%3A0x11f78ed93b001c1e!2sGiruli%C5%B3%20g.%205%2C%20Vilnius%2C%2012124%20Vilniaus%20m.%20sav.%2C%20Lithuania!5e0!3m2!1sen!2sbd!4v1790854336004!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
        </div>
        </div>
    </section>







<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<?php $__env->stopPush(); ?>



<?php echo $__env->make(welcomeTheme().'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\nuvesta-globa\resources\views/welcome/pages/contactUs.blade.php ENDPATH**/ ?>