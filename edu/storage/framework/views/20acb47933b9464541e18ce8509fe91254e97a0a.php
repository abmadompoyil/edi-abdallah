<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom">
                <!--begin::Card header-->
                <div class="card-header card-header-tabs-line nav-tabs-line-3x">
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <ul class="nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-3x">
                            <!--begin::Item-->
                            <li class="nav-item mr-3">
                                <a class="nav-link active" data-toggle="tab" href="#kt_user_edit_tab_1">
														<span class="nav-icon">
															<span class="svg-icon">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Layers.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24"></polygon>
																		<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																		<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>
														</span>
                                    <span class="nav-text font-size-lg"><?php echo e(__("Add New Time Meeting")); ?></span>
                                </a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->

                            <!--end::Item-->
                            <!--begin::Item-->
                            <!--end::Item-->

                        </ul>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body">
                    <form  method="POST" action="<?php echo e(route('meeting.store')); ?>" class="formAction">
                        <?php echo csrf_field(); ?>
                        <div class="tab-content">
                            <!--begin::Tab-->
                            <div class="tab-pane show px-7 active" id="kt_user_edit_tab_1" role="tabpanel">
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-7 my-2">
                                        <!--begin::Row-->
                                        <div class="row">
                                            <label class="col-3"></label>
                                            <div class="col-9">
                                                <h6 class="text-dark font-weight-bold mb-10"><?php echo e(__("Add new Meeting Date")); ?></h6>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left"> <?php echo e(__("Interview Date")); ?></label>
                                            <div class="col-9">
                                                <div class="input-group input-group-lg ">
                                                    <input type="date" name="date" lang="en"

                                                           min="<?php echo date('Y-m-d'); ?>"  class="form-control form-control-lg form-control-solid"  placeholder="Date">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left"> <?php echo e(__("Stat Time")); ?></label>
                                            <div class="col-9">
                                                <div class="input-group input-group-lg ">
                                                    <select  name="start" class="form-control" id="exampleSelect2">
                                                    </select>
                                                </div>
                                                <span class="text-muted"> Each appointment must be an hour</span>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left"> <?php echo e(__("End Time")); ?></label>
                                            <div class="col-9">
                                                <div class="input-group input-group-lg ">
                                                    <select  name="end" class="form-control" id="exampleSelect2">
                                                    </select>

                                                </div>
                                                <span class="text-muted"> Each appointment must be an hour</span>

                                            </div>
                                        </div>

                                        <!--end::Group-->
                                        <!--begin::Group-->

                                        <div class="card-footer pb-0">
                                            <div class="row">
                                                <div class="col-xl-2"></div>
                                                <div class="col-xl-7">
                                                    <div class="row">
                                                        <div class="col-3"></div>
                                                        <div class="col-9">
                                                            <a href="#" class="btn btn-light-primary btn-save font-weight-bold"><?php echo e(__("Save")); ?></a>
                                                            <a href="#" class="btn btn-clean font-weight-bold"><?php echo e(__("Cancel")); ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--end::Row-->
                            </div>


                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!--begin::Card body-->
    </div>


    <div class="toast-container">
        <div class="alert alert-success d-none" role="alert"></div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>

        $("#profile_avatar").change(function() {
            readURL(this);
        });



        var selection = "";
        var i = 0;
        for(var i = 8; i < 16; i++)
        {
            var j = zeroFill(i, 2);
            selection += "<option value='"+ j +"00'>"+ j + ":00:00" + "</option>";
        }
        $("select").html(selection);
        function zeroFill( number, width )
        {
            width -= number.toString().length;
            if ( width > 0 )
            {
                return new Array( width + (/\./.test( number ) ? 2 : 1) ).join( '0' ) + number;
            }
            return number + ""; // always return a string
        }
    </script>
    <script src="<?php echo e(asset('/js/ajax.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/softc92r/alfarismedia.com/edu/resources/views/edu/date/create.blade.php ENDPATH**/ ?>