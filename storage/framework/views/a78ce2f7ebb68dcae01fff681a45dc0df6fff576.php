<?php foreach($attributes->onlyProps(['class','value']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['class','value']); ?>
<?php foreach (array_filter((['class','value']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
    <button class="btn <?php echo e($class); ?>" style="background-color: <?php echo e($setting->button_color ?? ''); ?>; color: <?php echo e($setting->button_text_color ?? 'white'); ?>" type="submit"><?php echo e($value); ?>

    </button>
<?php /**PATH D:\projects\my project\laravel\kiliciklimlendirme2\kiliciklimlendirme\resources\views/components/button.blade.php ENDPATH**/ ?>