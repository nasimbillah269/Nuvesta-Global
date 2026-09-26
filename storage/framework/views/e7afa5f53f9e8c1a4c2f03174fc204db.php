 <?php $__env->startSection('title'); ?>
<title><?php echo e($page->seo_title?:websiteTitle($page->name)); ?></title>
<?php $__env->stopSection(); ?> <?php $__env->startSection('SEO'); ?>
<meta name="title" property="og:title" content="<?php echo e($page->seo_title?:websiteTitle($page->name)); ?>" />
        <meta name="description" property="og:description" content="<?php echo $page->seo_description?:general()->meta_description; ?>" />
        <meta name="keywords" content="<?php echo e($page->seo_keyword?:general()->meta_keyword); ?>" />
        <meta name="image" property="og:image" content="<?php echo e(asset($page->image())); ?>" />
        <meta name="url" property="og:url" content="<?php echo e(route('pageView',$page->slug?:'no-title')); ?>" />
        <link rel="canonical" href="<?php echo e(route('pageView',$page->slug?:'no-title')); ?>">
<?php $__env->stopSection(); ?> <?php $__env->startPush('css'); ?>
<style>
	.image a img {
    transition: 0.5s all;
    width: 100%;
}
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


</style>
<?php $__env->stopPush(); ?> 

<?php $__env->startSection('contents'); ?>



    <section class="contact-cover-section">
        <div class="container">
            <h1 class="contact-cover-title"><?php echo e($page->name); ?></h1>
            <div class="contact-cover-breadcrumb">
                <a href="<?php echo e(route('index')); ?>">Home</a>
                <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                <span class="current"><?php echo e($page->name); ?></span>
            </div>
        </div>
    </section>
    
    
    
        <section class="blog-grid-section section-padding">
        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col-12">
                    <span class="blog-section-badge">Our Journal</span>
                    <h2 class="blog-section-title">Latest Articles & News</h2>
                </div>
            </div>
            
            <div class="row g-4">
                <!-- Blog Post 1 -->
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6">
                     <?php echo $__env->make(welcomeTheme().'blogs.includes.blogGrid', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                   
                </div>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

            	<!-- pagination -->
			<?php echo e($posts->links(welcomeTheme().'blogs.pagination')); ?>


            <!-- Pagination -->
           
        </div>
    </section>








<?php $__env->stopSection(); ?> <?php $__env->startPush('js'); ?> <?php $__env->stopPush(); ?>
<?php echo $__env->make(welcomeTheme().'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\nuvesta-globa\resources\views/welcome/blogs/latestBlogs.blade.php ENDPATH**/ ?>