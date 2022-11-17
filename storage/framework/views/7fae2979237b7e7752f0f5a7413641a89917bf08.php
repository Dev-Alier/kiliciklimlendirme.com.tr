<!-- Product Section -->
<div id="product-section" class="product-section container-fluid no-padding" style="margin-top: 50px">
    <!-- Container -->
    <div class="container">
        <div class="row">
            <!-- Section Header -->
            <div class="section-header">
                <h3 style="font-family: Arial, Helvetica, sans-serif">Vitrin Ürünlerimiz</h3>
                <img src="<?php echo e(asset('assets')); ?>/images/clients/section-seprator.png" alt="section-seprator" />
            </div><!-- Section Header /- -->

            <!-- Products -->
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- Product -->
                <div class="col-md-3 text-center" style="padding: 0">
                    <div style="margin:5px;box-shadow: 0px 1px 10px 3px gainsboro;">
                        <p>

                            <a href="<?php echo e(route('product.detail',$product->slug)); ?>" class="text-center">
                                <?php $__currentLoopData = App\Models\Image::where('product_id', $product->id)->get()->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <img src="<?php echo e(asset('/assets/images/products/' . $image->name)); ?>" alt="products"
                                    style="min-height: 300px">
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <h5 class="uppercase"><?php echo e($product->name); ?></h5>
                                    <span class="price"><?php echo e(number_format($product->price) . ' TL'); ?></span>
                                </a>
                            </p>
                        </div>
                </div>
                <!-- Product -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- Products /- -->
        </div><!-- Row /- -->
    </div><!-- Container /- -->
</div><!-- Product Section /- -->
<?php /**PATH D:\projects\my project\laravel\kiliciklimlendirme2\kiliciklimlendirme\resources\views/client/pages/showroom-products.blade.php ENDPATH**/ ?>