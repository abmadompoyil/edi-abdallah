


<?php if(config('layout.page-loader.type') == 'default'): ?>
    <div class="page-loader">
        <div class="spinner spinner-primary"></div>
    </div>
<?php endif; ?>


<?php if(config('layout.page-loader.type') == 'spinner-message'): ?>
    <div class="page-loader page-loader-base">
        <div class="blockui">
            <span>Please wait...</span>
            <span><div class="spinner spinner-primary"></div></span>
        </div>
    </div>
<?php endif; ?>


<?php if(config('layout.page-loader.type') == 'spinner-logo'): ?>
    <div class="page-loader page-loader-logo">
        <img alt="<?php echo e(config('app.name')); ?>" src="<?php echo e(asset('media/logos/logo-letter-1.png')); ?>"/>
        <div class="spinner spinner-primary"></div>
    </div>
<?php endif; ?>
<?php /**PATH /home4/softc92r/alfarismedia.com/edu/resources/views/layout/partials/_page-loader.blade.php ENDPATH**/ ?>