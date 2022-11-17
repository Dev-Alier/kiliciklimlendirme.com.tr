<?php $__env->startSection('title'); ?>
    Çözüm Ortakları
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Çözüm Ortaklarımız
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container" style="margin-top: 50px">
    <div class="section-header">
        <h3>Çözüm Ortaklarımız</h3>
        <p>Hizmet Sürecimizde Birlikte Çalıştığımız Firmalar</p>
        <img src="<?php echo e(asset('assets/client')); ?>/images/section-seprator.png" alt="section-seprator" />
    </div>
    <div class="row solution-partners">
        <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-2">
            <div class="card" style="padding-bottom: 50px">
                <div class="card-content partners">
                    <img src="<?php echo e(asset('assets/images/solution_partners/'.$partner->image)); ?>" style="max-height: 200px" alt="">
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\my project\laravel\kiliciklimlendirme2\kiliciklimlendirme\resources\views/client/solution-partners/list.blade.php ENDPATH**/ ?>