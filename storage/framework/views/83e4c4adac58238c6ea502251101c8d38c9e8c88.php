<?php foreach($attributes->onlyProps(['data']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['data']); ?>
<?php foreach (array_filter((['data']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<style>
    table tr>td{
        padding-top: 10px
    }
</style>
<div class="row">
    <table class="form-table">
        <?php $__currentLoopData = json_decode($data, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <?php if($d['type'] == 'hidden'): ?>
                    <input type="hidden" name="<?php echo e($d['name']); ?>" value="<?php echo e($d['value']); ?>">
                <?php else: ?>
                <td>
                    <b><?php echo e($d['label']); ?></b>
                </td>
                <td>
                    <?php switch($d['type']):
                        case ('text'): ?>
                        <?php case ('password'): ?>
                            <input type="<?php echo e($d['type']); ?>" name="<?php echo e($d['name']); ?>" value="<?php echo e(old($d['name']) ? old($d['name']) : $d['value']); ?>" class="<?php echo e($d['class']); ?><?php $__errorArgs = [$d['name']];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" style="margin: 12px 0 !important;" <?php echo e(!empty($d['attributes']) ? $d['attributes'] : ''); ?>>
                        <?php break; ?>

                        <?php case ('email'): ?>
                            <input type="email" name="<?php echo e($d['name']); ?>" value="<?php echo e(old($d['name']) ? old($d['name']) : $d['value']); ?>" class="<?php echo e($d['class']); ?>  <?php $__errorArgs = [$d['name']];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" <?php echo e(!empty($d['attributes']) ? $d['attributes'] : ''); ?>>
                        <?php break; ?>

                        <?php case ('select'): ?>
                            <div>
                                <select name="<?php echo e($d['name']); ?>" name="<?php echo e($d['name']); ?>" class="<?php echo e($d['class']); ?>">
                                    <?php $__currentLoopData = $d['options']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $opt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($opt['key']); ?>" <?php echo e($d['value'] == $opt['key'] ? 'selected' : ''); ?> <?php echo e(!empty($d['attributes']) ? $d['attributes'] : ''); ?>> <?php echo e($opt['value']); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        <?php break; ?>

                        <?php case ('radio'): ?>
                            <?php $__currentLoopData = $d['options']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div style="float: left;margin-right: 20px;">
                                    <input class="<?php echo e($d['class']); ?> <?php $__errorArgs = [$d['name']];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="radio" name="<?php echo e($d['name']); ?>" value="<?php echo e(old($key) ? old($key) : ''); ?>" <?php echo e($d['value'] == $opt['key'] ? 'checked' : ''); ?> <?php echo e(!empty($d['attributes']) ? $d['attributes'] : ''); ?>>
                                    <label class="form-check-label" for="<?php echo e($d['name']); ?>"> <?php echo e(old($d['name']) ? old($d['name']) : $d['value']); ?> </label>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php break; ?>

                        <?php case ('checkbox'): ?>
                            <?php $__currentLoopData = $d['options']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div style="float: left;margin-right: 20px;">
                                    <input class="form-check-input <?php echo e($d['class']); ?>" type="checkbox" value="<?php echo e($key); ?>" name="<?php echo e($d['name']); ?>[]" <?php echo e(!empty($d['attributes']) ? $d['attributes'] : ''); ?>>
                                    <label class="form-check-label" for="<?php echo e($key); ?>"> <?php echo e($d['options'][0]['value']); ?> </label>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php break; ?>

                        <?php case ('textarea'): ?>
                            <textarea class="<?php echo e($d['class']); ?>" name="<?php echo e($d['name']); ?>" <?php echo e(!empty($d['attributes']) ? $d['attributes'] : ''); ?> <?php $__errorArgs = [$d['name']];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo old($d['name']) ? old($d['name']) : $d['value']; ?></textarea>
                        <?php break; ?>

                        <?php case ('image'): ?>
                            <div style="display: flex;align-items:center">
                                <input type="file" accept="image/*" onchange="setImage(this);" class="form-control" style="margin-right: 20px" name="<?php echo e($d['name']); ?>" <?php echo e(!empty($d['attributes']) ? $d['attributes'] : ''); ?> value="<?php echo e(asset($d['imagePath'] . '/' . $d['image'])); ?>">
                                <input type="hidden" name="<?php echo e($d['name']); ?>" value="<?php echo e($d['image']); ?>">
                                <img name="img" id="img" src="<?php echo e($d['image'] != '' ? asset($d['imagePath'] . '/' . $d['image']) : asset('/assets/images/default.png')); ?>" width="100" height="100" alt="">
                            </div>
                        <?php break; ?>

                        <?php case ('colorpicker'): ?>
                            <div class="btnColor">
                                <input type="text" class="<?php echo e($d['class']); ?>" name="<?php echo e($d['name']); ?>" oninput="updateColor('<?php echo e($d['class']); ?>','color',this.value)" value="<?php echo e(old($d['name']) ? old($d['name']) : $d['value']); ?>" oninput="updateColor('<?php echo e($d['class']); ?>','color',this.value)" style="background-color: <?php echo e($d['value']); ?>">
                                <div class="colorpicker">
                                    <input type="color" id="section1ParagraphColor" class="<?php echo e($d['class']); ?>" name="color" value="<?php echo e($d['value']); ?>" onInput="updateColor('<?php echo e($d['class']); ?>','color',this.value)">
                                </div>
                            </div>
                        <?php break; ?>

                        <?php case ('date'): ?>
                            <div>
                                <input class="<?php echo e($d['class']); ?>" name="<?php echo e($d['name']); ?>" type="date" value="<?php echo e(old($d['name']) ? old($d['name']) : $d['value']); ?>" id="example-date-input">
                            </div>
                        <?php break; ?>
                    <?php endswitch; ?>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>

    <?php $__env->startSection('scripts'); ?>

    <?php $__env->stopSection(); ?>
<?php /**PATH D:\projects\my project\laravel\kiliciklimlendirme2\kiliciklimlendirme\resources\views/components/form.blade.php ENDPATH**/ ?>