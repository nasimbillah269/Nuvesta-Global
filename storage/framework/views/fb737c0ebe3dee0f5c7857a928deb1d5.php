
<ul class="nv-dm-list <?php echo e($level ? 'nv-dm-sub' : ''); ?>">
  <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
      $children = $item->subMenus;
      $active   = $isActive($item);
      $link     = $menuUrl($item);
      $subId    = 'nvDm'.$item->id;
    ?>
    <li class="nv-dm-item <?php echo e($active ? 'is-active' : ''); ?> <?php echo e($children->count() ? 'has-children' : ''); ?> <?php echo e($children->count() && $active ? 'is-open' : ''); ?>">
      <div class="nv-dm-row">
        <?php if($children->count() && ($link === '#' || str_ends_with($link, '/#'))): ?>
          
          <button type="button" class="nv-dm-link" data-nv-dm-toggle aria-expanded="<?php echo e($active ? 'true' : 'false'); ?>" aria-controls="<?php echo e($subId); ?>"><?php echo e($item->menuName()); ?></button>
        <?php else: ?>
          <a class="nv-dm-link" href="<?php echo e($link); ?>" <?php echo $target($item); ?> <?php if($active): ?> aria-current="page" <?php endif; ?>><?php echo e($item->menuName()); ?></a>
        <?php endif; ?>

        <?php if($children->count()): ?>
          <button type="button" class="nv-dm-toggle" data-nv-dm-toggle aria-expanded="<?php echo e($active ? 'true' : 'false'); ?>" aria-controls="<?php echo e($subId); ?>" aria-label="Toggle <?php echo e($item->menuName()); ?> submenu">
            <span class="nv-pm" aria-hidden="true"></span>
          </button>
        <?php endif; ?>
      </div>

      <?php if($children->count()): ?>
        <div class="nv-dm-collapse" id="<?php echo e($subId); ?>">
          <div class="nv-dm-collapse-inner">
            <?php echo $__env->make(general()->theme.'.layouts.partials.drawerItems', ['items' => $children, 'level' => $level + 1], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          </div>
        </div>
      <?php endif; ?>
    </li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH D:\xampp\htdocs\nuvesta-globa\resources\views/welcome/layouts/partials/drawerItems.blade.php ENDPATH**/ ?>