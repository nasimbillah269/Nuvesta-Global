 <?php $__env->startSection('title'); ?>
<title><?php echo e(websiteTitle($term!=='' ? 'Search: '.$term : 'Search')); ?></title>
<?php $__env->stopSection(); ?> <?php $__env->startSection('SEO'); ?>
<meta name="title" property="og:title" content="<?php echo e(general()->meta_title); ?>" />
<meta name="description" property="og:description" content="<?php echo general()->meta_description; ?>" />
<meta name="keywords" content="<?php echo e(general()->meta_keyword); ?>" />
<meta name="image" property="og:image" content="<?php echo e(asset(general()->logo())); ?>" />
<meta name="url" property="og:url" content="<?php echo e(route('search')); ?>" />
<meta name="robots" content="noindex, follow" />
<link rel="canonical" href="<?php echo e(route('search')); ?>">
<?php $__env->stopSection(); ?>

<?php
  // escape first, then wrap the matched term in <mark>
  $hl = function ($text) use ($term) {
      $safe = e($text);
      if ($term === '') return $safe;
      return preg_replace('/('.preg_quote(e($term), '/').')/iu', '<mark>$1</mark>', $safe);
  };
  $activeCategory = request('category');
  $sort = request('sort', 'newest');
  $sorts = ['newest' => 'Newest first', 'oldest' => 'Oldest first', 'name_asc' => 'Name: A – Z', 'name_desc' => 'Name: Z – A'];
  $url = fn (array $params) => route('search', array_filter(array_merge(request()->only(['search','category','sort']), $params), fn($v) => $v !== null && $v !== ''));
?>

<?php $__env->startSection('contents'); ?>
<div class="nv nv-sp">

  <!-- ================= HEAD ================= -->
  <section class="sp-head">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="sp-crumbs">
          <li><a href="<?php echo e(route('index')); ?>">Home</a></li>
          <li aria-current="page">Search</li>
        </ol>
      </nav>

      <h1>
        <?php if($term!==''): ?>
          Results for <span>“<?php echo e($term); ?>”</span>
        <?php else: ?>
          Browse all products
        <?php endif; ?>
      </h1>
      <p class="sp-sub">
        <?php echo e($totalMatching); ?> <?php echo e(Str::plural('product',$totalMatching)); ?> found
        <?php if($blogs->count() || $pages->count()): ?>
          · <?php echo e($blogs->count()+$pages->count()); ?> related <?php echo e(Str::plural('article',$blogs->count()+$pages->count())); ?>

        <?php endif; ?>
      </p>

      <form class="sp-form" action="<?php echo e(route('search')); ?>" method="get" role="search">
        <i class="bi bi-search" aria-hidden="true"></i>
        <input type="search" name="search" value="<?php echo e($term); ?>" placeholder="Search products, categories, SKU…" aria-label="Search">
        <?php if(request('sort')): ?><input type="hidden" name="sort" value="<?php echo e(request('sort')); ?>"><?php endif; ?>
        <button type="submit" class="nv-btn nv-btn-accent">Search</button>
      </form>
    </div>
  </section>

  <section class="sp-main">
    <div class="container">

      <?php if($totalMatching): ?>
      <!-- ================= TOOLBAR ================= -->
      <div class="sp-toolbar">
        <div class="sp-filters" role="group" aria-label="Filter by category">
          <a href="<?php echo e($url(['category' => null, 'page' => null])); ?>" class="sp-chip <?php echo e(!$activeCategory ? 'is-active' : ''); ?>">All <span><?php echo e($totalMatching); ?></span></a>
          <?php $__currentLoopData = $facets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e($url(['category' => $facet->slug, 'page' => null])); ?>" class="sp-chip <?php echo e($activeCategory==$facet->slug ? 'is-active' : ''); ?>"><?php echo e($facet->name); ?> <span><?php echo e($facet->total); ?></span></a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <form class="sp-sort" action="<?php echo e(route('search')); ?>" method="get">
          <input type="hidden" name="search" value="<?php echo e($term); ?>">
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
      <p class="sp-count">Showing <?php echo e($products->firstItem()); ?>–<?php echo e($products->lastItem()); ?> of <?php echo e($products->total()); ?></p>
      <?php endif; ?>
      <?php endif; ?>

      <!-- ================= PRODUCTS ================= -->
      <?php if($products->count()): ?>
        <div class="row g-3 g-lg-4 row-cols-2 row-cols-md-3 row-cols-xl-4">
          <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php $ctg = $product->productCategories->first(); ?>
          <div class="col" data-aos="fade-up" data-aos-delay="<?php echo e(($loop->index % 4) * 70); ?>">
            <a href="<?php echo e(route('productView',$product->slug?:Str::slug($product->name))); ?>" class="sp-card">
              <div class="sp-card-media <?php echo e($product->bannerFile ? 'has-alt' : ''); ?>">
                <img src="<?php echo e(asset($product->image())); ?>" alt="<?php echo e($product->name); ?>" loading="lazy" class="sp-img-main">
                <?php if($product->bannerFile): ?>
                  <img src="<?php echo e(asset($product->banner())); ?>" alt="" aria-hidden="true" loading="lazy" class="sp-img-alt">
                <?php endif; ?>
                <?php if($product->created_at && $product->created_at->gt(now()->subDays(60))): ?>
                  <span class="sp-badge">New</span>
                <?php endif; ?>
                <span class="sp-card-cta">View details <i class="bi bi-arrow-right"></i></span>
              </div>
              <div class="sp-card-body">
                <?php if($ctg): ?><span class="sp-card-cat"><?php echo e($ctg->name); ?></span><?php endif; ?>
                <h3 class="sp-card-title"><?php echo $hl($product->name); ?></h3>
                <?php if($product->sku_code): ?><span class="sp-card-sku">SKU: <?php echo $hl($product->sku_code); ?></span><?php endif; ?>
              </div>
            </a>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <?php if($products->hasPages()): ?>
        <nav class="sp-pager" aria-label="Search results pages">
          <?php if($products->onFirstPage()): ?>
            <span class="is-disabled"><i class="bi bi-chevron-left"></i></span>
          <?php else: ?>
            <a href="<?php echo e($products->previousPageUrl()); ?>" rel="prev" aria-label="Previous page"><i class="bi bi-chevron-left"></i></a>
          <?php endif; ?>
          <?php $__currentLoopData = $products->getUrlRange(max(1,$products->currentPage()-2), min($products->lastPage(),$products->currentPage()+2)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($page == $products->currentPage()): ?>
              <span class="is-current" aria-current="page"><?php echo e($page); ?></span>
            <?php else: ?>
              <a href="<?php echo e($link); ?>"><?php echo e($page); ?></a>
            <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php if($products->hasMorePages()): ?>
            <a href="<?php echo e($products->nextPageUrl()); ?>" rel="next" aria-label="Next page"><i class="bi bi-chevron-right"></i></a>
          <?php else: ?>
            <span class="is-disabled"><i class="bi bi-chevron-right"></i></span>
          <?php endif; ?>
        </nav>
        <?php endif; ?>

      <?php else: ?>
        <!-- ================= EMPTY ================= -->
        <div class="sp-empty">
          <div class="sp-empty-icon"><i class="bi bi-search"></i></div>
          <h2>No products found<?php echo e($term!=='' ? ' for “'.$term.'”' : ''); ?></h2>
          <p>Try checking the spelling, using fewer or more general words, or browse one of our categories below.</p>
          <?php $popular = \App\Models\Attribute::where('type',0)->where('status','active')->where(fn($q)=>$q->whereNull('parent_id')->orWhere('parent_id',0))->orderBy('view')->limit(8)->get(['name','slug']); ?>
          <?php if($popular->count()): ?>
          <div class="sp-empty-chips">
            <?php $__currentLoopData = $popular; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a href="<?php echo e(route('productCategory',$c->slug?:'no-title')); ?>" class="sp-chip"><?php echo e($c->name); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          <?php endif; ?>
          <a href="<?php echo e(route('index')); ?>" class="nv-btn nv-btn-outline"><i class="bi bi-arrow-left"></i> Back to home</a>
        </div>
      <?php endif; ?>

      <!-- ================= OTHER CONTENT ================= -->
      <?php if($blogs->count() || $pages->count()): ?>
      <div class="sp-more">
        <h2 class="sp-more-title">Related content</h2>
        <div class="row g-3">
          <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-6 col-xl-3">
            <a href="<?php echo e(route('blogView',$blog->slug?:'no-title')); ?>" class="sp-link-card">
              <span class="sp-link-icon"><i class="bi bi-journal-text"></i></span>
              <span><small>Insight · <?php echo e($blog->created_at->format('d M Y')); ?></small><strong><?php echo $hl($blog->name); ?></strong></span>
            </a>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-6 col-xl-3">
            <a href="<?php echo e($pg->template=='Front Page' ? route('index') : route('pageView',$pg->slug?:'no-title')); ?>" class="sp-link-card">
              <span class="sp-link-icon"><i class="bi bi-file-earmark-text"></i></span>
              <span><small>Page</small><strong><?php echo $hl($pg->name); ?></strong></span>
            </a>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
      <?php endif; ?>

    </div>
  </section>

  <!-- ================= CTA ================= -->
  <section class="sp-cta">
    <div class="container">
      <div class="sp-cta-box">
        <div>
          <h2>Can’t find exactly what you need?</h2>
          <p>Send us your tech pack or reference — we’ll source it from our Bangladesh factory network.</p>
        </div>
        <a href="<?php echo e(url('contact-us')); ?>" class="nv-btn nv-btn-accent">Request a Quote <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
  </section>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(welcomeTheme().'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\nuvesta-globa\resources\views/welcome/search.blade.php ENDPATH**/ ?>