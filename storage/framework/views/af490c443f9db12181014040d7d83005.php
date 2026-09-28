 <?php $__env->startSection('title'); ?>
<title><?php echo e($page->seo_title?:websiteTitle($page->name)); ?></title>
<?php $__env->stopSection(); ?> <?php $__env->startSection('SEO'); ?>
<meta name="title" property="og:title" content="<?php echo e($page->seo_title?:general()->meta_title); ?>" />
        <meta name="description" property="og:description" content="<?php echo $page->seo_description?:general()->meta_description; ?>" />
        <meta name="keywords" content="<?php echo e($page->seo_keyword?:general()->meta_keyword); ?>" />
        <meta name="image" property="og:image" content="<?php echo e(asset($page->image())); ?>" />
        <meta name="url" property="og:url" content="<?php echo e(route('pageView',$page->slug?:'no-title')); ?>" />
        <link rel="canonical" href="<?php echo e(route('pageView',$page->slug?:'no-title')); ?>">
<?php $__env->stopSection(); ?>
 <?php $__env->startPush('css'); ?>
 <style>
.brand img {
    max-width: 100%;
    max-height:50px;
}

.brand {
    text-align: center;
    border: 1px solid #e5e2e2;
    height: 70px;
    padding: 10px;
    border-radius: 5px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.brand:hover {
    border-color: #0ba350;
}
 </style>
<?php $__env->stopPush(); ?> 

<?php $__env->startSection('contents'); ?>

<div class="singleProHead">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e($page->name); ?></li>
            </ol>
        </nav>
    </div>
</div>

<div class="categoryMainDiv">
    <div class="container">
        <div class="productsLists">
            <div class="row" style="margin:0 -10px;">
                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-2 col-6" style="padding:10px;">
                    <div class="brand">
                        <a href="<?php echo e(route('productBrand',$brand->slug?:'no-title')); ?>"><img src="<?php echo e(asset($brand->image())); ?>" alt="<?php echo e($brand->name); ?>"></a>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        
        <div class="paginationPart">
            <?php echo e($brands->links('pagination')); ?>

        </div>
    </div>
</div>


<?php $__env->stopSection(); ?> <?php $__env->startPush('js'); ?> <?php $__env->stopPush(); ?>
<?php echo $__env->make(welcomeTheme().'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nithostrb/public_html/nuvesta.nit.hostrb.com/resources/views/welcome/products/brandsAll.blade.php ENDPATH**/ ?>