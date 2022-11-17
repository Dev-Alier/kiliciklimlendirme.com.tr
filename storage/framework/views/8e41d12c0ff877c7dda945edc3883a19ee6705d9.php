<?php foreach($attributes->onlyProps(['blogs','showTitle']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['blogs','showTitle']); ?>
<?php foreach (array_filter((['blogs','showTitle']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="blog-section latest-blog container-fluid" style="padding-top: 25px;
background: #ebebebb9; margin-bottom:15px; padding-bottom:25px">
    <!-- Container -->
    <div class="container">
        <?php if($showTitle): ?>
        <!-- Section Header -->
        <div class="section-header">
            <h3>BLOG</h3>
            <p>Hizmetlerimiz ve Çalışma Alanlarımız Hakkında Bilgi Paylaşımı</p>
            <img src="<?php echo e(asset('assets/client')); ?>/images/section-seprator.png" alt="section-seprator" />
        </div><!-- Section Header /- -->
        <?php endif; ?>
        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="type-post">
                    <div class="entry-cover" style="display: flex;justify-content: center;">
                        <a href="<?php echo e(route('blog.detail', $blog->slug)); ?>"><img src="<?php echo e(asset('assets/images/blogs') . '/' . $blog->image); ?>"
                                alt="<?php echo e($blog->slug); ?>" style="height: 191px" ></a>
                        <span class="post-date"><a href="#"><i
                                    class="fa fa-calendar-o"></i><?php echo e($blog->created_at->translatedFormat('F Y')); ?></a></span>
                    </div>
                    <div class="blog-content">
                        <h3 class="entry-title"><a href="blog-post.html"
                                title="<?php echo e($blog->title); ?>"><?php echo e($blog->title); ?></a></h3>

                        <div class="entry-content">
                            <p>
                                <?php echo Str::substr($blog->description, 0, 200); ?>

                            </p>
                            <a href="<?php echo e(route('blog.detail', $blog->slug)); ?>" title="Read More" class="read-more">Devamını Oku<i
                                    class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if($showTitle): ?>
        <div class="row allBlog">
            <div class="col-12" style="text-align: end">
                <a type="button" href="/blog" class="btn btn-warning uppercase">Tüm Yazıları Gör <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <?php endif; ?>
    </div><!-- Container /- -->
</div>
<?php /**PATH D:\projects\my project\laravel\kiliciklimlendirme2\kiliciklimlendirme\resources\views/components/blog.blade.php ENDPATH**/ ?>