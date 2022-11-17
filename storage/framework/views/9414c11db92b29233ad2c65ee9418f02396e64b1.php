<?php $__env->startSection('title'); ?>
    <?php echo e($product->name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <!-- Shop Single -->
    <div class="shop-single container-fluid no-padding" style="margin-top: 150px">
        <!-- Container -->
        <div class="container">
            <div class="product-views">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="carousel-item">
                        <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item">
                                <img src="<?php echo e(asset('assets')); ?>/images/products/<?php echo e($image->name); ?>"
                                    alt="<?php echo e($image->name); ?>" height="200" width="200"  />
                            </div>
                            <?php if(count($product->images) == 1): ?>
                                <div class="item">
                                    <img src="<?php echo e(asset('assets')); ?>/images/products/<?php echo e($image->name); ?>"
                                        alt="<?php echo e($image->name); ?>" />
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
                <!-- Entry Summary -->
                <div class="col-md-6 col-sm-6 col-xs-12 entry-summary" style="font-size:25px">
                    <h3 class="product_title" style="font-size: 25px"><?php echo e($product->name); ?></h3>
                    <hr style="border-top: 1px solid rgb(102, 102, 102)">
                    <p class="stock in-stock uppercase" style="color: <?php echo e($product->stock ? 'green' : 'darkred'); ?>;font-weight:bold;font-size:17px"><span style="font-weight: 500">Stok Durumu:</span> <?php echo e($product->stock ? 'Stokta Var' : 'Stokta Yok'); ?></p>
                    <p class="stock in-stock mt15" style="font-size: 20px"><span>Ürün Kodu:</span> <?php echo e($product->sku); ?></p>

                    <span class="price mt15"><?php echo e(number_format($product->price). ' TL'); ?></span>
                    <div class="mt15">
                        <a href="https:/wa.me/905050705701" target="_blank" class="uppercase">Whatsapp Üzerinden Bilgi Alın</a>
                    </div>
                    <div class="mt15 stock" style="font-size:18px">
                        <span> Ürün Dökümanı:</span>
                        <a href="<?php echo e(route('detail.catalog',$product->slug)); ?>" target="_blank"> <?php echo e($product->catalog); ?></a>
                    </div>
                </div><!-- Entry Summary /- -->
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 description">
                <h5>Ürün Açıklaması</h5>
                <p>
                <?php echo $product->description; ?>

                </p>
            </div>

        </div><!-- Container /- -->
    </div><!-- Shop Single /- -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\my project\laravel\kiliciklimlendirme2\kiliciklimlendirme\resources\views/client/products/detail.blade.php ENDPATH**/ ?>