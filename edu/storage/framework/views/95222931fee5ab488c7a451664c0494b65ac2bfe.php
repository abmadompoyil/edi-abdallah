<div class="row">
    <div class="col-xl-6">
        <!--begin::List Widget 12-->
        <div class="card card-custom card-stretch gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0">
                <h3 class="card-title font-weight-bolder text-dark">
                    <?php echo app('translator')->get('admin.last_Ads'); ?>

                </h3>
                <div class="card-toolbar">

                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-2">
            <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <!--begin::Item-->
                    <div class="d-flex flex-wrap align-items-center mb-10">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60 symbol-2by3 flex-shrink-0">
                            <div class="symbol-label" style="background-image: url('<?php echo e($ad->imgs[0]); ?>')"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Title-->
                        <div class="d-flex flex-column ml-4 flex-grow-1 mr-2">
                            <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1"><?php echo e($ad->name); ?></a>
                            <span class="text-muted font-weight-bold"><?php echo e($ad->category->name ?? "التصنيف"); ?> -- <?php echo e($ad->sub_category->name ?? "التصنيف الفرعي"); ?>  </span>
                        </div>
                        <!--end::Title-->
                        <!--begin::btn-->
                        <span class="label label-lg label-light-primary label-inline mt-lg-0 mb-lg-0 my-2 font-weight-bold py-4"><?php echo e($ad->user->name ?? "إسم المستخدم"); ?></span>
                        <!--end::Btn-->
                    </div>
                    <!--end::Item-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!--end::Item-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::List Widget 12-->
    </div>
    <div class="col-xl-6">
        <!--begin::List Widget 13-->
        <div class="card card-custom card-stretch gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0">
                <h3 class="card-title font-weight-bolder text-dark">

                    <?php echo app('translator')->get('admin.last_orders'); ?>

                </h3>
                <div class="card-toolbar">

                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-2">
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!--begin::Item-->
                    <div class="d-flex flex-wrap align-items-center mb-10">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                            <?php
                                $img =$order->places->image ?? 'help.png'
                            ?>
                            <div class="symbol-label" style="background-image: url('<?php echo e(asset('Heart/storage/app/'.$img)); ?>')"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Title-->
                        <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 mr-2">
                            <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1"><?php echo app('translator')->get('admin.ClientName'); ?> <?php echo e($order->user->name ?? lang('admin.ClientName')); ?></a>
                            <span class="text-muted font-weight-bold"> <?php echo app('translator')->get('admin.DriverName'); ?> <?php echo e($order->driver->name ?? __('admin.DriverName')); ?>  </span>
                            <span class="text-muted font-weight-bold"> <?php echo app('translator')->get('admin.PlaceName'); ?> <?php echo e($order->places->name ?? __('admin.efzl3y')); ?>  </span>
                            <span class="text-muted "> <?php echo e($order->timeS()); ?></span>

                        </div>
                        <!--end::Title-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center mt-lg-0 mt-3">
                            <!--begin::Label-->
                            <div class="mr-6">
                                <i class="fa fa-money-bill-alt mr-1 text-warning font-size-lg"></i>
                                <span class="text-dark-75 font-weight-bolder"><?php echo e($order->price); ?> <?php echo app('translator')->get('admin.currency'); ?></span>

                            </div>

                            <!--end::Label-->
                            <!--begin::Btn-->
                            <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 mr-2">

                                <span class="label label-lg label-light-<?php echo e($order->span()); ?> label-inline mt-lg-0 mb-lg-0 my-2 font-weight-bold py-4"><?php echo e($order->status()); ?></span>
                            </div>

                            <!--end::Btn-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!--end::Body-->
        </div>
        <!--end::List Widget 13-->
    </div>
</div>

<?php /**PATH /home4/softc92r/alfarismedia.com/edu/resources/views/pages/widgets/_widget10.blade.php ENDPATH**/ ?>