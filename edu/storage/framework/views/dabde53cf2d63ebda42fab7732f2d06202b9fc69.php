
<ul class="navi navi-hover py-4">
    
    <?php if(\Illuminate\Support\Facades\App::getLocale()=="ar"): ?>
        <li class="navi-item">
            <a href="/greeting/ar" class="navi-link">
            <span class="symbol symbol-20 mr-3">
                <img src="<?php echo e(asset('media/svg/flags/008-saudi-arabia.svg')); ?>" alt=""/>
            </span>
                <span class="navi-text">العربية</span>
            </a>
        </li>
        <li class="navi-item">
            <a href="/greeting/en" class="navi-link">
            <span class="symbol symbol-20 mr-3">
                <img src="<?php echo e(asset('media/svg/flags/226-united-states.svg')); ?>" alt=""/>
            </span>
                <span class="navi-text">English</span>
            </a>
        </li>
    <?php else: ?>
        <li class="navi-item">
            <a href="/greeting/en" class="navi-link">
            <span class="symbol symbol-20 mr-3">
                <img src="<?php echo e(asset('media/svg/flags/226-united-states.svg')); ?>" alt=""/>
            </span>
                <span class="navi-text">English</span>
            </a>
        </li>
        <li class="navi-item">
            <a href="/greeting/ar" class="navi-link">
            <span class="symbol symbol-20 mr-3">
                <img src="<?php echo e(asset('media/svg/flags/008-saudi-arabia.svg')); ?>" alt=""/>
            </span>
                <span class="navi-text">العربية</span>
            </a>
        </li>
<?php endif; ?>







































</ul>
<?php /**PATH /home4/softc92r/alfarismedia.com/edu/resources/views/layout/partials/extras/dropdown/_languages.blade.php ENDPATH**/ ?>