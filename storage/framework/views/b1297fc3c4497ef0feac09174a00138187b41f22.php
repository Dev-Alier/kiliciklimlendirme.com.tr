<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.HomePage'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('/https://www.ucay.com.tr/assets/libs/admin-resources/admin-resources.min.css')); ?>"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo e(URL::asset('/https://www.ucay.com.tr/assets/css/style.css')); ?>" />
    <style>
        .main-content {
            margin-left: auto !important;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- BEGIN: Slider -->
    <?php echo $__env->make('client.pages.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- BEGIN: Slider -->



    <!-- BEGIN: Blog Section -->
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.blog','data' => ['blogs' => $blogs,'showTitle' => true]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('blog'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['blogs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($blogs),'showTitle' => true]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <!-- END: Blog Section -->


    <!-- BEGIN: Services Section -->
    <?php echo $__env->make('client.pages.showroom-products', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- END: Showroom Products Section -->

    <!-- BEGIN: Showroom Products Section -->
    <?php echo $__env->make('client.pages.services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- END: Services Section -->


    <!-- BEGIN: Showroom Products Section -->
    <?php echo $__env->make('client.pages.solution-partners', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- END: Services Section -->



<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.2.2/swiper-bundle.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\my project\laravel\kiliciklimlendirme2\kiliciklimlendirme\resources\views/client/index.blade.php ENDPATH**/ ?>