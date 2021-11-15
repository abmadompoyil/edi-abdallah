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
                                    <span class="nav-text font-size-lg"><?php echo e(__("Add Employee")); ?></span>
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
                    <form  method="POST" action="<?php echo e(route('job.store')); ?>" class="formAction">
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
                                                <h6 class="text-dark font-weight-bold mb-10"><?php echo e(__("Details Employee")); ?></h6>
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Group-->
                                        <!--end::Group-->
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left"><?php echo e(__("Name * ")); ?></label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid" required name="name" placeholder="Enter Teacher Name"  type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left"><?php echo e(__("Email")); ?></label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid" name="email" placeholder="Enter Teacher Email (optional)"  type="email">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left"><?php echo e(__("Phone * ")); ?></label>
                                            <div class="col-9">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend">
																			<span class="input-group-text">
																				<i class="la la-phone"></i>
																			</span>
                                                    </div>
                                                    <input type="text" name="phone"  required class="form-control form-control-lg form-control-solid"  placeholder="Phone * ">
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Group-->
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left"> <?php echo e(__("Age * ")); ?></label>
                                            <div class="col-9">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend">
																			<span class="input-group-text">
																				<i class="la la-at"></i>
																			</span>
                                                    </div>
                                                    <input type="number" name="age" class="form-control form-control-lg form-control-solid"  placeholder="Age * ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left"> <?php echo e(__("Nationality * ")); ?></label>
                                            <div class="col-9">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <input type="text" name="nationality" class="form-control form-control-lg form-control-solid"  placeholder="Nationality">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left"><?php echo e(__("Years of Experience * ")); ?> </label>
                                            <div class="col-9">
                                                <select  name="exp" class="form-control" id="exampleSelect2">
                                                        <option value="0" > <?php echo e(__("New Teacher (0)")); ?></option>
                                                        <option value="1" > <?php echo e(__("1-3 years")); ?></option>
                                                        <option value="3" > <?php echo e(__("4-7 years")); ?></option>
                                                        <option value="4" > <?php echo e(__("7-10 years")); ?></option>
                                                        <option value="5" > <?php echo e(__("10 years & more")); ?></option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left"> <?php echo e(__("Experience in international programs (optional)")); ?></label>
                                            <div class="col-9">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <textarea type="text" name="expP" class="form-control form-control-lg form-control-solid"  placeholder="Experience in international programs (optional)"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left"><?php echo e(__("Qualification * ")); ?> </label>
                                            <div class="col-9">
                                                <select  name="qualification" required class="form-control" id="exampleSelect2">
                                                        <option value="Bachelor" > Bachelor</option>
                                                        <option value="Master" > M.A.</option>
                                                    <option value="PhD" > PhD</option>
                                                    <option value="EducationalQualification" > Educational qualification</option>
                                                    <option value="ProfessionalLicense" > Professional license</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left"><?php echo e(__("Specialization * ")); ?> </label>
                                            <div class="col-9">
                                                <select  name="specialization" class="form-control" required id="exampleSelect2">
                                                    <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($subject->id); ?>" > <?php echo e($subject->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row" >
                                            <div class="col-3 text-lg-right text-left">
                                                <label class="col-form-label  text-lg-right text-left"> <?php echo e(__("Resume * ")); ?></label>

                                            </div>
                                                <div class="col-9">
                                                    <div class="custom-file">

                                                    <div class="input-group input-group-lg ">
                                                <input required type="file" name="file" multiple class="custom-file-input"  id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left"> <?php echo e(__("Interview Date * ")); ?></label>
                                            <div class="col-9">
                                                    <div class="input-group input-group-lg ">

                                                        <select required  name="date_id" class="form-control" id="exampleSelect2">
                                                            <option><?php echo e(__("Appointment date available  ")); ?></option>
                                                            <?php $__currentLoopData = $dates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($date->id); ?>" > <?php echo e($date->date . " From: ".$date->start ." To: ".$date->end); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        </select>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left"> <?php echo e(__("Note")); ?></label>
                                            <div class="col-9">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <textarea type="text" name="note" class="form-control form-control-lg form-control-solid"  placeholder="Note (optional)"></textarea>
                                                </div>
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
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1; //January is 0 so need to add 1 to make it 1!
        var yyyy = today.getFullYear();
        if(dd<10){
            dd='0'+dd
        }
        if(mm<10){
            mm='0'+mm
        }

        today = yyyy+'-'+mm+'-'+dd;
        document.getElementById("datefield").setAttribute("min", today);
    </script>
    <script src="<?php echo e(asset('/js/ajax.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/softc92r/alfarismedia.com/edu/resources/views/school/job/create.blade.php ENDPATH**/ ?>