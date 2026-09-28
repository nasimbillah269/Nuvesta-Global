<!-- ================= FOOTER ================= -->
<?php
  $pg = fn ($template, $fallback) => ($p = pageTemplate($template)) ? route('pageView',$p->slug) : url($fallback);
?>
<footer class="nv site-footer">
  <div class="container">
    <div class="footer-grid">
      <div>
        <a href="<?php echo e(route('index')); ?>" class="brand">
          <img src="<?php echo e(asset('welcome/images/home/WhatsApp Image 2026-09-27 at 3.13.55 PM.jpg')); ?>" alt="<?php echo e(general()->title ?: 'Nuvesta Global LLC'); ?>" class="brand-logo">
        </a>
        <p class="footer-tag">Global Apparel Sourcing &amp; Product Development</p>
      </div>

      <div class="footer-col">
        <h6>Quick Links</h6>
        <ul>
          <li><a href="<?php echo e(route('index')); ?>">Home</a></li>
          <li><a href="<?php echo e($pg('About Us','about-us')); ?>">About Us</a></li>
          <li><a href="<?php echo e($pg('Latest Products','products-all')); ?>">Products</a></li>
          <li><a href="#">Sourcing</a></li>
          <li><a href="#">Quality &amp; Compliance</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h6>More</h6>
        <ul>
          <li><a href="#">Europe</a></li>
          <li><a href="<?php echo e($pg('Latest Blog','blogs')); ?>">Insights</a></li>
          <li><a href="<?php echo e($pg('Contact Us','contact-us')); ?>">Contact</a></li>
          <li><a href="<?php echo e($pg('Get A Quote','get-a-quote')); ?>">Request an RFQ</a></li>
          <li><a href="<?php echo e(url('privacy-policy')); ?>">Privacy Policy</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h6>Contact Us</h6>
        <ul class="contact">
          <?php if(general()->email): ?>
          <li><i class="bi bi-envelope"></i><a href="mailto:<?php echo e(general()->email); ?>"><?php echo e(general()->email); ?></a></li>
          <?php endif; ?>
          <?php if(general()->mobile): ?>
          <li><i class="bi bi-whatsapp"></i><a href="https://wa.me/<?php echo e(preg_replace('/\D/','',general()->mobile)); ?>" target="_blank" rel="noopener"><?php echo e(general()->mobile); ?></a></li>
          <?php endif; ?>
          <li><i class="bi bi-geo-alt"></i><span>Dhaka, Bangladesh</span></li>
          <li><i class="bi bi-geo-alt"></i><span>Vilnius, Lithuania (Europe)</span></li>
          <?php if(general()->linkedin_link): ?>
          <li><i class="bi bi-linkedin"></i><a href="<?php echo e(general()->linkedin_link); ?>" target="_blank" rel="noopener">LinkedIn</a></li>
          <?php endif; ?>
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
<?php /**PATH D:\xampp\htdocs\nuvesta-globa\resources\views/welcome/layouts/footer.blade.php ENDPATH**/ ?>