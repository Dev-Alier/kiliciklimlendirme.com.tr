<section class="w100 faaliyet open">
    <!-- Section Header -->
    <div class="section-header">
        <h3 style="font-family: Arial, Helvetica, sans-serif">Hizmetlerimiz</h3>
        <img src="<?php echo e(asset('assets')); ?>/images/clients/section-seprator.png" alt="section-seprator" />
    </div>
    <!-- Section Header /- -->
    <div class="w100 homeFaaliyet">
        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="faaliyetBox" style="max-height: 250px">
                <div class="hoverHref">
                    <span class="hrefTitle uppercase"><?php echo e($service->name); ?></span>
                    <span class="hrefText">
                        <?php echo $service->description; ?>

                    </span>
                    <span class="incele"><a href="/hizmetler/<?php echo e($service->slug); ?>" style="text-decoration: none;color:white"> Detay</a></span>
                </div>
                <div class="fimg lazyload" data-0="background-position:15% 0px" data-end="background-position:50% 0px"
                    style="background-image: url('<?php echo e(asset('assets/images/service_categories/' . $service->image)); ?>');">
                    <img class="lazyload" alt="Kılıç Mühendislik faaliyet alanları"
                        src="<?php echo e(asset('assets/images/service_categories/' . $service->image)); ?>">
                </div>
                <div class="fTitle uppercase"><?php echo e($service->name); ?></div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</section>
<?php /**PATH D:\projects\my project\laravel\kiliciklimlendirme2\kiliciklimlendirme\resources\views/client/pages/services.blade.php ENDPATH**/ ?>