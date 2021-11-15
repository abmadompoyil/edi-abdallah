

<div class="card card-custom <?php echo e(@$class); ?>">
    
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark"><?php echo e(__('Last Consults')); ?></span>
            
        </h3>
    </div>

    
    <div class="card-body pt-3 pb-0">
        
        <?php
            $consults = \App\Edu\Consult::latest('created_at')->take(5)->get();
        ?>
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


                            <a href="<?php echo e(route('consults.show',$consult)); ?>" data-href="<?php echo e(route('consult.show',$consult)); ?>" data-entity_id="<?php echo e($consult->id); ?>"  class="btn  btn-sm btn-clean btn-icon" data-toggle="tooltip" title="show">
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
<?php /**PATH /home4/softc92r/edu.ixmedia.tech/edu/resources/views/supervisor/wdg/_table2.blade.php ENDPATH**/ ?>