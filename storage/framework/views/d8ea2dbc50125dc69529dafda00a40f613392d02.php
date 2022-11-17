<?php foreach($attributes->onlyProps(['route']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['route']); ?>
<?php foreach (array_filter((['route']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="text-end pb-1 pr-3">
    <a href="<?php echo e(route($route)); ?>">
        <i class="fa fa-plus-circle fa-2x" style="color: green"></i>
    </a>
</div>
<?php /**PATH D:\projects\my project\laravel\kiliciklimlendirme2\kiliciklimlendirme\resources\views/components/circle-add-button.blade.php ENDPATH**/ ?>