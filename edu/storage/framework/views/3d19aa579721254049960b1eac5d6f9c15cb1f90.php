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
                                    <span class="nav-text font-size-lg"><?php echo e(__("Add Consult")); ?></span>
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
                    <form  method="POST" action="<?php echo e(route('consult.store')); ?>" class="formAction" enctype="multipart/form-data">
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
                                                <h6 class="text-dark font-weight-bold mb-10"><?php echo e(__("Details Consult")); ?></h6>
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Group-->
                                        <!--end::Group-->
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left"><?php echo e(__("Consult * ")); ?></label>
                                            <div class="col-9">

                                                <textarea type="text" name="consult" class="form-control form-control-lg form-control-solid"  required placeholder="Enter Whats you need"></textarea>
                                            </div>
                                        </div>


                                        <!--end::Group-->
                                        <!--begin::Group-->




                                        <div class="form-group row" >
                                            <div class="col-3 text-lg-right text-left">
                                                <label class="col-form-label  text-lg-right text-left"> <?php echo e(__("Files  ")); ?></label>

                                            </div>
                                                <div class="col-9">
                                                    <div class="custom-file">


                                                    <div class="input-group input-group-lg ">
                                                <input  type="file" name="files[]" multiple class="custom-file-input"  id="customFile">

                                                <label class="custom-file-label" for="customFile">Choose file</label>


                                                    </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="form-group row" >
                                            <label class="col-form-label col-3 text-lg-right text-left">""</label>
                                            <div class="col-9">

                                                <div id="list_file"></div>
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
        var fileInput = document.getElementById('customFile');
        var listFile = document.getElementById('list_file');

        fileInput.onchange = function () {
            var files = Array.from(this.files);
            files = files.map(file => file.name);
            listFile.innerHTML = files.join('<br/>');
        }


        const fieldsetElement = document.querySelector('fieldset');

        // create a FilePond instance at the fieldset element location
        const pond = FilePond.create( fieldsetElement );

        // files have been gathered
        console.log(pond.files); // [{ source: 'foo.jpeg' }, { source: 'bar.png' }]

        $(function(){

            // First register any plugins
            $.fn.filepond.registerPlugin(
                FilePondPluginImagePreview,
                FilePondPluginImageEdit,
                FilePondPluginFileEncode);
            // Turn input element into a pond
            $('.my-pond').filepond(  {
                labelIdle: `سحب وإفلات الصور <span class="filepond--label-action">تصفح الملفات</span>`,
                allowFileEncode: true,

            });

            // Set allowMultiple property to true
            $('.my-pond').filepond('allowMultiple', true);
            $('.my-pond').filepond('instantUpload', true);
            $('.my-pond').filepond('allowFileEncode', true);

            // Listen for addfile event
            $('.my-pond').on('FilePond:addfile', function(e) {
                console.log('file added event', e);
            });

            FilePond.setOptions({
                server: {
                    url: '/owner/image/upload/store/',
                    method: 'PUT',
                    load:'/owner/image/upload/',
                    headers: {
                        'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                    }
                }
            });

            // Manually add a file using the addfile method
            
            

            
            
            

        });
    </script>

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


        $('.subject').on('change', function() {
            if( (this.value) == 0 ){
                $('#other').css('display','block');
            }else {
                $('#other').css('display','none');
                $('#other').attr('value',null);

            }
        });
    </script>
    <script src="<?php echo e(asset('/js/ajax.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/softc92r/edu.ixmedia.tech/edu/resources/views/school/consult/create.blade.php ENDPATH**/ ?>