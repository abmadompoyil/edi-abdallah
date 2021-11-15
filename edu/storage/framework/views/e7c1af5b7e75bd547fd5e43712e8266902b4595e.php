

<div class="card card-custom <?php echo e(@$class); ?>">
    
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark"><?php echo e(__('Last Teacher transfer request')); ?></span>
            
        </h3>
    </div>

    
    <div class="card-body pt-3 pb-0">
        
        <?php
            $jobs = \App\Edu\Job::where('type',2)->latest('created_at')->take(5)->get();
        ?>
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="kt_datatable">
                <thead>
                <tr>
                    <th> #</th>
                    <th><?php echo e(__("Name Teacher")); ?></th>
                    <th><?php echo e(__("Old specialization")); ?></th>
                    <th><?php echo e(__("New specialization")); ?></th>
                    <th><?php echo e(__("Old School")); ?></th>
                    <th><?php echo e(__("new School")); ?></th>
                    <th><?php echo e(__("Data meeting ")); ?></th>
                    <th><?php echo e(__("exp")); ?> </th>
                    <th><?php echo e(__("Status")); ?> </th>

                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="deleted-row-<?php echo e($job->id); ?>">
                        <td><?php echo e($job->id); ?></td>
                        <td >
                            <?php echo e($job->school->name ?? "Unknown"); ?>

                        </td><td >
                            <?php echo e($job->Teacher->name ?? "Unknown"); ?>

                        </td>
                        <td >
                            <?php echo e($job->SuperVisor->name ?? 'there no supervisor right no '); ?>

                        </td>
                        <td><?php echo e($job->Teacher->other ??( $job->Teacher->subject()  ?? "Unknown")); ?></td>
                        <td><?php echo e($job->other ?? ($job->new_subject->name ?? "Unknown")); ?></td>
                        <td><?php echo e($job->Teacher->old_school->name ?? "Unknown"); ?></td>
                        <td><?php echo e($job->new_school->name ?? "Unknown"); ?></td>
                        <?php if($job->date_id == null): ?>
                            <td>No Meeting </td>
                        <?php else: ?>
                            <td> <?php echo e($job->data . " From: ".$job->start." To: ".$job->end); ?></td>
                        <?php endif; ?>
                        <td><?php echo e($job->Teacher->exp()); ?></td>

                        <td>
                            <span class="label label-lg label-light-<?php echo e($job->span()); ?> label-inline" style="color:black;"><?php echo e($job->status); ?></span>

                        </td>
                        <td><?php echo e($job->created_at); ?></td>
                        <Td>


                            <a href="<?php echo e(route('super.move.show1',$job)); ?>" data-href="<?php echo e(route('super.move.show1',$job)); ?>" data-entity_id="<?php echo e($job->id); ?>"  class="btn  btn-sm btn-clean btn-icon" data-toggle="tooltip" title="show">
                                <?php echo e(Metronic::getSVG("media/svg/icons/General/Expand-arrows.svg", "svg-icon-md svg-icon-primary")); ?>


                            </a>



                        </Td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php /**PATH /home4/softc92r/edu.ixmedia.tech/edu/resources/views/supervisor/wdg/_table3.blade.php ENDPATH**/ ?>