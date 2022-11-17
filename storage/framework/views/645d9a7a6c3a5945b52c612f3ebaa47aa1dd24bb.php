<div class="middel-header">
    <!-- Container -->
    <div class="container" style="display: flex;align-items: center">
        <!-- Logo Block -->
        <div class="col-md-4 col-sm-6 col-xs-12 logo-block">
            
        </div><!-- Logo Block /- -->
        <!-- Search Block -->
        <div class="col-md-5 col-sm-6 col-xs-6 search-block">
            <img src="<?php echo e(asset('assets')); ?>/images/<?php echo e($setting->logo); ?>" alt="<?php echo e($setting->site_name); ?>">

        </div><!-- Search Block /- -->
        <!-- Menu Icon -->
        <div class="col-md-3 col-sm-6 col-xs-6 menu-icon">

        </div><!-- Menu Icon /- -->
    </div><!-- Container /- -->
</div>
<div class="container-fluid no-padding menu-block">
    <!-- Container -->
    <div class="container-fluid no-padding">
        <!-- nav -->
        <nav class="navbar navbar-default ow-navigation">

            <div class="navbar-collapse collapse" id="navbar">
                <ul class="nav navbar-nav">

                    <li class="<?php echo e(Request::is('/') ? 'active' : ''); ?>">
                        <a href="/">Anasayfa</a>
                    </li>
                    <li class="dropdown<?php echo e(Request::is('hizmetler') ? 'active' : ''); ?>">
                        <a href="#" title="Hizmetler" class="dropdown-toggle" role="button" aria-haspopup="true"
                            aria-expanded="false">Hizmetler</a>
                        <i class="ddl-switch fa fa-angle-down"></i>
                        <ul class="dropdown-menu">
                            <?php $__currentLoopData = $allServiceCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serviceCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(route('service.list',$serviceCategory->slug)); ?>"><?php echo e($serviceCategory->name); ?> </a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                    <li class="dropdown<?php echo e(Request::is('urunler') ? 'active' : ''); ?>">
                        <a href="#" title="Hizmetler" class="dropdown-toggle" role="button" aria-haspopup="true"
                            aria-expanded="false">Ürünler</a>
                        <i class="ddl-switch fa fa-angle-down"></i>
                        <ul class="dropdown-menu">
                            <?php $__currentLoopData = $allProductCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(route('product.list',$productCategory->slug)); ?>"><?php echo e($productCategory->name); ?> </a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                    <li class="<?php echo e(Request::is('hakkimizda') ? 'active' : ''); ?>">
                        <a href="/hakkimizda">Hakkımızda</a>
                    </li>
                    <li class="<?php echo e(Request::is('cozum-ortaklari') ? 'active' : ''); ?>">
                        <a href="/cozum-ortaklari">Çözüm Ortaklarımız</a>
                    </li>
                    <li class="<?php echo e(Request::is('/blog') ? 'active' : ''); ?>">
                        <a href="/blog">Blog</a>
                    </li>
                    <li class="<?php echo e(Request::is('/iletisim') ? 'active' : ''); ?>">
                        <a href="/iletisim">İletişim</a>
                    </li>

                </ul>
            </div>
            <!--/.nav-collapse -->
        </nav><!-- nav /- -->
        <!-- Search Box -->
        <div class="search-box">
            <span><i class="icon_close"></i></span>
            <form><input type="text" class="form-control" placeholder="Enter a keyword and press enter..." /></form>
        </div><!-- Search Box /- -->
    </div><!-- Container /- -->
</div>
<?php /**PATH D:\projects\my project\laravel\kiliciklimlendirme2\kiliciklimlendirme\resources\views/client/layouts/navbar.blade.php ENDPATH**/ ?>