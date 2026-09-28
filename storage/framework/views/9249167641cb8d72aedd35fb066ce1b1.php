
<?php
  $headerMenu   = menu('Header Menus');
  $headerButton = menu('Header Button');
  $currentUrl   = url()->current();
  $quotePage    = pageTemplate('Get A Quote');
  $quoteUrl     = $quotePage ? route('pageView',$quotePage->slug) : url('get-a-quote');

  $menuUrl = function ($item) {
      $link = $item->menuLink();
      return $link ? asset($link) : '#';
  };
  $isActive = function ($item) use (&$isActive, $menuUrl, $currentUrl) {
      if (rtrim($menuUrl($item), '/') === rtrim($currentUrl, '/')) {
          return true;
      }
      foreach ($item->subMenus as $child) {
          if ($isActive($child)) return true;
      }
      return false;
  };
  $target = fn ($item) => $item->target ? 'target="_blank" rel="noopener"' : '';

  $searchChips = \App\Models\Attribute::where('type',0)->where('status','active')
      ->where(fn($q) => $q->whereNull('parent_id')->orWhere('parent_id',0))
      ->orderBy('view')->limit(6)->get(['id','name','slug']);
?>

<!-- ================= HEADER ================= -->
<header class="nv site-header">
  <nav class="navbar navbar-expand-xl">
    <div class="container">
      <a class="navbar-brand brand" href="<?php echo e(route('index')); ?>">
        <img src="<?php echo e(asset(general()->logo())); ?>" alt="<?php echo e(general()->title ?: 'Nuvesta Global LLC'); ?>" class="brand-logo">
      </a>

      <div class="d-flex align-items-center gap-2 order-xl-3">
        <?php if($headerButton && $headerButton->subMenus->count()): ?>
          <?php $__currentLoopData = $headerButton->subMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $btn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e($menuUrl($btn)); ?>" <?php echo $target($btn); ?> class="nv-btn <?php echo e($loop->first ? 'nv-btn-navy' : 'nv-btn-outline'); ?> d-none d-sm-inline-flex"><?php echo e($btn->menuName()); ?></a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
          <a href="<?php echo e($quoteUrl); ?>" class="nv-btn nv-btn-navy d-none d-sm-inline-flex">Enquiry</a>
        <?php endif; ?>
        <button type="button" class="header-search" data-nv-search-open aria-label="Search" aria-haspopup="dialog" aria-controls="nvSearch"><i class="bi bi-search"></i></button>
        <button class="navbar-toggler nv-burger" type="button" data-nv-drawer-open aria-controls="nvDrawer" aria-expanded="false" aria-label="Open menu">
          <span></span><span></span><span></span>
        </button>
      </div>

      <div class="collapse navbar-collapse justify-content-center" id="mainNav">
        <ul class="navbar-nav">
          <?php if($headerMenu && $headerMenu->subMenus->count()): ?>
            <?php $__currentLoopData = $headerMenu->subMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($item->subMenus->count()): ?>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle <?php echo e($isActive($item) ? 'active' : ''); ?>" href="<?php echo e($menuUrl($item)); ?>" data-bs-toggle="dropdown" aria-expanded="false"><?php echo e($item->menuName()); ?></a>
                  <ul class="dropdown-menu">
                    <?php $__currentLoopData = $item->subMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li><a class="dropdown-item <?php echo e($isActive($sub) ? 'active' : ''); ?>" href="<?php echo e($menuUrl($sub)); ?>" <?php echo $target($sub); ?>><?php echo e($sub->menuName()); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
                </li>
              <?php else: ?>
                <li class="nav-item"><a class="nav-link <?php echo e($isActive($item) ? 'active' : ''); ?>" href="<?php echo e($menuUrl($item)); ?>" <?php echo $target($item); ?>><?php echo e($item->menuName()); ?></a></li>
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php else: ?>
            <li class="nav-item"><a class="nav-link <?php echo e(request()->routeIs('index') ? 'active' : ''); ?>" href="<?php echo e(route('index')); ?>">Home</a></li>
          <?php endif; ?>

        </ul>
      </div>
    </div>
  </nav>
</header>

<!-- ================= MOBILE DRAWER ================= -->
<div class="nv nv-drawer" id="nvDrawer" role="dialog" aria-modal="true" aria-label="Main menu" hidden>
  <div class="nv-drawer-backdrop" data-nv-drawer-close></div>
  <aside class="nv-drawer-panel">
    <div class="nv-drawer-head">
      <a href="<?php echo e(route('index')); ?>" class="brand"><img src="<?php echo e(asset(general()->logo())); ?>" alt="<?php echo e(general()->title ?: 'Nuvesta Global LLC'); ?>" class="brand-logo"></a>
      <button type="button" class="nv-drawer-x" data-nv-drawer-close aria-label="Close menu"><i class="bi bi-x-lg"></i></button>
    </div>

    <div class="nv-drawer-body">
      <button type="button" class="nv-drawer-search" data-nv-search-open data-nv-drawer-close>
        <i class="bi bi-search"></i><span>Search products…</span>
      </button>

      <nav aria-label="Mobile">
        <?php if($headerMenu && $headerMenu->subMenus->count()): ?>
          <?php echo $__env->make(general()->theme.'.layouts.partials.drawerItems', ['items' => $headerMenu->subMenus, 'level' => 0], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php else: ?>
          <ul class="nv-dm-list"><li class="nv-dm-item is-active"><div class="nv-dm-row"><a class="nv-dm-link" href="<?php echo e(route('index')); ?>">Home</a></div></li></ul>
        <?php endif; ?>
      </nav>
    </div>

    <div class="nv-drawer-foot">
      <div class="nv-drawer-btns">
        <?php if($headerButton && $headerButton->subMenus->count()): ?>
          <?php $__currentLoopData = $headerButton->subMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $btn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e($menuUrl($btn)); ?>" <?php echo $target($btn); ?> class="nv-btn <?php echo e($loop->first ? 'nv-btn-navy' : 'nv-btn-outline'); ?>"><?php echo e($btn->menuName()); ?> <i class="bi bi-arrow-right"></i></a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
          <a href="<?php echo e($quoteUrl); ?>" class="nv-btn nv-btn-navy">Request an RFQ <i class="bi bi-arrow-right"></i></a>
        <?php endif; ?>
      </div>
      <ul class="nv-drawer-contact">
        <?php if(general()->email): ?><li><i class="bi bi-envelope"></i><a href="mailto:<?php echo e(general()->email); ?>"><?php echo e(general()->email); ?></a></li><?php endif; ?>
        <?php if(general()->mobile): ?><li><i class="bi bi-telephone"></i><a href="tel:<?php echo e(preg_replace('/[^\d+]/','',general()->mobile)); ?>"><?php echo e(general()->mobile); ?></a></li><?php endif; ?>
      </ul>
      <div class="nv-drawer-social">
        <?php $__currentLoopData = ['facebook_link'=>'facebook','linkedin_link'=>'linkedin','instagram_link'=>'instagram','youtube_link'=>'youtube','twitter_link'=>'twitter-x']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field => $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if(general()->$field): ?><a href="<?php echo e(general()->$field); ?>" target="_blank" rel="noopener" aria-label="<?php echo e(ucfirst($icon)); ?>"><i class="bi bi-<?php echo e($icon); ?>"></i></a><?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </aside>
</div>

<!-- ================= SEARCH POPUP ================= -->
<div class="nv nv-search" id="nvSearch" role="dialog" aria-modal="true" aria-label="Search" hidden
     data-endpoint="<?php echo e(route('liveSearch')); ?>">
  <div class="nv-search-backdrop" data-nv-search-close></div>
  <div class="nv-search-panel">
    <form class="nv-search-form" action="<?php echo e(route('search')); ?>" method="get" autocomplete="off" role="search">
      <i class="bi bi-search nv-search-icon" aria-hidden="true"></i>
      <input type="search" name="search" class="nv-search-input" placeholder="Search products, categories, insights…"
             aria-label="Search" aria-autocomplete="list" aria-controls="nvSearchResults" value="<?php echo e(request()->routeIs('search') ? request('search') : ''); ?>">
      <span class="nv-search-spinner" aria-hidden="true"></span>
      <button type="button" class="nv-search-clear" aria-label="Clear search"><i class="bi bi-x-circle-fill"></i></button>
      <button type="button" class="nv-search-close" data-nv-search-close aria-label="Close search"><kbd>Esc</kbd></button>
    </form>

    <div class="nv-search-body">
      
      <div class="nv-search-intro">
        <?php if($searchChips->count()): ?>
        <p class="nv-search-label">Popular categories</p>
        <div class="nv-search-chips">
          <?php $__currentLoopData = $searchChips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <a href="<?php echo e(route('productCategory',$chip->slug?:'no-title')); ?>" class="nv-chip"><i class="bi bi-arrow-up-right"></i><?php echo e($chip->name); ?></a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>
        <p class="nv-search-hint"><i class="bi bi-lightbulb"></i> Type at least 2 characters — results appear instantly. Press <kbd>Enter</kbd> to see all results.</p>
      </div>

      
      <div class="nv-search-results" id="nvSearchResults" role="listbox" aria-live="polite"></div>
    </div>

    <div class="nv-search-foot">
      <span><kbd>↑</kbd><kbd>↓</kbd> to navigate</span>
      <span><kbd>Enter</kbd> to select</span>
      <span><kbd>Esc</kbd> to close</span>
    </div>
  </div>
</div>

<?php $__env->startPush('js'); ?>
<script src="<?php echo e(asset('welcome/assets/js/nv-search.js')); ?>"></script>
<script src="<?php echo e(asset('welcome/assets/js/nv-drawer.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/nithostrb/public_html/nuvesta.nit.hostrb.com/resources/views/welcome/layouts/header.blade.php ENDPATH**/ ?>