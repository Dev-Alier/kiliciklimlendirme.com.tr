<?php $__env->startSection('title'); ?>
    Hakkımızda
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('admin.components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Hakkımızda
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            <?php echo app('translator')->get('translation.about'); ?>
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="col-xl-12">
        <div class="card">
            <div class="card-body" style="padding: 20px !important">
                <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('alerts.danger', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="text-center">
                    <h3>
                        <?php echo e(__('translation.edit_about')); ?>

                    </h3>
                </div>

                <form class="needs-validation" novalidate method="post" action="<?php echo e(route('post.about')); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo e($about->id); ?>" />
                    <textarea class="ckeditor" name="description"  <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo old('description') ?? $about->description; ?></textarea>

                    <div class="text-center mt-3">
                        <!-- button componentine address bilgisini gönderiyoruz. announcements->id var ise "güncelle" yazacak yoksa kaydet yazacak -->
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button','data' => ['value' => $about->id ? 'Güncelle' : 'Kaydet','class' => 'btn btn-primary saveButton']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($about->id ? 'Güncelle' : 'Kaydet'),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('btn btn-primary saveButton')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <?php echo $__env->make('admin.layouts.ckeditor-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\my project\laravel\kiliciklimlendirme2\kiliciklimlendirme\resources\views/admin/abouts/edit.blade.php ENDPATH**/ ?>