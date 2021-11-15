<div class="table-responsive">
    <table class="table table-bordered table-hover" id="kt_datatable">
        <thead>
        <tr>
            <th> Id</th>
            <th><?php echo e(__("Name Teacher")); ?></th>
            <th><?php echo e(__("Name School")); ?></th>
            <th><?php echo e(__("Name of Supervisor")); ?></th>
            <th><?php echo e(__("Specialization")); ?></th>
            <th><?php echo e(__("Data meeting ")); ?></th>
            <th><?php echo e(__("exp")); ?> </th>
            <th><?php echo e(__("Status")); ?> </th>
            <th><?php echo e(__("Created at ")); ?> </th>

            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="deleted-row-<?php echo e($job->id); ?>">
                <td><?php echo e($job->id); ?></td>
                <td>
                    <?php echo e($job->Teacher->name); ?>

                </td>
                <td >
                    <?php echo e($job->school->name); ?>

                </td>
                <td >
                    <?php echo e($job->SuperVisor->name ?? 'there no supervisor right no '); ?>

                </td>
                <td><?php echo e($job->Teacher->qualifcate()); ?></td>
                <td> <?php echo e($job->data . " From: ".$job->start." To: ".$job->end); ?></td>
                <td><?php echo e($job->Teacher->exp()); ?></td>

                <td>
                    <span class="label label-lg label-light-<?php echo e($job->span()); ?> label-inline" style="color:black;"><?php echo e($job->status); ?></span>

                </td>
                <td><?php echo e($job->created_at); ?></td>

                <Td>


                    <a href="<?php echo e(route('jobs.show',$job)); ?>" data-href="<?php echo e(route('jobs.show',$job)); ?>" data-entity_id="<?php echo e($job->id); ?>"  class="btn  btn-sm btn-clean btn-icon" data-toggle="tooltip" title="show">
                        <?php echo e(Metronic::getSVG("media/svg/icons/General/Expand-arrows.svg", "svg-icon-md svg-icon-primary")); ?>


                    </a>
                    <a href="javascript:;" data-href="<?php echo e(route('jobs.catDelete',$job->id)); ?>" data-entity_id="<?php echo e($job->id); ?>" data-token="<?php echo e(csrf_token()); ?>" class="btn delete-btn btn-sm btn-clean btn-icon" data-toggle="tooltip" title="حدف">
                        <?php echo e(Metronic::getSVG("media/svg/icons/General/Trash.svg", "svg-icon-md svg-icon-primary")); ?>

                    </a>


                </Td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($jobs->links()); ?>

</div>
<?php /**PATH /home4/softc92r/edu.ixmedia.tech/edu/resources/views/supervisor/job/table.blade.php ENDPATH**/ ?>