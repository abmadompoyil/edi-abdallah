

<div class="card card-custom <?php echo e(@$class); ?>">
    
    <div class="card-header border-0">
        <h3 class="card-title font-weight-bolder text-dark"><?php echo e(__('admin.drivers')); ?></h3>

    </div>

    
    <div class="card-body pt-2">
        
        <?php $__currentLoopData = $drivers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="d-flex align-items-center mb-10">
                
                <div class="symbol symbol-40 symbol-light-success mr-5">
                <span class="symbol-label">

                    <img src="<?php echo e(asset($user->img)); ?>" class="h-75 align-self-end"/>
                </span>
                </div>

                
                <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg"><?php echo e($user->name); ?></a>
                    <span class="text-muted">   <?php echo e($user->timeS()); ?> </span>
                </div>

                
                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ki ki-bold-more-hor"></i>
                    </a>
                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                        
                        <ul class="navi navi-hover">
                            <li class="navi-header font-weight-bold">
                                Jump to:
                                <i class="flaticon2-information" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                            </li>
                            <li class="navi-separator mb-3"></li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon"><i class="flaticon2-drop"></i></span>
                                    <span class="navi-text">إعلاناته</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon"><i class="flaticon2-calendar-8"></i></span>
                                    <span class="navi-text">طلباته</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon"><i class="flaticon2-telegram-logo"></i></span>
                                    <span class="navi-text">الباقات</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon"><i class="flaticon2-new-email"></i></span>
                                    <span class="navi-text">الرسائل</span>
                                    <span class="navi-label">
                                    <span class="label label-success label-rounded">5</span>
                                </span>
                                </a>
                            </li>
                            <li class="navi-separator mt-3"></li>
                            <li class="navi-footer">
                                <a class="btn btn-light-primary font-weight-bolder btn-sm" href="#">ترقية إشتراك</a>
                                <a class="btn btn-clean font-weight-bold btn-sm" href="#" data-toggle="tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>
<?php /**PATH /home4/softc92r/alfarismedia.com/edu/resources/views/pages/widgets/_widget-8.blade.php ENDPATH**/ ?>