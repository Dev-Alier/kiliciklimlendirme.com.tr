<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.contact'); ?>
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
            background: radial-gradient(#f0f0f063, transparent);
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <?php echo $address->maps; ?>

    </div>
    <div class="row contact-form">
        <div class="col-md-4">
            <p class="contact-icon">
                <i class="fa fa-phone fa-4x"></i>
                <p class="fs20">Telefon</p>
                <p class="fs16"><a href="tel:05050705701">05050705701</a></p>
            </p>
        </div>
        <div class="col-md-4">
            <p class="contact-icon">
                <i class="fa fa-map-marker fa-4x" aria-hidden="true"></i>
                <p class="fs20">Adres</p>
                <p class="fs16"><?php echo e($address->address .' '. $address->city.'/'.$address->province); ?></p>
            </p>
        </div>
        <div class="col-md-4">
            <p class="contact-icon">
                <i class="fa fa-envelope fa-4x" aria-hidden="true"></i>
                <p class="fs20">E posta</p>
                <p class="fs16"><a href="mailto:<?php echo e($address->email); ?>"><?php echo e($address->email); ?></a></p>
            </p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <!-- dashboard init -->
    <script src="<?php echo e(URL::asset('/assets/js/pages/dashboard.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/index.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\my project\laravel\kiliciklimlendirme2\kiliciklimlendirme\resources\views/client/contact.blade.php ENDPATH**/ ?>