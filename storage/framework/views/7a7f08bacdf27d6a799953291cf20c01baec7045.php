<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.blog_list'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <?php echo $__env->make('admin.layouts.datatable-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link href="<?php echo e(URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('admin.components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Blog
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Blog Listesi
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row data-list">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="list-head text-center">
                        <h3><?php echo e(__('translation.blog_list')); ?></h3>
                    </div>
                    <?php echo $__env->make('alerts.danger', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.circle-add-button','data' => ['route' => 'add.blog']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('circle-add-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('add.blog')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th width="50%">Resim</th>
                                <th width="30%">Ba??l??k</th>
                                <th width="20%">A????klama</th>
                                <th width="20%">????lem</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lst): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr data-id="1">
                                    <td data-field="image" style="width: 80px">
                                        <img src="<?php echo e(asset('/assets/images/blogs/' . $lst->image)); ?>" alt=""
                                            width="50" height="50">
                                    </td>
                                    <td data-field="title"><?php echo e($lst->title); ?></td>
                                    <td data-field="description">
                                        <?php echo Str::limit($lst->description, 50, '...'); ?>

                                    </td>
                                    <td class="process">
                                        <a class="btn btn-outline-secondary btn-sm edit"
                                            style="float: left; margin-left: 5px"
                                            href="/panel/blog/blog-duzenle/<?php echo e($lst->id); ?>" type="submit" title="Edit">
                                            <i class="fas fa-pencil-alt"></i> D??zenle
                                        </a>
                                        <a>
                                            <form method="post" action="<?php echo e(route('delete.blog', ['id' => $lst->id])); ?>">
                                                <?php echo method_field('delete'); ?>
                                                <?php echo csrf_field(); ?>
                                                <button class="btn btn-outline-danger btn-sm delete delete-confirm"
                                                    type="submit" title="Delete">
                                                    <i class="fas fa-trash-alt"></i> Sil
                                                </button>
                                            </form>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <?php echo $__env->make('admin.layouts.datatable-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="<?php echo e(URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/sweetalert.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/app.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/custom.js')); ?>"></script>
    <script></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\my project\laravel\kiliciklimlendirme2\kiliciklimlendirme\resources\views/admin/blogs/list.blade.php ENDPATH**/ ?>