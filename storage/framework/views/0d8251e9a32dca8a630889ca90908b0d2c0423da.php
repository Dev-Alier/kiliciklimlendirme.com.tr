<!-- Latest Blog -->
<div class="blog-section latest-blog container-fluid" style="margin-top: 50px">
    <!-- Container -->
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <h3>Hizmetlerimiz</h3>
            <p>Kılıç İklimlendirme Hizmetleri</p>
            <img src="assets/images/clients/section-seprator.png" alt="section-seprator" />
        </div><!-- Section Header /- -->
        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 col-sm-6 col-xs-6">
            <div class="type-post">
                <div class="entry-cover">
                    <a href="blog-post.html"><img src="<?php echo e(asset('assets')); ?>/images/service_categories/<?php echo e($service->image); ?>" style="height: 190px" alt="alarko hizmetler"></a>
                </div>
                <div class="blog-content">
                    <h3 class="entry-title"><a href="blog-post.html" title="new Collectios are imported In Our shop."><?php echo e($service->name); ?></a></h3>

                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div><!-- Container /- -->
</div><!-- Latest Blog /- -->
<?php /**PATH D:\projects\my project\laravel\kiliciklimlendirme2\kiliciklimlendirme\resources\views/client/pages/index-blogs.blade.php ENDPATH**/ ?>