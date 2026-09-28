 <?php $__env->startSection('title'); ?>
<title><?php echo e(websiteTitle($post->seo_title?:$post->name)); ?></title>
<?php $__env->stopSection(); ?> <?php $__env->startSection('SEO'); ?>
<meta name="title" property="og:title" content="<?php echo e(websiteTitle($post->seo_title?:$post->name)); ?>" />
<meta name="description" property="og:description" content="<?php echo $post->seo_description?:general()->meta_description; ?>" />
<meta name="keywords" content="<?php echo e($post->seo_keyword?:general()->meta_keyword); ?>" />
<meta name="image" property="og:image" content="<?php echo e(asset($post->image())); ?>" />
<meta name="url" property="og:url" content="<?php echo e(route('blogView',$post->slug?:'no-title')); ?>" />
<link rel="canonical" href="<?php echo e(route('blogView',$post->slug?:'no-title')); ?>">
<?php $__env->stopSection(); ?> <?php $__env->startPush('css'); ?>
<style>
.blogCompany {
    padding: 100px 0;
}
.blog-content .btn {
    border: 1px solid #0e580b;
    color: #1b5f17;
    background: unset;
}
.blog-sidebar .widget-title {
    color: #10570b;
}
.widget_categories .card-body a {
    color: #10570b;
}
.blog-sidebar {
    background-color: unset;
}
.btn-coral {
    background: linear-gradient(45deg, #1e315b, #e43a59);
    color: #fff !important;
    border-right: none;
}
</style>
<?php $__env->stopPush(); ?> 

<?php $__env->startSection('contents'); ?>





    <section class="contact-cover-section">
        <div class="container">
            <h1 class="contact-cover-title">Blog Details</h1>
            <div class="contact-cover-breadcrumb">
                <a href="<?php echo e(route('index')); ?>">Home</a>
                <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                <span class="current"><?php echo e($post->name); ?></span>
            </div>
        </div>
    </section>




<!-- ==========================================================================
         BLOG DETAILS MAIN SECTION
         ========================================================================== -->
    <section class="blog-details-section section-padding">
        <div class="container">
            <div class="row g-5">
                
                <!-- MAIN ARTICLE CONTENT (LEFT) -->
                <div class="col-lg-8">
                    <article class="blog-article-content">
                        <!-- Hero Image -->
                        <div class="article-hero-img-wrap">
                            <img src="<?php echo e(asset($post->image())); ?>" alt="Garment Production" class="img-fluid article-hero-img">
                            <div class="article-date-badge">
                                <span class="article-date-day"><?php echo e($post->created_at->format('d')); ?></span>
                                <span class="article-date-month"><?php echo e($post->created_at->format('M')); ?></span>
                            </div>
                        </div>

                        <!-- Article Header -->
                        <div class="article-header">
                            <div class="article-meta">
                                <span><i class="fa-solid fa-folder-open"></i> Manufacturing</span>
                                <span><i class="fa-solid fa-user"></i> Admin</span>
                                <span><i class="fa-solid fa-comments"></i> 3 Comments</span>
                            </div>
                            <h2 class="article-main-title"><?php echo e($post->name); ?></h2>
                        </div>

                        <!-- Article Body -->
                        <div class="article-body">
                           <?php echo $post->description; ?>

                          
                        </div>

                        <!-- Article Footer (Tags & Share) -->
                        <div class="article-footer d-flex justify-content-between align-items-center flex-wrap">
                            <div class="article-tags">
                                <span class="tags-title">Tags:</span>
                                <a href="#">Apparel</a>
                                <a href="#">Sustainability</a>
                                <a href="#">Sourcing</a>
                            </div>
                            <div class="article-share">
                                <span class="share-title">Share:</span>
                                <a href="#" class="share-fb"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="share-tw"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#" class="share-in"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </article>

                    <!-- Comments Section -->
                    
                </div>

      
                <div class="col-lg-4">
                    	<?php echo $__env->make(welcomeTheme().'blogs.includes.sideBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                 
                </div>
            </div>
        </div>
    </section>











<?php $__env->stopSection(); ?> <?php $__env->startPush('js'); ?> <?php $__env->stopPush(); ?>
<?php echo $__env->make(welcomeTheme().'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nithostrb/public_html/nuvesta.nit.hostrb.com/resources/views/welcome/blogs/blogView.blade.php ENDPATH**/ ?>