<div class="table-responsive">
    <table class="table table-bordered table-hover" id="kt_datatable">
        <thead>
        <tr>
            <th> #</th>
            <th><?php echo e(__("Img")); ?></th>
            <th><?php echo e(__("Name")); ?></th>
            <th><?php echo e(__("Phone")); ?> </th>
            <th><?php echo e(__("Status")); ?> </th>

            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="deleted-row-<?php echo e($user->id); ?>">
                <td><?php echo e($user->id); ?></td>
                <td class="pl-0 py-4">
                    <div class="symbol symbol-50 symbol-light mr-1">
                                <span class="symbol-label">
                                    <img src="<?php echo e($user->img); ?>" class="h-50 align-self-center"/>
                                </span>
                    </div>
                </td>
                <td><?php echo e($user->name); ?></td>
                <td> <?php echo e($user->phone); ?></td>
                <td>
                    <span class="label label-lg label-light-<?php echo e($user->span()); ?> label-inline"><?php echo e($user->status); ?></span>

                </td>                    <Td>


                    <a href="<?php echo e(route('supervisor.edit',$user)); ?>" data-href="<?php echo e(route('teachers.edit',$user)); ?>" data-entity_id="<?php echo e($user->id); ?>"  class="btn  btn-sm btn-clean btn-icon" data-toggle="tooltip" title="تعديل">
                        <?php echo e(Metronic::getSVG("media/svg/icons/Communication/Write.svg", "svg-icon-md svg-icon-primary")); ?>


                    </a>
                    <a href="javascript:;" data-href="<?php echo e(route('supervisor.catDelete',$user->id)); ?>" data-entity_id="<?php echo e($user->id); ?>" data-token="<?php echo e(csrf_token()); ?>" class="btn delete-btn btn-sm btn-clean btn-icon" data-toggle="tooltip" title="حدف">
                        <?php echo e(Metronic::getSVG("media/svg/icons/General/Trash.svg", "svg-icon-md svg-icon-primary")); ?>

                    </a>

                    <a href="<?php echo e(route('teacher.userLessons',$user)); ?>" class="btn  btn-sm btn-clean btn-icon" data-toggle="tooltip" title="دروس المعلم">
                        <?php echo e(Metronic::getSVG("media/svg/icons/Text/Edit-text.svg", "svg-icon-md svg-icon-primary")); ?>

                    </a>
                </Td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($users->links()); ?>

</div>
<?php /**PATH /home4/softc92r/edu.ixmedia.tech/edu/resources/views/users/teacher/table.blade.php ENDPATH**/ ?>