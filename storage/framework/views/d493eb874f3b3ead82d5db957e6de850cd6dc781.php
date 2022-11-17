<?php $__env->startSection('title'); ?>
    <?php echo e($blog->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <!-- Container -->
    <div class="container">
        <!-- Content Area -->
        <div class="content-area blog-section blog-post col-md-8 col-sm-8 col-xs-12">
            <article class="type-post text-center">
                <div class="entry-cover">
                    <img src="<?php echo e(asset('assets/images/blogs') . '/' . $blog->image); ?>" alt="<?php echo e($blog->title); ?>"
                        style="width: 100%">
                </div>
                <div class="blog-content">
                    <h3 class="entry-title"><span><?php echo e($blog->title); ?></span></h3>
                    <hr>
                    <div class="entry-content">
                        <span>
                            <?php echo $blog->description; ?>

                        </span>
                    </div>
                </div>
            </article>
        </div>
        <!-- Content Area /- -->
        <!-- Widget Area -->
        <div class="col-md-4 col-sm-4 col-xs-12 widget-area">
            <aside class="widget widget_latest_post">
                <h3 class="widget-title uppercase">Son Yazılar</h3>
                <?php $__currentLoopData = $otherBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="latest-box">
                        <div class="post-box">
                            <a href="<?php echo e(route('blog.detail', $blog->slug)); ?>"><img
                                    src="<?php echo e(asset('assets/images/blogs') . '/' . $blog->image); ?>" alt="<?php echo e($blog->title); ?>"
                                    width="70"></a>
                            <h5><a href="<?php echo e(route('blog.detail', $blog->slug)); ?>"
                                    title="need max shop."><?php echo e($blog->title); ?></a></h5>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </aside>
        </div><!-- Widget Area /- -->
    </div><!-- Container /- -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\my project\laravel\kiliciklimlendirme2\kiliciklimlendirme\resources\views/client/blogs/blog-detail.blade.php ENDPATH**/ ?>