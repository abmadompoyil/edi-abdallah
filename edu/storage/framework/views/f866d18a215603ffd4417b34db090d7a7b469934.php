

<div class="card card-custom <?php echo e(@$class); ?>">
    
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark"><?php echo e(__('admin.places')); ?></span>

        </h3>
        <div class="card-toolbar">
            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ki ki-bold-more-ver"></i>
                </a>





















































            </div>
        </div>
    </div>

    
    <div class="card-body pt-8">
        
        <?php $__currentLoopData = $places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="d-flex align-items-center mb-10">
            
            <div class="symbol symbol-40 symbol-light-primary mr-5">
                <div class="symbol-label" style="background-image: url('<?php echo e(asset('Heart/storage/app/'.$place->image)); ?>')"></div>

            </div>

            
            <div class="d-flex flex-column font-weight-bold">
                <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">
                <?php echo e($place->name); ?>

                </a>
                <span class="text-muted"><?php echo e($place->category->name ?? "التصنيف"); ?></span>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        

    </div>
</div>
<?php /**PATH /home4/softc92r/alfarismedia.com/edu/resources/views/pages/widgets/_widget-5.blade.php ENDPATH**/ ?>