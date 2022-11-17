<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="<?php echo e($setting->meta_description); ?>">
        <meta name="keywords" content="<?php echo e($setting->meta_keywords); ?>">
        <meta name="author" content="Ali ER">

        <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e($setting->site_name); ?></title>

        <!-- Standard Favicon -->
        <link rel="icon" type="image/x-icon" href="<?php echo e(asset('assets')); ?>/images/logo.png" />

        <!-- For iPhone 4 Retina display: -->
        <link rel="apple-touch-icon-precomposed" href="<?php echo e(asset('assets/client')); ?>/images//apple-touch-icon-114x114-precomposed.png">

        <!-- For iPad: -->
        <link rel="apple-touch-icon-precomposed" href="<?php echo e(asset('assets/client')); ?>/images//apple-touch-icon-72x72-precomposed.png">

        <!-- For iPhone: -->
        <link rel="apple-touch-icon-precomposed" href="<?php echo e(asset('assets/client')); ?>/images//apple-touch-icon-57x57-precomposed.png">

        <!-- Library - Google Font Familys -->
        <link href="https://fonts.googleapis.com/css?family=Arizonia|Crimson+Text:400,400i,600,600i,700,700i|Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/client')); ?>/revolution/css/settings.css">

        <!-- RS5.0 Layers and Navigation Styles -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/client')); ?>/revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/client')); ?>/revolution/css/navigation.css">

        <!-- Library - Bootstrap v3.3.5 -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/client')); ?>/libraries/lib.css">

        <!-- Custom - Common CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/client')); ?>/css/plugins.css">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/client')); ?>/css/navigation-menu.css">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/client')); ?>/css/shortcode.css">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/client')); ?>/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/client')); ?>/style.css">


        <!--[if lt IE 9]>
            <script src="js/html5/respond.min.js"></script>
        <![endif]-->

    </head>

    <body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
        <div class="main-container">
            <!-- Loader -->
            <div id="site-loader" class="load-complete">
                <div class="loader">
                    <div class="loader-inner ball-clip-rotate">
                        <div></div>
                    </div>
                </div>
            </div><!-- Loader /- -->

            <!-- Header -->
            <header class="header-section container-fluid no-padding">
                <!-- Menu Block -->
                <?php echo $__env->make('client.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <!-- Menu Block /- -->
            </header><!-- Header /- -->

            <main>
                <?php echo $__env->yieldContent('content'); ?>
            </main>

            <!-- Footer Main -->
            <?php echo $__env->make('client.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Footer Main /- -->

        </div>


        <!-- JQuery v1.12.4 -->
        <script src="<?php echo e(asset('assets/client')); ?>/js/jquery.min.js"></script>

        <!-- Library - Js -->
        <script src="<?php echo e(asset('assets/client')); ?>/libraries/lib.js"></script>

        <script src="<?php echo e(asset('assets/client')); ?>/libraries/jquery.countdown.min.js"></script>

        <!-- RS5.0 Core JS Files -->
        <script type="text/javascript" src="<?php echo e(asset('assets/client')); ?>/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/client')); ?>/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/client')); ?>/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/client')); ?>/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/client')); ?>/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/client')); ?>/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/client')); ?>/revolution/js/extensions/revolution.extension.actions.min.js"></script>

        <!-- Library - Theme JS -->
        <script src="<?php echo e(asset('assets/client')); ?>/js/functions.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/js/custom.js"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>



    </body>
    </html>
<?php /**PATH D:\projects\my project\laravel\kiliciklimlendirme2\kiliciklimlendirme\resources\views/client/layouts/master.blade.php ENDPATH**/ ?>