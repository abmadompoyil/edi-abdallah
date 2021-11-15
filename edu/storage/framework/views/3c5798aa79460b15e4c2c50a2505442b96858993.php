<?php $__env->startSection('content'); ?>
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <!--end::Card-->
            <!--begin::Row-->
            <div class="row">
                <div class="col-xl-4">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <div class="card-header h-auto py-3 border-0">
                            <div class="card-title">
                                <h3 class="card-label text-danger">Important Notice</h3>
                            </div>
                            <div class="card-toolbar">
                                <span class="label font-weight-bold label label-inline label-light-danger">Now</span>
                            </div>
                        </div>
                        <div class="card-body pt-2">
                            <p class="text-dark-100">Consult Detials : <?php echo e($consult->consult); ?></p>
                            <p class="text-dark-100">Date : <?php echo e($consult->created_at); ?></p>
                            <p class="text-dark-50">Status :   <span class="label label-lg label-light-<?php echo e($consult->span()); ?> label-inline" style="color:black;"><?php echo e($consult->status); ?></span></p>

                            <p class="text-dark-50">Note : <?php echo e($consult->note ?? 'No Note'); ?></p>
                            <p class="text-dark-50">Files  : </p>
                            <?php $__currentLoopData = $consult->files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(asset($file->resume)); ?>" download class="btn btn-primary font-weight-bold mr-2">Download file</a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                    <!--end::Card-->
                    <!--begin::Card-->
                    <div class="card card-custom">
                        <!--begin::Header-->
                        <div class="card-header h-auto py-4">
                            <div class="card-title">
                                <h3 class="card-label"><?php echo e(__("School")); ?>

                                    <span class="d-block text-muted pt-2 font-size-sm"><?php echo e(__("School profile preview")); ?></span></h3>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-4">
                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label"><?php echo e(__("Name")); ?>:</label>
                                <div class="col-8">
                                    <span class="form-control-plaintext font-weight-bolder"><?php echo e($school->name); ?></span>
                                </div>
                            </div>
                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label">Phone:</label>
                                <div class="col-8">
                                    <span class="form-control-plaintext font-weight-bolder"><?php echo e($school->phone); ?> </span>
                                </div>
                            </div>
                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label">Email:</label>
                                <div class="col-8">
														<span class="form-control-plaintext font-weight-bolder">
															<a href="#"><?php echo e($school->email); ?></a>
														</span>
                                </div>
                            </div>
                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label">Website:</label>
                                <div class="col-8">
														<span class="form-control-plaintext font-weight-bolder">
															<a href="#"><?php echo e($school->website); ?></a>
														</span>
                                </div>
                            </div>
                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label">Contact Person:</label>
                                <div class="col-8">
														<span class="form-control-plaintext font-weight-bolder">
															<a href="#"><?php echo e($school->name); ?></a>
														</span>
                                </div>
                            </div>
                        </div>
                        <!--end::Body-->
                        <!--begin::Footer-->




                        <!--end::Footer-->
                    </div>
                    <!--end::Card-->
                </div>
                <div class="col-xl-8">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <!--begin::Header-->
                        <div class="card-header card-header-tabs-line">
                            <div class="card-toolbar">
                                <ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-bold nav-tabs-line-3x" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#kt_apps_contacts_view_tab_1">
																<span class="nav-icon mr-2">
																	<span class="svg-icon mr-3">
																		<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Notification2.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24"></rect>
																				<path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000"></path>
																				<circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5"></circle>
																			</g>
																		</svg>
                                                                        <!--end::Svg Icon-->
																	</span>
																</span>
                                            <span class="nav-text">Notes</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body px-0">
                            <div class="tab-content pt-5">
                                <!--begin::Tab Content-->
                                <div class="tab-pane active" id="kt_apps_contacts_view_tab_1" role="tabpanel">
                                    <div class="container">
                                        <form  method="POST" action="<?php echo e(route('super.consults.add',$consult->id)); ?>" class="form formAction">
                                            <?php echo csrf_field(); ?>
                                            <div class="form-group">
                                                <textarea class="form-control form-control-lg form-control-solid" id="exampleTextarea" name="note" rows="3" placeholder="Type notes"></textarea>
                                            </div>
                                            <div class="form-group ">
                                                <label class="col-form-label text-lg-right text-left"><?php echo e(__("Status  ")); ?> (if u want change status)</label>
                                                <div class="input-group input-group-lg input-group-solid">

                                                    <select name="status" class="form-control form-control-lg form-control-solid">
                                                        <option value="pending"<?php if($consult->status == 'pending'): ?> selected <?php endif; ?> >Pending</option>
                                                        <option value="accept" <?php if($consult->status == 'accept'): ?> selected <?php endif; ?>>Accept</option>
                                                        <option value="canceled" <?php if($consult->status == 'canceled'): ?> selected <?php endif; ?>>Canceled</option>
                                                        <option value="completed" <?php if($consult->status == 'completed'): ?> selected <?php endif; ?>>Completed</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <button type="submit"  class="btn  btn-save btn-light-primary font-weight-bold">Add notes</button>

                                                    <a href="#" class="btn btn-clean font-weight-bold">Cancel</a>
                                                </div>
                                                <div class="col">
                                                    <div class="toast-container">
                                                        <div class="alert alert-success d-none" role="alert"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="separator separator-dashed my-10"></div>
                                        <!--begin::Timeline-->
                                        <div class="timeline timeline-3">
                                            <div class="timeline-items">
                                                <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="timeline-item">
                                                    <div class="timeline-media">
                                                        <img alt="Pic" src="<?php echo e(asset($comment->user->img)); ?>">
                                                    </div>
                                                    <div class="timeline-content">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="mr-2">
                                                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold">New note From <?php if($comment->sender_type == 1 ): ?> management <?php else: ?> <?php echo e($comment->user->name); ?> <?php endif; ?></a>
                                                                <span class="text-muted ml-2"><?php echo e($comment->created_at); ?></span>
                                                                <span class="label label-light-<?php echo e($comment->span()); ?> font-weight-bolder label-inline ml-2"><?php echo e($comment->status); ?></span>
                                                            </div>
                                                            <div class="dropdown ml-2" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                                                                <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="ki ki-more-hor icon-md"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <p class="p-0">
                                                            <?php echo e($comment->note); ?></p>
                                                    </div>
                                                </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </div>
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                </div>
                                <!--end::Tab Content-->
                                <!--begin::Tab Content-->
                                <!--end::Tab Content-->
                                <!--begin::Tab Content-->

                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('scripts'); ?>


            <script src="<?php echo e(asset('/js/ajax.js')); ?>"></script>
            <script>
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('#kt_user_edit_avatar').css("background-image", "url(" +  e.target.result + ")");
                        }

                        reader.readAsDataURL(input.files[0]); // convert to base64 string
                    }
                }
                function readURLCar(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('#car_img').css("background-image", "url(" +  e.target.result + ")");
                        }

                        reader.readAsDataURL(input.files[0]); // convert to base64 string
                    }
                }
                function readURLLicense(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('#car_license').css("background-image", "url(" +  e.target.result + ")");
                        }

                        reader.readAsDataURL(input.files[0]); // convert to base64 string
                    }
                }
                $("#profile_avatar").change(function() {
                    readURL(this);
                });

                $("#carImg").change(function() {
                    readURLCar(this);
                });
                $("input:checked").change(function(){
                    var start =  $(this).data('start'); //getter
                    var end = $(this).data('end'); //getter
                    var status = $(this).data('status'); //getter

                    if($(this).is(':checked')){
                        $("."+start).removeAttr('disabled');
                        $("."+end).removeAttr('disabled');
                        $("."+status).attr('value',1);
                    }else{
                        $("."+start).attr('disabled','disabled');
                        $("."+end).attr('disabled','disabled');
                        $("."+status).attr('value',0);

                    }
                });
                $("#switch1").click(function(){
                    var start =  $(this).data('start'); //getter
                    var end = $(this).data('end'); //getter
                    var status = $(this).data('status'); //getter
                    if($(this).is(':checked')){
                        $("."+start).removeAttr('disabled');
                        $("."+end).removeAttr('disabled');
                        $("."+status).attr('value',1);
                    }else{
                        $("."+start).attr('disabled','disabled');
                        $("."+end).attr('disabled','disabled');
                        $("."+status).attr('value',0);
                    }
                });

            </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/softc92r/edu.ixmedia.tech/edu/resources/views/supervisor/consult/show.blade.php ENDPATH**/ ?>