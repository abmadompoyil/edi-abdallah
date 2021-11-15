<?php $__env->startSection('content'); ?>
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom gutter-b">
                <div class="card-body">
                    <div class="d-flex">
                        <!--begin::Pic-->
                        <div class="flex-shrink-0 mr-7">
                            <div class="symbol symbol-50 symbol-lg-120">
                                <img alt="Pic" src="<?php echo e($school->img); ?>">
                            </div>
                        </div>
                        <!--end::Pic-->
                        <!--begin: Info-->
                        <div class="flex-grow-1">
                            <!--begin::Title-->
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <!--begin::User-->
                                <div class="mr-3">
                                    <div class="d-flex align-items-center mr-3">
                                        <!--begin::Name-->
                                        <a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3"><?php echo e($job->Teacher->name); ?></a>
                                        <!--end::Name-->
                                        <span class="label label-light-success label-inline font-weight-bolder mr-1"><?php echo e($job->Teacher->other ??$job->Teacher->subject->name); ?></span>
                                    </div>
                                    <!--begin::Contacts-->
                                    <div class="d-flex flex-wrap my-2">
                                        <a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
															<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Mail-notification.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"></rect>
																		<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000"></path>
																		<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5"></circle>
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span><?php echo e($job->Teacher->email); ?></a>
                                        <a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
															<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Lock.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<mask fill="white">
																			<use xlink:href="#path-1"></use>
																		</mask>
																		<g></g>
																		<path d="M7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 Z M12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L15,10 L15,8 C15,6.34314575 13.6568542,5 12,5 Z" fill="#000000"></path>
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span><?php echo e($job->Teacher->phone); ?></a>
                                        <a href="#" class="text-muted text-hover-primary font-weight-bold">
															<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Map/Marker2.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"></rect>
																		<path d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z" fill="#000000"></path>
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span><?php echo e($job->Teacher->nationality); ?></a>
                                    </div>
                                    <!--end::Contacts-->
                                </div>
                                <!--begin::User-->
                                <!--begin::Actions-->
                                <div class="mb-10">

                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Title-->
                            <!--begin::Content-->
                            <div class="d-flex align-items-center flex-wrap justify-content-between">
                                <!--begin::Description-->
                                <div class="flex-grow-1 font-weight-bold text-dark-50 py-2 py-lg-2 mr-5">
                                    <p><?php echo e(__("Old specialization")); ?>: <strong><?php echo e($job->Teacher->other ?? $job->Teacher->subject->name); ?></strong> </p>
                                    <p><?php echo e(__("New specialization")); ?>   : <strong><?php echo e($job->other ?? $job->Teacher->subject->name); ?></strong> </p>
                                    <p><?php echo e(__("Old School")); ?> : <strong><?php echo e($job->Teacher->old_school->name); ?></strong> </p>
                                    <p><?php echo e(__("new School")); ?> : <strong><?php echo e($job->new_school->name); ?></strong> </p>


                                </div>
                                <!--end::Description-->
                                <!--begin::Progress-->
                                <div class="d-flex mt-4 mt-sm-0">
                                    <div class="flex-grow-1 font-weight-bold text-dark-50 py-2 py-lg-2 mr-5">
                                        <p>Qualification : <strong><?php echo e($job->Teacher->qualification); ?></strong> </p>
                                        <p>Years of Experience : <strong><?php echo e($job->Teacher->exp()); ?></strong> </p>
                                    <p>Age : <strong><?php echo e($job->Teacher->age); ?></strong> </p>
                                    <p>Experience in international programs : <strong><?php echo e($job->Teacher->expP); ?></strong> </p>
                                </div>
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Info-->
                    </div>
                </div>
            </div>
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
                            <p class="text-dark-100">Date meeting: <?php echo e($job->date); ?></p>
                            <p class="text-dark-100">From: <?php echo e($job->start); ?> To : <?php echo e($job->end); ?></p>
                            <p class="text-dark-50">Status :   <span class="label label-lg label-light-<?php echo e($job->span()); ?> label-inline" style="color:black;"><?php echo e($job->status); ?></span></p>
                            <p class="text-dark-50">Note : <?php echo e($job->note ?? 'No Note'); ?></p>
                            <?php $__currentLoopData = $job->Teacher->files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                        <form  method="POST" action="<?php echo e(route('super.comments.add',$job->id)); ?>" class="form formAction">
                                            <?php echo csrf_field(); ?>
                                            <div class="form-group">
                                                <textarea class="form-control form-control-lg form-control-solid" id="exampleTextarea" name="note" rows="3" placeholder="Type notes"></textarea>
                                            </div>
                                            <div class="form-group ">
                                                <label class="col-form-label text-lg-right text-left"><?php echo e(__("Status  ")); ?> (if u want change status)</label>
                                                <div class="input-group input-group-lg input-group-solid">

                                                    <select name="status" class="form-control form-control-lg form-control-solid">
                                                        <option value="pending"<?php if($job->status == 'pending'): ?> selected <?php endif; ?> >Pending</option>
                                                        <option value="accept" <?php if($job->status == 'accept'): ?> selected <?php endif; ?>>Accept</option>
                                                        <option value="canceled" <?php if($job->status == 'canceled'): ?> selected <?php endif; ?>>Canceled</option>
                                                        <option value="completed" <?php if($job->status == 'completed'): ?> selected <?php endif; ?>>Completed</option>
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
                                                        <img alt="Pic" src="<?php echo e($comment->user->img); ?>">
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


<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/softc92r/edu.ixmedia.tech/edu/resources/views/supervisor/move/show.blade.php ENDPATH**/ ?>