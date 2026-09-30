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



 <section class="section-b-space pt-0"> 
       <div class="heading-banner">
         <div class="custom-container container">
           <div class="row align-items-center">
             <div class="col-sm-6">
               <h4><?php echo e($page->name); ?> </h4>
             </div>
             <div class="col-sm-6">
               <ul class="breadcrumb float-end">
                 <li class="breadcrumb-item">  <a href="<?php echo e(route('index')); ?>">Home  </a></li>
                 <li class="breadcrumb-item active">  <a href="#"><?php echo e($page->name); ?> </a></li>
               </ul>
             </div>
           </div>
         </div>
       </div>
     </section>

<div class="categoryMainDiv">
    <div class="custom-container container">

        <div class="pageContents">
            <div>
            <?php echo $page->description; ?>

            </div>
        </div>
    </div>
</div>




<?php $__env->stopSection(); ?> <?php $__env->startPush('js'); ?> <?php $__env->stopPush(); ?>
<?php echo $__env->make(welcomeTheme().'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\nuvesta-globa\resources\views/welcome/pages/pageView.blade.php ENDPATH**/ ?>