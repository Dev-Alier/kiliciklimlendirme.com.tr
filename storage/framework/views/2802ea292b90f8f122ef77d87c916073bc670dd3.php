<?php $__env->startSection('title'); ?>
    Hizmetlerimiz
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<!-- Product Section -->
<div id="product-section" class="product-section container-fluid no-padding" style="margin-top: 50px;padding-bottom: 100px">
    <!-- Container -->
    <div class="container">

        <div class="row">
            <div class="section-header">
                <h2><span class="uppercase"><?php echo e($catName); ?></span> Kategorisindeki Ürünler</h2>
                <img src="<?php echo e(asset('assets/client')); ?>/images/section-seprator.png" alt="section-seprator" />
            </div>

            <!-- Products -->
            <?php if(count($products) > 0): ?>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- Product -->
                <div class="col-md-3 text-center" style="padding:0">
                    <div style="margin:5px;box-shadow: 0px 1px 10px 3px gainsboro;">
                        <p style="padding: 15px 15px 0 15px">
                            <a href="<?php echo e(route('product.detail',$product->slug)); ?>" class="text-center">
                                <?php $__currentLoopData = App\Models\Image::where('product_id', $product->id)->get()->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <img src="<?php echo e(asset('/assets/images/products/' . $image->name)); ?>" alt="products"
                                    style="min-height: 300px">
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <hr>
                                    <h5 class="uppercase"><?php echo e($product->name); ?></h5>
                                    <span class="price"><?php echo e(number_format($product->price) . ' TL'); ?></span>
                                </a>
                            </p>
                        </div>
                </div>
                <!-- Product -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <div class="row bg-warning">
                <div class="col text-center">
                    <h2>Bu Kategoriye Ait Ürün Bulunamadı</h2>
                </div>
            </div>
            <?php endif; ?>
            <!-- Products /- -->
        </div><!-- Row /- -->
    </div><!-- Container /- -->
</div><!-- Product Section /- -->


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\my project\laravel\kiliciklimlendirme2\kiliciklimlendirme\resources\views/client/products/list.blade.php ENDPATH**/ ?>