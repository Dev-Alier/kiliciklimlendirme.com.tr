<?php $__env->startSection('title'); ?>
    Hizmetlerimiz
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="service-section latest-blog container-fluid"
        style="padding-top: 25px;
background: #ebebebb9; margin-bottom:15px; padding-bottom:25px">
        <!-- Container -->
        <div class="container">
            <div class="row">
                <div class="section-header">
                    <h2><span class="uppercase"><?php echo e($serviceName); ?></span> Kategorisindeki Hizmetler</h2>
                    <img src="<?php echo e(asset('assets/client')); ?>/images/section-seprator.png" alt="section-seprator" />
                </div>
                <?php if(count($services) > 0): ?>
                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="type-post">
                                <div class="entry-cover" style="display: flex;justify-content: center;">
                                    <a href="<?php echo e(route('service.detail', $service->slug)); ?>"><img
                                            src="<?php echo e(asset('assets/images/services') . '/' . $service->image); ?>"
                                            alt="<?php echo e($service->slug); ?>" style="height: 191px"></a>
                                    <span class="post-date"><a href="#"><i
                                                class="fa fa-calendar-o"></i><?php echo e($service->created_at->translatedFormat('F Y')); ?></a></span>
                                </div>
                                <div class="blog-content">
                                    <h3 class="entry-title"><a href="blog-post.html"
                                            title="new Collectios are imported In Our shop."><?php echo e($service->name); ?></a></h3>

                                    <div class="entry-content">
                                        <p>
                                            <?php echo Str::substr($service->description, 0, 200); ?>

                                        </p>
                                        <a href="<?php echo e(route('service.detail', $service->slug)); ?>" title="Read More"
                                            class="read-more">Devamını Oku<i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <div class="row bg-warning">
                        <div class="col text-center">
                            <h2>Bu Kategoriye Ait Hizmet Bulunamadı</h2>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

        </div><!-- Container /- -->
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\my project\laravel\kiliciklimlendirme2\kiliciklimlendirme\resources\views/client/services/list.blade.php ENDPATH**/ ?>