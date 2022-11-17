<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Ürün Ekle-Düzenle'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('assets/libs/dropzone/dropzone.min.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('admin.components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Ürünler
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            <?php echo e($product->id ? __('Ürünü Düzenle') : __('Yeni Ürün Ekle')); ?>

        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>


    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <?php echo $__env->make('alerts.danger', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="text-center">
                    <h3>
                        <?php echo e($product->id ? __('Ürünü Düzenle') : __('Ürünü Ekle')); ?>

                    </h3>
                </div>
                <form class="needs-validation" novalidate method="post" action="<?php echo e(route('add.product.post')); ?>"
                    enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo e($product->id); ?>" />
                    <?php echo csrf_field(); ?>

                    <div class="row mt-5">
                        <?php if($product->id): ?>
                            <?php $__currentLoopData = App\Models\Image::where('product_id', $product->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-2 text-center" id="image-<?php echo e($image->id); ?>">
                                    <img src="<?php echo e(asset('/assets/images/products/' . $image->name)); ?>" alt=""
                                        width="150" height="150">
                                    <p class="text-center mt-2">
                                        <button class="btn btn-sm btn-danger" type="button"
                                            onclick="removeImage(<?php echo e($image->id); ?>)"><i class="fa fa-trash"></i></button>
                                    </p>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>

                    <div class="row mt-5">

                        <table class="form-table" style="width: 100%;">
                            <tbody>
                                <tr>
                                    <td style="width: 15%;">
                                        <label for="pdf">Katalog</label>
                                    </td>
                                    <td>
                                        <div style="display: flex;align-items: center;">
                                            <input type="file" id="pdf" name="catalog" class="form-control"
                                                style="width: 50%;" accept=".pdf">
                                            <?php if($product->catalog): ?>
                                                <span style="margin-left: 10px;"><?php echo e($product->catalog); ?></span>
                                            <?php endif; ?>

                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['data' => $data]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <div class="button text-end mt-3">
                        <?php if($errors->any()): ?>
                            <?php echo '<div style="padding: 7px;float: left;margin-left: 95px;color: red;">* Zorunlu alanları doldurunuz</div>'; ?>

                        <?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button','data' => ['value' => $product->id ? 'Güncelle' : 'Kaydet','class' => 'btn btn-primary saveButton']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product->id ? 'Güncelle' : 'Kaydet'),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('btn btn-primary saveButton')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </form>
            </div>
        </div>
    </div>

    <!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <?php echo $__env->make('admin.layouts.ckeditor-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="<?php echo e(URL::asset('assets/libs/dropzone/dropzone.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/pristinejs/pristinejs.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/form-validation.init.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/custom.js')); ?>"></script>
    <script>
        function removeImage(id) {
            var token = $("meta[name='csrf-token']").attr("content");
            var id = id;
            var confirmation = confirm("Resim Silinsin mi?");
            if (confirmation) {
                $.ajax({
                    url: "/panel/ürünler/deleteImage/" + id,
                    type: 'DELETE',
                    data: {
                        "id": id,
                        "_token": token,
                    },
                    success: function(response) {
                        if (response)
                            $('#image-' + id).remove();
                    },

                });
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\my project\laravel\kiliciklimlendirme2\kiliciklimlendirme\resources\views/admin/products/create.blade.php ENDPATH**/ ?>