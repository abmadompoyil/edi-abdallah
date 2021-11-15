<?php
	$direction = config('layout.extras.notifications.offcanvas.direction', 'right');
?>
<?php
    if(Auth::user()->isSchool()){
   $notify = \App\Edu\Notifaction::where('school_id',Auth::user()->id)->latest('created_at')->get();
   $notifyCount = \App\Edu\Notifaction::where('school_id',Auth::user()->id)->latest('created_at')->count();
}else{
       $notify = \App\Edu\Notifaction::where('supervisor_id',0)->latest('created_at')->get();
       $notifyCount = \App\Edu\Notifaction::where('supervisor_id',0)->latest('created_at')->count();

}
?>
 
<div id="kt_quick_notifications" class="offcanvas offcanvas-<?php echo e($direction); ?> p-10">
	
	<div class="offcanvas-header d-flex align-items-center justify-content-between mb-10">
		<h3 class="font-weight-bold m-0">
			Notifications
			<small class="text-muted font-size-sm ml-2"><?php echo e($notifyCount); ?> New</small>
		</h3>
		<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_notifications_close">
			<i class="ki ki-close icon-xs text-muted"></i>
		</a>
	</div>

	
	<div class="offcanvas-content pr-5 mr-n5">
		
		<div class="navi navi-icon-circle navi-spacer-x-0">


            <?php $__currentLoopData = $notify; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $not): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<a href="<?php echo e($not->urls()); ?>" class="navi-item">
				<div class="navi-link rounded">
					<div class="symbol symbol-50 symbol-circle mr-3">
						<div class="symbol-label"><i class="flaticon-bell text-success icon-lg"></i></div>
					</div>
					<div class="navi-text">
						<div class="font-weight-bold font-size-lg">
                <?php echo e($not->text); ?>

						</div>
						<div class="text-muted">
                <?php echo e($not->created_at); ?>

                        </div>
					</div>
				</div>
			</a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		</div>
	</div>
</div>
<?php /**PATH /home4/softc92r/edu.ixmedia.tech/edu/resources/views/layout/partials/extras/offcanvas/_quick-notifications.blade.php ENDPATH**/ ?>