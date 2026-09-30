<!-- ================= FOOTER ================= -->

<?php
  $gs = general();

  // quick links: [label, page template, fallback name]
  $quickLinks = collect([['Home', 'Front Page']]);
  foreach ([['About Us'], ['Sourcing & Services', 'Service'], ['Latest Blog'], ['Contact Us']] as $templates) {
      $page = collect($templates)->map(fn ($t) => pageTemplate($t))->filter()->first();
      if ($page && $page->status == 'active') {
          $quickLinks->push([$page->name, $page]);
      }
  }

  $footerCategories = \App\Models\Attribute::where('type',0)->where('status','active')
      ->where(fn($q) => $q->whereNull('parent_id')->orWhere('parent_id',0))
      ->orderByDesc('fetured')->orderBy('view')->orderBy('name')
      ->limit(8)->get(['id','name','slug']);

  // "Bangladesh Office: House 33, …" -> ['Bangladesh Office', 'House 33, …']
  $addresses = collect([$gs->address_one, $gs->address_two])->filter()->map(function ($a) {
      $parts = explode(':', $a, 2);
      return count($parts) == 2 ? [trim($parts[0]), trim($parts[1])] : [null, trim($a)];
  });

  $validLink = fn ($l) => $l && $l !== '#' && filter_var($l, FILTER_VALIDATE_URL);
  // Facebook, X, Instagram and LinkedIn are always shown; YouTube / Pinterest only when a link is set
  $socials = collect([
      ['facebook_link',  'bi-facebook',  'Facebook',  true],
      ['twitter_link',   'bi-twitter-x', 'X (Twitter)', true],
      ['instagram_link', 'bi-instagram', 'Instagram', true],
      ['linkedin_link',  'bi-linkedin',  'LinkedIn',  true],
      ['youtube_link',   'bi-youtube',   'YouTube',   false],
      ['pinterest_link', 'bi-pinterest', 'Pinterest', false],
  ])->map(fn ($s) => [$validLink($gs->{$s[0]}) ? $gs->{$s[0]} : null, $s[1], $s[2], $s[3]])
    ->filter(fn ($s) => $s[0] || $s[3]);
?>
<footer class="nv site-footer">
  <div class="container">
    <div class="footer-grid">
      <div>
        <a href="<?php echo e(route('index')); ?>" class="brand">
          <img src="<?php echo e(asset($gs->footerLogo())); ?>" alt="<?php echo e($gs->title ?: 'Nuvesta Global LLC'); ?>" class="brand-logo">
        </a>
        <p class="footer-tag">Global Apparel Sourcing &amp; Product Development .</p>
        <?php if($socials->count()): ?>
        <div class="footer-social">
          <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$url, $icon, $label]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <a href="<?php echo e($url ?: '#'); ?>" <?php if($url): ?> target="_blank" rel="noopener" <?php endif; ?> aria-label="<?php echo e($label); ?>" title="<?php echo e($label); ?>"><i class="bi <?php echo e($icon); ?>"></i></a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>
      </div>

      <div class="footer-col">
        <h6>Quick Links</h6>
        <ul>
          <?php $__currentLoopData = $quickLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$label, $page]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><a href="<?php echo e($page === 'Front Page' ? route('index') : route('pageView',$page->slug ?: 'no-title')); ?>"><?php echo e($label); ?></a></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>

      <div class="footer-col">
        <h6>Products</h6>
        <ul>
          <?php $__empty_1 = true; $__currentLoopData = $footerCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ctg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          <li><a href="<?php echo e(route('productCategory',$ctg->slug ?: 'no-title')); ?>"><?php echo e($ctg->name); ?></a></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
          <li><a href="<?php echo e(($p = pageTemplate('Latest Products')) ? route('pageView',$p->slug) : url('products-all')); ?>">All Products</a></li>
          <?php endif; ?>
        </ul>
      </div>

      <div class="footer-col">
        <h6>Contact Us</h6>
        <ul class="contact">
          <?php if($gs->email): ?>
          <li><i class="bi bi-envelope"></i><a href="mailto:<?php echo e($gs->email); ?>"><?php echo e($gs->email); ?></a></li>
          <?php endif; ?>
          <?php if($gs->mobile): ?>
          <li><i class="bi bi-whatsapp"></i><a href="https://wa.me/<?php echo e(preg_replace('/\D/','',$gs->mobile)); ?>" target="_blank" rel="noopener"><?php echo e($gs->mobile); ?></a></li>
          <?php endif; ?>
          <?php $__currentLoopData = $addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$label, $address]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="addr"><i class="bi bi-geo-alt"></i><span><?php if($label): ?><strong><?php echo e($label); ?></strong><?php endif; ?><?php echo e($address); ?></span></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>

      <div class="footer-col footer-map">
        <img src="<?php echo e(asset('welcome/images/home/worldmap.png')); ?>" alt="" aria-hidden="true">
        <div class="footer-regions"><span>Bangladesh</span><span>Lithuania / Europe</span><span>Global Markets</span></div>
        <p class="copyright">&copy; <?php echo e(date('Y')); ?> Nuvesta Global LLC. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<?php /**PATH /home/nasim/nuvesta/Nuvesta-Global/resources/views/welcome/layouts/footer.blade.php ENDPATH**/ ?>