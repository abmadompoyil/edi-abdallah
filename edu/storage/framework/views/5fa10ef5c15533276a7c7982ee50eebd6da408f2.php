<?php $__env->startSection('content'); ?>

    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label"><?php echo e($page_title); ?>

                    <div class="text-muted pt-2 font-size-sm"><?php echo e($page_description); ?></div>
                </h3>
            </div>
            <div class="card-toolbar">
                <!--begin::Dropdown-->
                <!--end::Dropdown-->
                <!--begin::Button-->


                <!--end::Button-->
            </div>
        </div>
        <div class="card-body">
            <form  method="POST" action="<?php echo e(route('school.files.store')); ?>" class="formAction" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="hidden" value="<?php echo e($type); ?>" name="type">
                <div class="row ">
                    <div class="col-lg-3 ">
                        <input type="text" name="name" class="form-control datatable-input" placeholder="<?php echo e(__("Name")); ?>" data-col-index="0"  >
                    </div>
                    <div class="col-lg-3 ">
                        <div class="custom-file">

                            <div class="input-group input-group-lg ">
                                <input required type="file" name="src" multiple class="custom-file-input"  id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <button class="btn btn-primary btn-primary--icon btn-save" id="kt_search" >
													<span>
														<i class="la la-search"></i>
														<span><?php echo e(__("Upload new file")); ?></span>
													</span>
                        </button>&nbsp;&nbsp;
                    </div>
                </div>
            </form>
        </div>

        <div class="card-body" id="card-body">


            <?php echo $__env->make('school.files.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




        </div>



    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('styles'); ?>
    <link href="<?php echo e(asset('plugins/custom/datatables/datatables.bundle.css')); ?>" rel="stylesheet" type="text/css"/>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('scripts'); ?>
    
    <script src="<?php echo e(asset('plugins/custom/datatables/datatables.bundle.js')); ?>" type="text/javascript"></script>

    
    <script src="<?php echo e(asset('js/pages/crud/datatables/basic/basic.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('/js/ajax.js')); ?>"></script>
    <script type="text/javascript">
        $('#kt_search').on('click',function(){
            $value =$("#s_id").val();

            $.ajax({
                type : 'get',
                url : '<?php echo e(URL::to('admin/user/teachers/')); ?>',
                data:{'value':$value},
                success:function(data){
                    $('#card-body').html(data)
                }
            });
        })
    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/softc92r/edu.ixmedia.tech/edu/resources/views/school/files/datatables.blade.php ENDPATH**/ ?>