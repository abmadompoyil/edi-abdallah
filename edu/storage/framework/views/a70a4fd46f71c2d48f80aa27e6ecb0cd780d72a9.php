
<!DOCTYPE html >
<html lang="<?php echo e(\Illuminate\Support\Facades\App::getLocale()); ?>"  <?php echo e(Metronic::printAttrs('html')); ?> <?php echo e(Metronic::printClasses('html')); ?>

<?php if(\Illuminate\Support\Facades\App::getLocale()=="ar"): ?>
dir="rtl"
<?php else: ?>
    dir="ltr"
      <?php endif; ?>
>
    <head>
        <meta charset="utf-8"/>

        
        <title><?php echo e(config('app.name')); ?> | <?php echo $__env->yieldContent('title', $page_title ?? ''); ?></title>

        
        <meta name="description" content="<?php echo $__env->yieldContent('page_description', $page_description ?? ''); ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
        
        <link rel="shortcut icon" href="<?php echo e(asset('media/logos/favicon.ico')); ?>" />

        
        <?php echo e(Metronic::getGoogleFontsInclude()); ?>


        
        <?php if(\Illuminate\Support\Facades\App::getLocale()=="ar"): ?>
        <link href="<?php echo e(asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/plugins/global/plugins.bundle.rtl.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/plugins/custom/prismjs/prismjs.bundle.rtl.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/css/style.bundle.rtl.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/css/themes/layout/header/base/light.rtl.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/css/themes/layout/header/menu/light.rtl.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/css/themes/layout/brand/dark.rtl.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/css/themes/layout/brand/light.rtl.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/css/themes/layout/aside/dark.rtl.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/css/themes/layout/aside/light.rtl.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
            
        <?php else: ?>
            <link href="<?php echo e(asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')); ?>" rel="stylesheet" type="text/css" />
            <link href="<?php echo e(asset('assets/plugins/global/plugins.bundle.css')); ?>" rel="stylesheet" type="text/css" />
            <link href="<?php echo e(asset('assets/plugins/custom/prismjs/prismjs.bundle.css')); ?>" rel="stylesheet" type="text/css" />
            <link href="<?php echo e(asset('assets/css/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />
            <link href="<?php echo e(asset('assets/css/themes/layout/header/base/light.css')); ?>" rel="stylesheet" type="text/css" />
            <link href="<?php echo e(asset('assets/css/themes/layout/header/menu/light.css')); ?>" rel="stylesheet" type="text/css" />
            <link href="<?php echo e(asset('assets/css/themes/layout/brand/dark.css')); ?>" rel="stylesheet" type="text/css" />
            <link href="<?php echo e(asset('assets/css/themes/layout/brand/light.css')); ?>" rel="stylesheet" type="text/css" />
            <link href="<?php echo e(asset('assets/css/themes/layout/aside/dark.css')); ?>" rel="stylesheet" type="text/css" />
            <link href="<?php echo e(asset('assets/css/themes/layout/aside/light.css')); ?>" rel="stylesheet" type="text/css" />
            <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
          <?php endif; ?>
        <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
        <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
        <link href="https://unpkg.com/filepond-plugin-file-poster/dist/filepond-plugin-file-poster.css" rel="stylesheet">
        <link
            href="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.css"
            rel="stylesheet"
        />
        <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />

        <?php echo $__env->yieldContent('styles'); ?>

<style>
    body{
        font-family: 'Lato', sans-serif;

    }
    .aside-menu .menu-nav > .menu-item.menu-item-open > .menu-heading .menu-icon.svg-icon svg g [fill], .aside-menu .menu-nav > .menu-item.menu-item-open > .menu-link .menu-icon.svg-icon svg g [fill] {
        -webkit-transition: fill 0.3s ease;
        transition: fill 0.3s ease;
        fill: #eaa94c;
    }
    .aside-menu .menu-nav > .menu-item:not(.menu-item-parent):not(.menu-item-open):not(.menu-item-here):not(.menu-item-active):hover > .menu-heading .menu-icon, .aside-menu .menu-nav > .menu-item:not(.menu-item-parent):not(.menu-item-open):not(.menu-item-here):not(.menu-item-active):hover > .menu-link .menu-icon {
        color: #eaa94c;
    }
    .aside-menu .menu-nav > .menu-item > .menu-heading .menu-icon.svg-icon svg g [fill], .aside-menu .menu-nav > .menu-item > .menu-link .menu-icon.svg-icon svg g [fill] {
        transition: fill 0.3s ease;
        fill: #78bac2 ;
    }
</style>
    </head>
    <body <?php echo e(Metronic::printAttrs('body')); ?> <?php echo e(Metronic::printClasses('body')); ?>

          <?php if(\Illuminate\Support\Facades\App::getLocale()=="ar"): ?>
          direction="rtl" dir="rtl" style="direction: rtl"
          <?php else: ?>
          direction="ltr" dir="ltr" style="direction: ltr"
          <?php endif; ?>

    >

        <?php if(config('layout.page-loader.type') != ''): ?>
            <?php echo $__env->make('layout.partials._page-loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>

        <?php echo $__env->make('layout.base._layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <script>var HOST_URL = "<?php echo e(route('quick-search')); ?>";</script>

        
        <script>
            var KTAppSettings = <?php echo json_encode(config('layout.js'), JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES); ?>;
        </script>

        
        <?php $__currentLoopData = config('layout.resources.js'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $script): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <script src="<?php echo e(asset($script)); ?>" type="text/javascript"></script>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
        <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
        <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
        <script src="https://unpkg.com/filepond-plugin-file-poster/dist/filepond-plugin-file-poster.js"></script>

        <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>

        <!-- include FilePond plugins -->
        <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>
        <script src="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.js"></script>

        <!-- include FilePond jQuery adapter -->
        <script src="https://unpkg.com/filepond-plugin-file-encode/dist/filepond-plugin-file-encode.js"></script>

        <script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>
        <?php echo $__env->yieldContent('scripts'); ?>
        <script src="/assets/plugins/global/plugins.bundle.js?v=7.2.7"></script>
        <script src="/assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.2.7"></script>
        <script src="/assets/js/scripts.bundle.js?v=7.2.7"></script>
        <!--end::Global Theme Bundle-->
        <!--begin::Page Scripts(used by this page)-->
        <script src="/assets/js/pages/builder.js?v=7.2.7"></script>

        <script src="<?php echo e(asset('plugins/custom/datatables/datatables.bundle.js')); ?>" type="text/javascript"></script>

        
        <script src="<?php echo e(asset('js/pages/crud/datatables/basic/basic.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(asset('js/app.js')); ?>" type="text/javascript"></script>

    </body>
</html>

<?php /**PATH /home4/softc92r/edu.ixmedia.tech/edu/resources/views/layout/default.blade.php ENDPATH**/ ?>