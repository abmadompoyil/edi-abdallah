

<div class="card card-custom <?php echo e(@$class); ?>">
    
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark"><?php echo e(__('admin.Bouquets')); ?></span>

        </h3>
    </div>

    
    <div class="card-body pt-3 pb-0">
        
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="kt_datatable">
                <thead>
                <tr>
                    <th> #</th>
                    <th>الإسم</th>
                    <th>السعر</th>
                    <th>عدد الدقائق</th>
                    <th>عدد الأيام</th>

                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="deleted-row-<?php echo e($package->id); ?>">
                        <td><?php echo e($package->id); ?></td>
                        <td><?php echo e($package->name); ?></td>
                        <td><?php echo e($package->price); ?></td>
                        <td><?php echo e($package->minute); ?></td>
                        <td><?php echo e($package->days); ?></td>
                        <Td>


                            <a href="<?php echo e(route('package.edit',$package)); ?>" data-href="<?php echo e(route('package.edit',$package)); ?>" data-entity_id="<?php echo e($package->id); ?>"  class="btn  btn-sm btn-clean btn-icon" data-toggle="tooltip" title="تعديل">
                                <?php echo e(Metronic::getSVG("media/svg/icons/Communication/Write.svg", "svg-icon-md svg-icon-primary")); ?>


                            </a>
                            <a href="javascript:;" data-href="<?php echo e(route('package.destroy',$package->id)); ?>" data-entity_id="<?php echo e($package->id); ?>" data-token="<?php echo e(csrf_token()); ?>" class="btn delete-btn btn-sm btn-clean btn-icon" data-toggle="tooltip" title="حدف">
                                <?php echo e(Metronic::getSVG("media/svg/icons/General/Trash.svg", "svg-icon-md svg-icon-primary")); ?>

                            </a>
                        </Td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php /**PATH /home4/softc92r/alfarismedia.com/edu/resources/views/pages/widgets/_widget-6.blade.php ENDPATH**/ ?>