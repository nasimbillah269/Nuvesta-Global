<?php if($products->count() > 0): ?>

<div class="row-cols-lg-4 row-cols-md-4 row-cols-2 grid-section view-option row g-3 g-xl-4">
  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div> 
    <?php echo $__env->make(welcomeTheme().'.products.includes.productCard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>


<div class="paginationPart">
    <?php echo e($products->links('pagination')); ?>

</div>

<?php else: ?>


<div>
    <p style="text-align: center;font-size: 24px;color: gray;margin-top: 100px;">No Product found</p>
</div>



<?php endif; ?><?php /**PATH D:\xampp\htdocs\nuvesta-globa\resources\views/welcome/products/includes/productsAll.blade.php ENDPATH**/ ?>