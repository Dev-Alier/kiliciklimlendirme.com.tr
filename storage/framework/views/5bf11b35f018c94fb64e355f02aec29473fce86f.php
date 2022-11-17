<?php if($errors->any()): ?>
<div class="alert alert-danger alert-dismissible show text-start" role="alert" style="width: 100%;color: black;">
    <ul style="text-align:start">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>
<?php /**PATH D:\projects\my project\laravel\kiliciklimlendirme2\kiliciklimlendirme\resources\views/alerts/danger.blade.php ENDPATH**/ ?>