<!-- Slider Section 1 -->
<div id="home-revslider" class="slider-section container-fluid no-padding d-xs-none">
    <!-- START REVOLUTION SLIDER 5.0 -->
    <div class="rev_slider_wrapper  d-xs-none">
        <div id="home-slider1" class="rev_slider" data-version="5.0">
            <ul>
                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li data-transition="zoomout" data-slotamount="default" data-easein="easeInOut"
                        data-easeout="easeInOut" data-masterspeed="2000" data-rotate="0" data-fstransition="fade"
                        data-fsmasterspeed="1500" data-fsslotamount="7" style="text-align: center">
                        <img src="<?php echo e(asset('assets')); ?>/images/sliders/<?php echo e($slider->image); ?>"
                            alt="slider" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>
        </div><!-- END REVOLUTION SLIDER -->
    </div><!-- END OF SLIDER WRAPPER -->
    <div class="goto-next"><a href="#category-section"><i class="icon icon-Mouse bounce"></i></a></div>
</div><!-- Slider Section 1 /- -->
<?php /**PATH D:\projects\my project\laravel\kiliciklimlendirme2\kiliciklimlendirme\resources\views/client/pages/slider.blade.php ENDPATH**/ ?>