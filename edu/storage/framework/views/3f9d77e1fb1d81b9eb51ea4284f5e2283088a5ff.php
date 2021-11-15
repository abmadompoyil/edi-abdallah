<div class="table-responsive">
    <table class="table table-bordered table-hover" id="kt_datatable">
        <thead>
        <tr>
            <th> Id</th>
            <th><?php echo e(__("Description File")); ?></th>
            <th><?php echo e(__("Status")); ?></th>
            <th><?php echo e(__("Date ")); ?></th>

            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="deleted-row-<?php echo e($file->id); ?>">
                <td><?php echo e($file->id); ?></td>
                <td >
                <a class="btn" href="<?php echo e(asset($file->src)); ?>" download >                     <?php echo e($file->name); ?>

                </a>
                </td>

                <td>
                    <?php echo e($file->status()); ?>


                </td>
                <td> <?php echo e($file->created_at); ?></td>
                                <Td>
                    <a href="<?php echo e(asset($file->src)); ?>" download  data-href="<?php echo e(asset($file->src)); ?>"   class="btn  btn-sm btn-clean btn-icon" data-toggle="tooltip" title="Download">
                        <?php echo e(Metronic::getSVG("media/svg/icons/Files/Cloud-download.svg", "svg-icon-md svg-icon-primary")); ?>

                    </a>


                </Td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($files->links()); ?>

</div>
<?php /**PATH /home4/softc92r/edu.ixmedia.tech/edu/resources/views/school/files/table.blade.php ENDPATH**/ ?>