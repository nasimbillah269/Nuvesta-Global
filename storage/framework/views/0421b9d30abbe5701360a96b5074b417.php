<?php $__currentLoopData = $emis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td>
        <input type="text" class="form-control ami-input"
            value="<?php echo e($emi->bank_name); ?>"
            data-id="<?php echo e($emi->id); ?>"
            data-field="bank_name"
            data-url="<?php echo e(route('admin.themeSettingAction',['ami-update'])); ?>" placeholder="Enter Bank Name">
    </td>

    <?php $__currentLoopData = [3,6,9,12,18,24,36]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <td>
        <input type="number" class="form-control ami-input monthChargeInput"
            value="<?php echo e($emi['month_'.$m]); ?>"
            data-id="<?php echo e($emi->id); ?>"
            data-field="month_<?php echo e($m); ?>"
            data-url="<?php echo e(route('admin.themeSettingAction',['ami-update'])); ?>">
    </td>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <td>
        <span class="badge badge-danger deleteAMI"
            data-id="<?php echo e($emi->id); ?>"
            data-url="<?php echo e(route('admin.themeSettingAction',['ami-delete'])); ?>"
            style="cursor:pointer;">
            <i class="fa fa-trash"></i>
        </span>
    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH D:\xampp\htdocs\nuvesta-globa\resources\views/admin/theme-setting/includes/emiList.blade.php ENDPATH**/ ?>