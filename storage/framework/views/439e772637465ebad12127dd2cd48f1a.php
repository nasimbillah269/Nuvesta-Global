<!-- ================= HERO ================= -->
<section class="hero">
  <div class="hero-img" data-aos="zoom-out" data-aos-duration="1400" style="background-image:url('<?php echo e(asset('welcome/images/home/hero.jpg')); ?>')"></div>
  <div class="container">
    <div class="hero-content">
      <p class="eyebrow" data-aos="fade-up">NUVESTA GLOBAL LLC</p>
      <h1 data-aos="fade-up" data-aos-delay="100">Global Apparel Sourcing.<br><span>Built on Experience.</span></h1>
      <p class="lead-text" data-aos="fade-up" data-aos-delay="200">Connecting international buyers with reliable apparel manufacturing in Bangladesh.</p>
      <ul class="dot-list" data-aos="fade-up" data-aos-delay="300">
        <li>Product Development</li><li>Fabric Sourcing</li><li>Costing</li><li class="before-br">Factory Selection</li>
        <li class="br" aria-hidden="true"></li>
        <li>Production</li><li>Quality</li><li>Shipment</li>
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
        <span>Bangladesh Sourcing Hub</span>
        <span>Lithuania / European Connection</span>
        <span>Global Buyer Support</span>
      </div>
    </div>
  </div>
</section>
<?php /**PATH D:\xampp\htdocs\nuvesta-globa\resources\views/welcome/layouts/slider.blade.php ENDPATH**/ ?>