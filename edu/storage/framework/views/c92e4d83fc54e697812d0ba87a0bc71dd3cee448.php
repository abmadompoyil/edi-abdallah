
<?php if(config('layout', 'extras/user/dropdown/style') == 'light'): ?>
    
    <div class="d-flex align-items-center p-8 rounded-top">
        
        <div class="symbol symbol-md bg-light-primary mr-3 flex-shrink-0">
            <img src="<?php echo e(asset('media/users/300_21.jpg')); ?>" alt=""/>
        </div>

        
        <div class="text-dark m-0 flex-grow-1 mr-3 font-size-h5"><?php echo e(Auth::user()->name); ?></div>
        <span class="label label-light-success label-lg font-weight-bold label-inline">
            <?php if(Auth::guard('web')->check()): ?>
                مرحبا <?php echo e(Auth::guard('web')->user()->name); ?>

            <?php elseif(Auth::guard('drivers-web')->check()): ?>
                <?php echo e(Auth::user()->property->count()); ?> عقار
            <?php endif; ?>


        </span>
    </div>
    <div class="separator separator-solid"></div>
<?php else: ?>
    
    <div class="d-flex align-items-center justify-content-between flex-wrap p-8 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url('<?php echo e(asset('media/misc/bg-1.jpg')); ?>')">
        <div class="d-flex align-items-center mr-2">
            
            <div class="symbol bg-white-o-15 mr-3">
                <span class="symbol-label text-success font-weight-bold font-size-h4"><?php echo e(Auth::user()->name[0]); ?></span>
            </div>

            
            <div class="text-white m-0 flex-grow-1 mr-3 font-size-h5"><?php echo e(Auth::user()->name); ?></div>
        </div>
        <span class="label label-success label-lg font-weight-bold label-inline">
            <?php if(Auth::guard('web')->check()): ?>
                Hello <?php echo e(Auth::guard('web')->user()->name); ?>

            <?php elseif(Auth::guard('drivers-web')->check()): ?>
                <?php echo e(Auth::user()->property->count()); ?> عقار
            <?php endif; ?>
        </span>
    </div>
<?php endif; ?>


<div class="navi navi-spacer-x-0 pt-5">
    

    

    

    

    
    <div class="navi-separator mt-3"></div>
    <div class="navi-footer  px-8 py-5">
        <a href="<?php echo e(route('logout')); ?>"  class="btn btn-light-primary font-weight-bold" onclick="event.preventDefault();document.getElementById('frm-logout').submit();" > Logout</a>
        <form id="frm-logout" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo e(csrf_field()); ?>

        </form>
    </div>
</div>
<?php /**PATH /home4/softc92r/edu.ixmedia.tech/edu/resources/views/layout/partials/extras/dropdown/_user.blade.php ENDPATH**/ ?>