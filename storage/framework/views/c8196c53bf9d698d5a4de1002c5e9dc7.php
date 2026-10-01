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
  $activeTop  = $ancestors->count() ? $ancestors->first()->slug : $activeCategory;   // chip to highlight
?>

<?php $__env->startPush('css'); ?>
<style>
.nv .sp-head h1{margin-bottom:22px}
.nv .sp-subfilters{padding-bottom:14px;margin-bottom:14px;border-bottom:1px solid var(--nv-line)}
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
            <?php $__currentLoopData = $ancestors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><li><a href="<?php echo e($url(['category' => $anc->slug, 'page' => null])); ?>"><?php echo e($anc->name); ?></a></li><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
          <a href="<?php echo e($url(['category' => null, 'page' => null])); ?>" class="sp-chip <?php echo e(!$activeCategory ? 'is-active' : ''); ?>">All</a>
          <?php $__currentLoopData = $facets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e($url(['category' => $facet->slug, 'page' => null])); ?>" class="sp-chip <?php echo e($activeTop==$facet->slug ? 'is-active' : ''); ?>"><?php echo e($facet->name); ?></a>
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

      <!-- ================= SUB-CATEGORIES ================= -->
      <?php $__currentLoopData = $subnavRows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="sp-filters sp-subfilters" role="group" aria-label="<?php echo e($row->cat->name); ?> categories">
          <a href="<?php echo e($url(['category' => $row->cat->slug, 'page' => null])); ?>" class="sp-chip <?php echo e($activeCategory==$row->cat->slug ? 'is-active' : ''); ?>">All <?php echo e($row->cat->name); ?></a>
          <?php $__currentLoopData = $row->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e($url(['category' => $sc->slug, 'page' => null])); ?>" class="sp-chip <?php echo e($chain->contains('slug',$sc->slug) ? 'is-active' : ''); ?>"><?php echo e($sc->name); ?></a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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

<?php $__env->startPush('js'); ?>
<script>
  // category chips: horizontal scroll on small screens (swipe, mouse drag, edge fades, active chip in view)
  document.querySelectorAll('.nv .sp-filters').forEach(function (row) {

    function updateFades() {
      var max = row.scrollWidth - row.clientWidth;
      row.classList.toggle('fade-start', row.scrollLeft > 4);
      row.classList.toggle('fade-end', max > 4 && row.scrollLeft < max - 4);
    }

    // bring the selected category into view
    var active = row.querySelector('.sp-chip.is-active');
    if (active && row.scrollWidth > row.clientWidth) {
      row.scrollLeft = Math.max(0, active.offsetLeft - row.offsetLeft - 20);
    }

    // click-and-drag with a mouse (touch devices already swipe natively)
    var down = false, moved = false, startX = 0, startLeft = 0;
    row.addEventListener('pointerdown', function (e) {
      if (e.pointerType !== 'mouse' || row.scrollWidth <= row.clientWidth) return;
      down = true; moved = false; startX = e.clientX; startLeft = row.scrollLeft;
    });
    window.addEventListener('pointermove', function (e) {
      if (!down) return;
      var dx = e.clientX - startX;
      if (!moved && Math.abs(dx) > 5) { moved = true; row.classList.add('is-dragging'); }
      if (moved) row.scrollLeft = startLeft - dx;
    });
    window.addEventListener('pointerup', function () {
      if (!down) return;
      down = false;
      setTimeout(function () { row.classList.remove('is-dragging'); }, 0);
    });
    // a drag must not open the chip link underneath
    row.addEventListener('click', function (e) { if (moved) { e.preventDefault(); moved = false; } }, true);

    row.addEventListener('scroll', updateFades, { passive: true });
    window.addEventListener('resize', updateFades);
    updateFades();
  });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(welcomeTheme().'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nasim/nuvesta/Nuvesta-Global/resources/views/welcome/products/latestProducts.blade.php ENDPATH**/ ?>