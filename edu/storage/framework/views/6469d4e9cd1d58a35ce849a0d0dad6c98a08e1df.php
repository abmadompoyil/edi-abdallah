<div class="table-responsive">
    <table class="table table-bordered table-hover" id="kt_datatable">
        <thead>
        <tr>
            <th>Id</th>
            <th><?php echo e(__("Description File")); ?></th>
            <th><?php echo e(__("Files")); ?></th>
            <th><?php echo e(__("is Available")); ?></th>
            <th><?php echo e(__("Date ")); ?></th>

            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="deleted-row-<?php echo e($file->id); ?>">
                <td><?php echo e($file->id); ?></td>
                <td >
                    <?php echo e($file->name); ?>

                </td>
                <td >
                    <a href="<?php echo e(asset($file->src)); ?>" download class="btn btn-primary font-weight-bold mr-2">Download file</a>

                </td>
                <td>
                    <?php echo e($file->status()); ?>

                    <br>
                <span class="text-muted">                    click edit icon to change status to (<?php echo e($file->statusRev()); ?>)
</span>
                </td>
                <td> <?php echo e($file->created_at); ?></td>
                                <Td>
                                    <a href="<?php echo e(route('files.update',$file->id)); ?>" data-href="<?php echo e(route('files.update',$file->id)); ?>" data-entity_id="<?php echo e($file->id); ?>"  class="btn  btn-sm btn-clean btn-icon" data-toggle="tooltip" title="Make it <?php echo e($file->statusRev()); ?>">
                                        <?php echo e(Metronic::getSVG("media/svg/icons/Communication/Write.svg", "svg-icon-md svg-icon-primary")); ?>

                                    </a>
                                    <a href="javascript:;" data-href="<?php echo e(route('files.catDelete',$file->id)); ?>" data-entity_id="<?php echo e($file->id); ?>" data-token="<?php echo e(csrf_token()); ?>" class="btn delete-btn btn-sm btn-clean btn-icon" data-toggle="tooltip" title="حدف">
                        <?php echo e(Metronic::getSVG("media/svg/icons/General/Trash.svg", "svg-icon-md svg-icon-primary")); ?>

                    </a>


                </Td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($files->links()); ?>

</div>
<?php /**PATH /home4/softc92r/edu.ixmedia.tech/edu/resources/views/admin/files/table.blade.php ENDPATH**/ ?>