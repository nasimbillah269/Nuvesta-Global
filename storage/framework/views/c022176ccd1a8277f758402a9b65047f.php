
<?php
  $pcHasAlt = $product->bannerFile !== null;
  // square / landscape photos (e.g. catalogue shots with logo + spec text) are shown whole instead of cropped
  $pcImg    = $product->image();
  $pcSize   = is_file(public_path($pcImg)) ? @getimagesize(public_path($pcImg)) : false;
  $pcFit    = ($pcSize && $pcSize[1] > 0 && $pcSize[0] / $pcSize[1] >= 0.9) ? 'is-contain' : '';
?>
<a href="<?php echo e(route('productView',$product->slug?:Str::slug($product->name))); ?>" class="nv-pcard <?php echo e($pcHasAlt ? 'has-alt' : ''); ?> <?php echo e($pcFit); ?>">
  <div class="nv-pcard-media">
    <img src="<?php echo e(asset($pcImg)); ?>" alt="<?php echo e($product->name); ?>" class="nv-pcard-img nv-pcard-img-main" loading="lazy">
    <?php if($pcHasAlt): ?>
      <img src="<?php echo e(asset($product->banner())); ?>" alt="" aria-hidden="true" class="nv-pcard-img nv-pcard-img-alt" loading="lazy">
    <?php endif; ?>
  </div>
</a>
<?php /**PATH /home/nasim/nuvesta/Nuvesta-Global/resources/views/welcome//products/includes/productCard.blade.php ENDPATH**/ ?>