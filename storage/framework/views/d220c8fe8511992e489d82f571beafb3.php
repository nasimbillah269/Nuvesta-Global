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

<?php
  $pageUrl = route('pageView',$page->slug?:'no-title');
  $activeCategory = request('category');
  $sort  = request('sort','newest');
  $sorts = ['newest' => 'Newest first', 'oldest' => 'Oldest first', 'name_asc' => 'Name: A – Z', 'name_desc' => 'Name: Z – A'];
  $url   = function (array $params) use ($pageUrl) {
      $q = array_filter(array_merge(request()->only(['category','sort']), $params), fn($v) => $v !== null && $v !== '');
      return $pageUrl.($q ? '?'.http_build_query($q) : '');
  };
  $activeName = $activeCategory ? optional($facets->firstWhere('slug',$activeCategory))->name : null;
?>

<?php $__env->startSection('contents'); ?>
<div class="nv nv-sp">

  <!-- ================= HEAD ================= -->
  <section class="sp-head">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="sp-crumbs">
          <li><a href="<?php echo e(route('index')); ?>">Home</a></li>
          <li aria-current="page"><?php echo e($page->name); ?></li>
        </ol>
      </nav>
      <h1><?php echo e($activeName ?: 'Our Products'); ?></h1>
      <p class="sp-sub">
        <?php if($page->short_description): ?>
          <?php echo e(strip_tags($page->short_description)); ?>

        <?php else: ?>
          Explore our apparel range — woven, knit, denim, outerwear and more, manufactured by our trusted Bangladesh factory network.
        <?php endif; ?>
      </p>
      <form class="sp-form" action="<?php echo e(route('search')); ?>" method="get" role="search">
        <i class="bi bi-search" aria-hidden="true"></i>
        <input type="search" name="search" placeholder="Search products, categories, SKU…" aria-label="Search products">
        <button type="submit" class="nv-btn nv-btn-accent">Search</button>
      </form>
    </div>
  </section>

  <section class="sp-main">
    <div class="container">

      <!-- ================= TOOLBAR ================= -->
      <div class="sp-toolbar">
        <div class="sp-filters" role="group" aria-label="Filter by category">
          <a href="<?php echo e($url(['category' => null, 'page' => null])); ?>" class="sp-chip <?php echo e(!$activeCategory ? 'is-active' : ''); ?>">All <span><?php echo e($totalProducts); ?></span></a>
          <?php $__currentLoopData = $facets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e($url(['category' => $facet->slug, 'page' => null])); ?>" class="sp-chip <?php echo e($activeCategory==$facet->slug ? 'is-active' : ''); ?>"><?php echo e($facet->name); ?> <span><?php echo e($facet->total); ?></span></a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <form class="sp-sort" action="<?php echo e($pageUrl); ?>" method="get">
          <?php if($activeCategory): ?><input type="hidden" name="category" value="<?php echo e($activeCategory); ?>"><?php endif; ?>
          <label for="spSort">Sort by</label>
          <select id="spSort" name="sort" onchange="this.form.submit()">
            <?php $__currentLoopData = $sorts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($key); ?>" <?php echo e($sort==$key ? 'selected' : ''); ?>><?php echo e($label); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </form>
      </div>

      <?php if($products->total()): ?>
        <p class="sp-count">Showing <?php echo e($products->firstItem()); ?>–<?php echo e($products->lastItem()); ?> of <?php echo e($products->total()); ?> products</p>

        <!-- ================= GRID ================= -->
        <div class="row g-3 g-lg-4 row-cols-2 row-cols-md-3 row-cols-xl-4">
          <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col" data-aos="fade-up" data-aos-delay="<?php echo e(($loop->index % 4) * 70); ?>">
              <?php echo $__env->make(welcomeTheme().'.products.includes.productCard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <?php echo $__env->make(general()->theme.'.layouts.partials.nvPager', ['paginator' => $products], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php else: ?>
        <div class="sp-empty">
          <div class="sp-empty-icon"><i class="bi bi-box-seam"></i></div>
          <h2>No products in this category yet</h2>
          <p>Please check another category, or contact us — we can source it for you.</p>
          <a href="<?php echo e($url(['category' => null, 'page' => null])); ?>" class="nv-btn nv-btn-outline"><i class="bi bi-arrow-left"></i> View all products</a>
        </div>
      <?php endif; ?>

    </div>
  </section>

  <!-- ================= CTA ================= -->
  <section class="sp-cta">
    <div class="container">
      <div class="sp-cta-box">
        <div>
          <h2>Have your own design or tech pack?</h2>
          <p>Tell us what you need — we’ll develop, cost and produce it with the right factory in Bangladesh.</p>
        </div>
        <a href="<?php echo e(url('get-a-quote')); ?>" class="nv-btn nv-btn-accent">Request a Quote <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
  </section>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(welcomeTheme().'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nithostrb/public_html/nuvesta.nit.hostrb.com/resources/views/welcome/products/latestProducts.blade.php ENDPATH**/ ?>