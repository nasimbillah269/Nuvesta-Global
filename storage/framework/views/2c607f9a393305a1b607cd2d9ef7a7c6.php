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
  $activeName = $current ? $current->name : null;
  $activeTop  = $parentCat ? $parentCat->slug : $activeCategory;   // chip to highlight
?>

<?php $__env->startPush('css'); ?>
<style>
.nv .sp-head h1{margin-bottom:22px}
.nv .sp-subnav{display:flex;flex-wrap:wrap;align-items:center;gap:8px;margin:-6px 0 22px}
.nv .sp-subnav-label{font-size:13px;color:var(--nv-muted);margin-right:4px}
.nv .sp-subchip{display:inline-flex;align-items:center;gap:6px;padding:6px 14px;border-radius:999px;border:1px solid var(--nv-line);background:#fff;color:var(--nv-text);font-size:13.5px;text-decoration:none;transition:border-color .2s,color .2s}
.nv .sp-subchip:hover{border-color:var(--nv-accent);color:var(--nv-accent-2)}
.nv .sp-subchip.is-active{border-color:var(--nv-accent);color:var(--nv-accent-2);font-weight:600}
.nv .sp-subchip span{font-size:11px;color:var(--nv-muted)}
a.sp-cat{display:flex;flex-direction:column;height:100%;background:#fff;border:1px solid #e4e4e7;border-radius:4px;overflow:hidden;text-decoration:none;color:var(--nv-navy);transition:border-color .3s,box-shadow .3s}
a.sp-cat:hover{border-color:var(--nv-navy);box-shadow:0 10px 26px rgba(30,49,91,.10)}
.sp-cat-media{position:relative;padding-top:100%;background:#f2f2f3;overflow:hidden}
.sp-cat-media img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;transition:transform .6s ease}
a.sp-cat:hover .sp-cat-media img{transform:scale(1.04)}
.sp-cat-body{display:flex;align-items:center;justify-content:space-between;gap:10px;padding:16px 18px}
.sp-cat-name{font-size:17px;font-weight:600;margin:0;color:var(--nv-navy)}
.sp-cat-count{display:block;font-size:13px;color:var(--nv-muted);margin-top:2px}
.sp-cat-arrow{flex:none;width:36px;height:36px;border-radius:50%;display:flex;align-items:center;justify-content:center;background:var(--nv-soft);color:var(--nv-navy);transition:background .2s,color .2s}
a.sp-cat:hover .sp-cat-arrow{background:var(--nv-accent);color:#fff}
@media (max-width:575.98px){.sp-cat-body{padding:12px}.sp-cat-name{font-size:15px}.sp-cat-arrow{width:30px;height:30px}}
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('contents'); ?>
<div class="nv nv-sp">

  <!-- ================= HEAD ================= -->
  <section class="sp-head">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="sp-crumbs">
          <li><a href="<?php echo e(route('index')); ?>">Home</a></li>
          <?php if($current): ?>
            <li><a href="<?php echo e($pageUrl); ?>"><?php echo e($page->name); ?></a></li>
            <?php if($parentCat): ?><li><a href="<?php echo e($url(['category' => $parentCat->slug, 'page' => null])); ?>"><?php echo e($parentCat->name); ?></a></li><?php endif; ?>
            <li aria-current="page"><?php echo e($current->name); ?></li>
          <?php else: ?>
            <li aria-current="page"><?php echo e($page->name); ?></li>
          <?php endif; ?>
        </ol>
      </nav>
      <h1><?php echo e($activeName ?: 'Our Products'); ?></h1>
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
            <a href="<?php echo e($url(['category' => $facet->slug, 'page' => null])); ?>" class="sp-chip <?php echo e($activeTop==$facet->slug ? 'is-active' : ''); ?>"><?php echo e($facet->name); ?> <span><?php echo e($facet->total); ?></span></a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <?php if (! ($showSubcats)): ?>
        <form class="sp-sort" action="<?php echo e($pageUrl); ?>" method="get">
          <?php if($activeCategory): ?><input type="hidden" name="category" value="<?php echo e($activeCategory); ?>"><?php endif; ?>
          <label for="spSort">Sort by</label>
          <select id="spSort" name="sort" onchange="this.form.submit()">
            <?php $__currentLoopData = $sorts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($key); ?>" <?php echo e($sort==$key ? 'selected' : ''); ?>><?php echo e($label); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </form>
        <?php endif; ?>
      </div>

      <?php if($parentCat && $subcats->count() > 1): ?>
        <!-- sibling sub-categories -->
        <div class="sp-subnav" role="group" aria-label="<?php echo e($parentCat->name); ?> categories">
          <span class="sp-subnav-label"><?php echo e($parentCat->name); ?>:</span>
          <?php $__currentLoopData = $subcats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e($url(['category' => $sc->slug, 'page' => null])); ?>" class="sp-subchip <?php echo e($activeCategory==$sc->slug ? 'is-active' : ''); ?>"><?php echo e($sc->name); ?> <span><?php echo e($sc->total); ?></span></a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      <?php endif; ?>

      <?php if($showSubcats): ?>
        <p class="sp-count"><?php echo e($subcats->count()); ?> <?php echo e(Str::plural('category',$subcats->count())); ?> in <?php echo e($current->name); ?></p>

        <!-- ================= SUB-CATEGORIES ================= -->
        <div class="row g-3 g-lg-4 row-cols-2 row-cols-md-3 row-cols-xl-4">
          <?php $__currentLoopData = $subcats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col" data-aos="fade-up" data-aos-delay="<?php echo e(($loop->index % 4) * 70); ?>">
              <a href="<?php echo e($url(['category' => $sc->slug, 'page' => null, 'sort' => null])); ?>" class="sp-cat">
                <div class="sp-cat-media">
                  <?php if($sc->cover): ?><img src="<?php echo e(asset($sc->cover->image())); ?>" alt="<?php echo e($sc->name); ?>" loading="lazy"><?php endif; ?>
                </div>
                <div class="sp-cat-body">
                  <div>
                    <h3 class="sp-cat-name"><?php echo e($sc->name); ?></h3>
                    <span class="sp-cat-count"><?php echo e($sc->total); ?> <?php echo e(Str::plural('product',$sc->total)); ?></span>
                  </div>
                  <span class="sp-cat-arrow"><i class="bi bi-arrow-right"></i></span>
                </div>
              </a>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      <?php elseif($products->total()): ?>

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

<?php echo $__env->make(welcomeTheme().'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\nuvesta-globa\resources\views/welcome/products/latestProducts.blade.php ENDPATH**/ ?>