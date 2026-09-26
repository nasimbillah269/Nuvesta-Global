
<?php if($paginator->hasPages()): ?>
<div class="nv nv-pagination">
  <nav class="sp-pager" aria-label="Pages">
    <?php if($paginator->onFirstPage()): ?>
      <span class="is-disabled" aria-disabled="true"><i class="bi bi-chevron-left"></i><b class="sp-pager-txt">Prev</b></span>
    <?php else: ?>
      <a href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev" aria-label="Previous page"><i class="bi bi-chevron-left"></i><b class="sp-pager-txt">Prev</b></a>
    <?php endif; ?>

    <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if(is_string($element)): ?>
        <span class="is-gap"><?php echo e($element); ?></span>
      <?php endif; ?>
      <?php if(is_array($element)): ?>
        <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($page == $paginator->currentPage()): ?>
            <span class="is-current" aria-current="page"><?php echo e($page); ?></span>
          <?php else: ?>
            <a href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
          <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php if($paginator->hasMorePages()): ?>
      <a href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next" aria-label="Next page"><b class="sp-pager-txt">Next</b><i class="bi bi-chevron-right"></i></a>
    <?php else: ?>
      <span class="is-disabled" aria-disabled="true"><b class="sp-pager-txt">Next</b><i class="bi bi-chevron-right"></i></span>
    <?php endif; ?>
  </nav>
  <p class="sp-pager-info">Page <?php echo e($paginator->currentPage()); ?> of <?php echo e($paginator->lastPage()); ?><?php if(method_exists($paginator,'total')): ?> · <?php echo e($paginator->total()); ?> items <?php endif; ?></p>
</div>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\nuvesta-globa\resources\views/pagination.blade.php ENDPATH**/ ?>