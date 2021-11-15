<div class="row">
    <div class="col-xl-6">
        <!--begin::List Widget 12-->
        <div class="card card-custom card-stretch gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0">
                <h3 class="card-title font-weight-bolder text-dark">
                    <?php echo e(__("Last School")); ?>


                </h3>
                <div class="card-toolbar">

                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-2">
                <?php
                    $schools = \App\User::where('role_id',3)->get();

                    ?>

            <?php $__currentLoopData = $schools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <!--begin::Item-->
                    <div class="d-flex flex-wrap align-items-center mb-10">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60 symbol-2by3 flex-shrink-0">
                            <div class="symbol-label" style="background-image: url('<?php echo e($ad->img); ?>')"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Title-->
                        <div class="d-flex flex-column ml-4 flex-grow-1 mr-2">
                            <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1"><?php echo e($ad->name); ?></a>
                            <span class="text-muted font-weight-bold">  </span>
                        </div>
                        <!--end::Title-->
                        <!--begin::btn-->
                        <span class="label label-lg label-light-primary label-inline mt-lg-0 mb-lg-0 my-2 font-weight-bold py-4"><?php echo e(__("Count of job").' '.$ad->jobs->count()); ?></span>
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

                    <?php echo e(__("Last Supervisor")); ?>

                </h3>
                <div class="card-toolbar">

                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <?php
                $supervisors = \App\User::where('role_id',2)->get();

            ?>
            <div class="card-body pt-2">
            <?php $__currentLoopData = $supervisors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!--begin::Item-->
                    <div class="d-flex flex-wrap align-items-center mb-10">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60 symbol-2by3 flex-shrink-0">
                            <div class="symbol-label" style="background-image: url('<?php echo e($ad->img); ?>')"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Title-->
                        <div class="d-flex flex-column ml-4 flex-grow-1 mr-2">
                            <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1"><?php echo e($ad->name); ?></a>
                            <span class="text-muted font-weight-bold">  </span>
                        </div>
                        <!--end::Title-->
                        <!--begin::btn-->
                        <span class="label label-lg label-light-primary label-inline mt-lg-0 mb-lg-0 my-2 font-weight-bold py-4"></span>
                        <!--end::Btn-->
                    </div>
                    <!--end::Item-->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!--end::Body-->
        </div>
        <!--end::List Widget 13-->
    </div>
</div>

<?php /**PATH /home4/softc92r/edu.ixmedia.tech/edu/resources/views/pages/widgets/_widget10.blade.php ENDPATH**/ ?>