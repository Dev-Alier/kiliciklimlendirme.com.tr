
<!-- Solution Partners -->
<div class="clients container-fluid">
    <!-- Container -->
    <div class="container" style="margin-top: 57%">
        <!-- Section Header -->
        <div class="section-header">
            <h3>Çözüm Ortakları</h3>
            <img src="<?php echo e(asset('assets/client')); ?>/images/section-seprator.png" alt="section-seprator" />
        </div><!-- Section Header /- -->
        <div class="clients-carousel">
            <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-12 item">
                    <div class="pages" title="client">
                        <div class="page"
                            style="height: 100px;width: 100px;background-image: url('<?php echo e(asset('assets/images/solution_partners/'.$partner->image)); ?>')">
                            
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div><!-- Container /- -->
</div>
<!-- Solution Partners -->
<?php /**PATH D:\projects\my project\laravel\kiliciklimlendirme2\kiliciklimlendirme\resources\views/client/pages/solution-partners.blade.php ENDPATH**/ ?>