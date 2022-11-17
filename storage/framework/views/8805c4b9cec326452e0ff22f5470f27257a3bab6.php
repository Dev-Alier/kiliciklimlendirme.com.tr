<?php $__env->startSection('title'); ?>
    Ürün Kataloğu
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<iframe src="<?php echo e(asset('assets/pdf/'. $catalog)); ?>" height="1000"  width="100%"></iframe>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\my project\laravel\kiliciklimlendirme2\kiliciklimlendirme\resources\views/client/products/catalog.blade.php ENDPATH**/ ?>