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

        <div class="card-body" id="card-body">


            <?php echo $__env->make('supervisor.job.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




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

<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/softc92r/edu.ixmedia.tech/edu/resources/views/supervisor/job/datatables.blade.php ENDPATH**/ ?>