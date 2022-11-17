<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.about'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('/assets/libs/admin-resources/admin-resources.min.css')); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(URL::asset('/assets/css/style.css')); ?>">
    <style>
        .main-content {
            margin-left: auto !important;
        }

        .card-header {
            border-radius: 0 0 50% 50% !important;
            padding: 35px !important;
            background-image: url('assets/images/bg-about.jpg') !important;
            background-position: center center !important;
            background-size: cover !important;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="about-section container-fluid no-padding" style="background: linear-gradient(179deg, #e2e2e2, transparent)">
    <!-- Container -->
    <div class="container">
        <!-- Section Header -->
        <div class="section-header" style="margin-top: 50px">
            <h3><span class="text-uppercase" style="color: #b6795f">Kılıç İklimlendirme</span> Hakkında</h3>

            <img src="<?php echo e(asset('assets')); ?>/client/images/section-seprator.png" alt="section-seprator">
        </div><!-- Section Header /- -->
        <div class="col-md-6 col-sm-6 col-xs-6">
            <img src="<?php echo e(asset('assets')); ?>/client/images/about.png" alt="about">
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6" style="margin-top: -28px">
            <div class="about-content">
              <p><?php echo $about->description; ?></p>
            </div>
        </div>
    </div><!-- Container /- -->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <!-- dashboard init -->
    <script src="<?php echo e(URL::asset('/assets/js/pages/dashboard.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/index.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\my project\laravel\kiliciklimlendirme2\kiliciklimlendirme\resources\views/client/about.blade.php ENDPATH**/ ?>