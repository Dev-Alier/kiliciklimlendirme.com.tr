<?php $__env->startSection('title'); ?>
    <?php echo e($service->name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="blog-section latest-blog container-fluid"
        style="background: #ebebebb9; margin-bottom:15px; padding-bottom:25px">
        <!-- Container -->
        <div class="container">
            <div class="row">
                <h3 class="entry-title uppercase"><?php echo e($service->name); ?></h3>
                    <hr style="border-top:1px solid rgb(35, 35, 35)">
            </div>
            <div class="row">
                   <div class="col-12">
                <div class="type-post">
                    <div class="entry-cover" style="display: flex;justify-content: center;">
                        <a href="<?php echo e(route('service.detail', $service->slug)); ?>"><img
                                src="<?php echo e(asset('assets/images/services') . '/' . $service->image); ?>"
                                alt="<?php echo e($service->slug); ?>"></a>
                    </div>
                    <div class="blog-content">
                        <div class="entry-content">
                            <p>
                                <?php echo Str::substr($service->description, 0, 200); ?>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            </div>

        </div><!-- Container /- -->
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\my project\laravel\kiliciklimlendirme2\kiliciklimlendirme\resources\views/client/services/detail.blade.php ENDPATH**/ ?>