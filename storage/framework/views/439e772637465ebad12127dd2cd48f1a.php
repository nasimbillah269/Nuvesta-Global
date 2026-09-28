<!-- ================= HERO ================= -->
<section class="hero">
  <?php
    $heroSlider = slider('Front Page Slider');
    $heroSlides = $heroSlider ? $heroSlider->subSliders()->whereHas('imageFile')->get()
                    ->filter(function($slide){ return file_exists(public_path($slide->image())); })->values() : collect();
  ?>
  <?php if($heroSlides->count() > 0): ?>
  <div class="hero-img hero-img-slider" data-aos="zoom-out" data-aos-duration="1400">
    <?php $__currentLoopData = $heroSlides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i=>$slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="hero-slide <?php echo e($i==0?'active':''); ?>" style="background-image:url('<?php echo e(asset($slide->image())); ?>')" role="img" aria-label="<?php echo e($slide->name); ?>"></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  <?php else: ?>
  <div class="hero-img" data-aos="zoom-out" data-aos-duration="1400" style="background-image:url('<?php echo e(asset('welcome/images/home/hero.jpg')); ?>')"></div>
  <?php endif; ?>
  <div class="container">
    <div class="hero-content">
      <p class="eyebrow" data-aos="fade-up">NUVESTA GLOBAL LLC</p>
      <h1 data-aos="fade-up" data-aos-delay="100">Global Apparel Sourcing & Product Development</h1>
      <p class="lead-text" data-aos="fade-up" data-aos-delay="200">Connecting international buyers with reliable apparel manufacturing in Bangladesh.</p>
      <ul class="dot-list" data-aos="fade-up" data-aos-delay="300">
        <li>Product Development</li><li>Materials Sourcing</li><li>Costing</li><li class="before-br">Factory Selection</li>
        <li class="br" aria-hidden="true"></li>
        <li>Production</li><li>Quality</li><li>Shipment</li><br><br>
      </ul>
      <div class="hero-btns" data-aos="fade-up" data-aos-delay="400">
        <?php
          $productsPage = pageTemplate('Latest Products');
          $servicePage  = pageTemplate('Service');
        ?>
        <a href="<?php echo e($productsPage ? route('pageView',$productsPage->slug) : url('products-all')); ?>" class="nv-btn nv-btn-accent">Explore Products <i class="bi bi-arrow-right"></i></a>
        <a href="<?php echo e($servicePage ? route('pageView',$servicePage->slug) : url('service')); ?>" class="nv-btn nv-btn-light">Explore Service <i class="bi bi-arrow-right"></i></a>
      </div>
      <div class="hero-meta" data-aos="fade-up" data-aos-delay="500">
        <i class="bi bi-globe2"></i>
        <span>Bangladesh Sourcing Hub For Global Buyer Support</span>
      </div>
    </div>
  </div>
</section>

<?php if($heroSlides->count() > 1): ?>
<script>
(function(){
  var slides = document.querySelectorAll('.hero-img-slider .hero-slide');
  var current = 0;
  setInterval(function(){
    slides[current].classList.remove('active');
    current = (current + 1) % slides.length;
    slides[current].classList.add('active');
  }, 5000);
})();
</script>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\nuvesta-globa\resources\views/welcome/layouts/slider.blade.php ENDPATH**/ ?>