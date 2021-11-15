

<div class="card card-custom <?php echo e(@$class); ?>">
    
    <div class="card-header border-0">
        <h3 class="card-title font-weight-bolder text-dark"><?php echo e(__('Islamic files Library')); ?></h3>

    </div>

    
    <div class="card-body pt-2">
        
        <?php
            $files = \App\Edu\Library::where('type',2)->latest('created_at')->take(5)->get()
        ?>
        <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="d-flex align-items-center mb-10">
                
                <div class="symbol symbol-40 symbol-light-success mr-5">
                <span class="symbol-label">

                    <img src="<?php echo e(asset('assets/media/svg/icons/Files/Folder.svg')); ?>" class="h-75 align-self-end"/>
                </span>
                </div>

                
                <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                    <a href="<?php echo e(asset($file->src)); ?>" download="" class="text-dark text-hover-primary mb-1 font-size-lg"><?php echo e($file->name); ?></a>
                    <span class="text-muted"> <?php echo e($file->asd); ?> </span>
                </div>

                
                <div class="dropdown dropdown-inline ml-2"  data-placement="left">
                    <a href="<?php echo e(asset($file->src)); ?>" download class="btn btn-hover-light-primary" >
                        <img src="<?php echo e(asset('assets/media/svg/icons/Files/Download.svg')); ?>"/>
                    </a>
                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                        
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>
<?php /**PATH /home4/softc92r/edu.ixmedia.tech/edu/resources/views/pages/widgets/_widget-8.blade.php ENDPATH**/ ?>