<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom  gutter-b example example-compact">
                <div class="card-header">
                    <div class="card-title"> <?php echo e(__("Edit Subject")); ?>  </div>
                </div>
                <form  method="POST" action="<?php echo e(route('subjects.update',$category->id)); ?>" class="formAction">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo e($category->id); ?>">
<?php echo method_field('Patch'); ?>
                    <div class="card-body">
                        <div class="form-group">
                            <label><?php echo e(__("Name")); ?> </label>
                            <input type="text" name="name" value="<?php echo e($category->name); ?>" class="form-control">
                        </div>








                <button type="submit" class="btn btn-primary btn-update mr-2 w-100px p-4 " ><?php echo e(__("Save")); ?></button>

            </div>
            </form>

            </div>
    </div>
        <div class="toast-container">
            <div class="alert alert-success d-none" role="alert"></div>
    </div>


    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <script src="<?php echo e(asset('/js/ajax.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/softc92r/edu.ixmedia.tech/edu/resources/views/edu/category/catEdit.blade.php ENDPATH**/ ?>