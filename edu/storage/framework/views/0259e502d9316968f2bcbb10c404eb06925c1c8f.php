<div class="table-responsive">
    <table class="table table-bordered table-hover" id="kt_datatable">
        <thead>
        <tr>
            <th> #</th>
            <th><?php echo e(__("Consult")); ?></th>
            <th><?php echo e(__("Date ")); ?></th>
            <th><?php echo e(__("Status")); ?> </th>

            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $consults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $consult): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="deleted-row-<?php echo e($consult->id); ?>">
                <td><?php echo e($consult->id); ?></td>
                <td class="pl-0 py-4">
                    <?php echo e($consult->consult); ?>

                </td>
                <td> <?php echo e($consult->created_at); ?></td>
                <td>
                    <span class="label label-lg label-light-<?php echo e($consult->span()); ?> label-inline" style="color:black;"><?php echo e($consult->status); ?></span>

                </td>                    <Td>


                    <a href="<?php echo e(route('consult.show',$consult)); ?>" data-href="<?php echo e(route('consult.show',$consult)); ?>" data-entity_id="<?php echo e($consult->id); ?>"  class="btn  btn-sm btn-clean btn-icon" data-toggle="tooltip" title="show">
                        <?php echo e(Metronic::getSVG("media/svg/icons/General/Expand-arrows.svg", "svg-icon-md svg-icon-primary")); ?>


                    </a>
                    <a href="javascript:;" data-href="<?php echo e(route('consult.catDelete',$consult->id)); ?>" data-entity_id="<?php echo e($consult->id); ?>" data-token="<?php echo e(csrf_token()); ?>" class="btn delete-btn btn-sm btn-clean btn-icon" data-toggle="tooltip" title="حدف">
                        <?php echo e(Metronic::getSVG("media/svg/icons/General/Trash.svg", "svg-icon-md svg-icon-primary")); ?>

                    </a>


                </Td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($consults->links()); ?>

</div>
<?php /**PATH /home4/softc92r/edu.ixmedia.tech/edu/resources/views/school/consult/table.blade.php ENDPATH**/ ?>