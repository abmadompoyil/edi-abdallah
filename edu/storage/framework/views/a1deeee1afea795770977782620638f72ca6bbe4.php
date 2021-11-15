

<?php
    $kt_logo_image = 'logo-light.png';
?>

<?php if(config('layout.brand.self.theme') === 'light'): ?>
    <?php $kt_logo_image = 'logo-dark.png' ?>

<?php elseif(config('layout.brand.self.theme') === 'dark'): ?>
    <?php $kt_logo_image = 'logo-light.png' ?>
<?php endif; ?>


<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto"
     id="kt_aside">

    
    <div class="brand flex-column-auto <?php echo e(Metronic::printClasses('brand', false)); ?>" id="kt_brand">
        <div class="brand-logo">
            <a href="<?php echo e(url('/')); ?>">
                <img alt="<?php echo e(config('app.name')); ?>" height="80" src="<?php echo e(asset('edu/public/logo2.png')); ?>"/>
            </a>
        </div>

        <?php if(config('layout.aside.self.minimize.toggle')): ?>
            <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                <?php echo e(Metronic::getSVG("media/svg/icons/Navigation/Angle-double-left.svg", "svg-icon-xl")); ?>

            </button>
        <?php endif; ?>

    </div>

    
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">

        <?php if(config('layout.aside.self.display') === false): ?>
            <div class="header-logo">
                <a href="<?php echo e(url('/')); ?>">
                    <img alt="<?php echo e(config('app.name')); ?>" src="<?php echo e(asset('media/logos/'.$kt_logo_image)); ?>"/>
                </a>
            </div>
        <?php endif; ?>
   <?php if(Auth::user()->isAdmin()): ?>
                <?php if(\Illuminate\Support\Facades\App::getLocale() == 'ar'): ?>
                    <div
                        id="kt_aside_menu"
                        class="aside-menu my-4 <?php echo e(Metronic::printClasses('aside_menu', false)); ?>"
                        data-menu-vertical="1"
                        <?php echo e(Metronic::printAttrs('aside_menu')); ?>>

                        <ul class="menu-nav <?php echo e(Metronic::printClasses('aside_menu_nav', false)); ?>">
                            <?php echo e(Menu::renderVerMenu(config('menu_aside.items'))); ?>

                        </ul>
                    </div>
    </div>
    <?php else: ?>
        <div
            id="kt_aside_menu"
            class="aside-menu my-4 <?php echo e(Metronic::printClasses('aside_menu', false)); ?>"
            data-menu-vertical="1"
            <?php echo e(Metronic::printAttrs('menu_aside_en')); ?>>

            <ul class="menu-nav <?php echo e(Metronic::printClasses('aside_menu_nav', false)); ?>">
                <?php echo e(Menu::renderVerMenu(config('menu_aside_en.items'))); ?>

            </ul>
        </div>
</div>
<?php endif; ?>
       <?php elseif(Auth::user()->isSchool()): ?>
           <?php if(\Illuminate\Support\Facades\App::getLocale() == 'ar'): ?>
               <div
                   id="kt_aside_menu"
                   class="aside-menu my-4 <?php echo e(Metronic::printClasses('aside_menu', false)); ?>"
                   data-menu-vertical="1"
                   <?php echo e(Metronic::printAttrs('aside_menu')); ?>>

                   <ul class="menu-nav <?php echo e(Metronic::printClasses('aside_menu_nav', false)); ?>">
                       <?php echo e(Menu::renderVerMenu(config('menu_aside.items'))); ?>

                   </ul>
               </div>
               </div>
           <?php else: ?>
               <div
                   id="kt_aside_menu"
                   class="aside-menu my-4 <?php echo e(Metronic::printClasses('aside_menu', false)); ?>"
                   data-menu-vertical="1"
                   <?php echo e(Metronic::printAttrs('menu_aside_en')); ?>>

                   <ul class="menu-nav <?php echo e(Metronic::printClasses('aside_menu_nav', false)); ?>">
                       <?php echo e(Menu::renderVerMenu(config('menu_aside_School_en.items'))); ?>

                   </ul>
               </div>
               </div>
               <?php endif; ?>
       <?php elseif(Auth::user()->isSuperVisor()): ?>
           <?php if(\Illuminate\Support\Facades\App::getLocale() == 'ar'): ?>
               <div
                   id="kt_aside_menu"
                   class="aside-menu my-4 <?php echo e(Metronic::printClasses('aside_menu', false)); ?>"
                   data-menu-vertical="1"
                   <?php echo e(Metronic::printAttrs('aside_menu')); ?>>

                   <ul class="menu-nav <?php echo e(Metronic::printClasses('aside_menu_nav', false)); ?>">
                       <?php echo e(Menu::renderVerMenu(config('menu_aside.items'))); ?>

                   </ul>
               </div>
               </div>
           <?php else: ?>
               <div
                   id="kt_aside_menu"
                   class="aside-menu my-4 <?php echo e(Metronic::printClasses('aside_menu', false)); ?>"
                   data-menu-vertical="1"
                   <?php echo e(Metronic::printAttrs('menu_aside_Super_en')); ?>>

                   <ul class="menu-nav <?php echo e(Metronic::printClasses('aside_menu_nav', false)); ?>">
                       <?php echo e(Menu::renderVerMenu(config('menu_aside_Super_en.items'))); ?>

                   </ul>
               </div>
               </div>
               <?php endif; ?>
        <?php endif; ?>

</div>
<?php /**PATH /home4/softc92r/edu.ixmedia.tech/edu/resources/views/layout/base/_aside.blade.php ENDPATH**/ ?>