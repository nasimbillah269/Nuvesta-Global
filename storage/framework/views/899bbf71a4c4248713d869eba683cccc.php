
<?php if($paginator->hasPages()): ?>
<nav class="sp-pager" aria-label="Pages">
  <?php if($paginator->onFirstPage()): ?>
    <span class="is-disabled"><i class="bi bi-chevron-left"></i></span>
  <?php else: ?>
    <a href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev" aria-label="Previous page"><i class="bi bi-chevron-left"></i></a>
  <?php endif; ?>

  <?php
    $from = max(1, $paginator->currentPage() - 2);
    $to   = min($paginator->lastPage(), $paginator->currentPage() + 2);
  ?>
  <?php if($from > 1): ?>
    <a href="<?php echo e($paginator->url(1)); ?>">1</a>
    <?php if($from > 2): ?><span class="is-gap">…</span><?php endif; ?>
  <?php endif; ?>
  <?php $__currentLoopData = $paginator->getUrlRange($from, $to); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($page == $paginator->currentPage()): ?>
      <span class="is-current" aria-current="page"><?php echo e($page); ?></span>
    <?php else: ?>
      <a href="<?php echo e($link); ?>"><?php echo e($page); ?></a>
    <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php if($to < $paginator->lastPage()): ?>
    <?php if($to < $paginator->lastPage() - 1): ?><span class="is-gap">…</span><?php endif; ?>
    <a href="<?php echo e($paginator->url($paginator->lastPage())); ?>"><?php echo e($paginator->lastPage()); ?></a>
  <?php endif; ?>

  <?php if($paginator->hasMorePages()): ?>
    <a href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next" aria-label="Next page"><i class="bi bi-chevron-right"></i></a>
  <?php else: ?>
    <span class="is-disabled"><i class="bi bi-chevron-right"></i></span>
  <?php endif; ?>
</nav>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\nuvesta-globa\resources\views/welcome/layouts/partials/nvPager.blade.php ENDPATH**/ ?>