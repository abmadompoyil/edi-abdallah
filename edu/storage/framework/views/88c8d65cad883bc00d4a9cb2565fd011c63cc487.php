
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
        <link href="<?php echo e(asset('assets/css/themes/layout/aside/dark.rtl.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
        
    <?php else: ?>
        <link href="<?php echo e(asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/plugins/global/plugins.bundle.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/plugins/custom/prismjs/prismjs.bundle.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/css/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/css/themes/layout/header/base/light.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/css/themes/layout/header/menu/light.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/css/themes/layout/brand/dark.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/css/themes/layout/aside/dark.css')); ?>" rel="stylesheet" type="text/css" />
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
            font-family: 'Tajawal', sans-serif;
            background-color: white !important;
        }
        .card.card-custom.p-6 {
            height: 170px;
        }
        a.font-size-h6.font-weight-bold.ml-8,a.font-size-h6.font-weight-bold {
            color: black;
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

<div class="content pt-0 d-flex flex-column flex-column-fluid" id="kt_content">

    <!--begin::Entry-->
    <!--begin::Hero-->




































































































    <div class="container p-8 ">
        <div class="row">
            <div class="fixed-top p-6">
                <img height="100" src="/edu/public/logo2.png">
            </div>
            <div class="col-lg-12">
                <h1 class="text-lg-center p-8" style="font-size: 5em" >   التوظيف</h1>
            </div>
            <div class="col-lg-4">
                <!--begin::Callout-->

                <!--end::Callout-->
            </div>
            <div class="col-lg-4 border-right-0 border-right-md border-bottom border-bottom-xxl-0 card card-custom gutter-b card-stretch" style="background-color: white;" >
                <!--begin::Callout-->
                    <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                        <div class="d-flex flex-center position-relative mb-25">
														<span class="svg svg-fill-primary position-absolute">
														<img src="/media/3.png">
                                <!--end::Svg Icon-->
														</span>
                        </div>
                        <div class="p-8">
                        <h4 class="font-size-h2 d-block font-weight-bold mb-7 text-dark-50">Edi</h4>
                        </div>

                        <div class="d-flex justify-content-center">
                            <a href="/edu/public/PolicyEng.pdf" type="button" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Download</a>
                        </div>
                    </div>
                               <!--end::Callout-->
            </div>
            <div class="col-lg-4">
                <!--begin::Callout-->

                <!--end::Callout-->
            </div>
        </div>
        <div class="row">



            <div class="col-lg-4 border-right-0 border-right-md border-bottom border-bottom-xxl-0 card card-custom gutter-b card-stretch" style="background-color: white;" >
                <!--begin::Callout-->
                    <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                        <div class="d-flex flex-center position-relative mb-25">
														<span class="svg svg-fill-primary position-absolute">
														<img src="/media/1.png">
                                <!--end::Svg Icon-->
														</span>
                        </div>
                        <div class="p-8">
                        <h4 class="font-size-h2 d-block font-weight-bold mb-7 text-dark-50">Policy</h4>
                        </div>

                        <div class="d-flex justify-content-center">
                            <a href="/edu/public/2019-2020.pdf" type="button" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Download</a>
                        </div>
                    </div>
                               <!--end::Callout-->
            </div>

            <div class="col-lg-4">
                <!--begin::Callout-->

                <!--end::Callout-->
            </div>

            <div class="col-lg-4 border-right-0 border-right-md border-bottom border-bottom-xxl-0 card card-custom gutter-b card-stretch" style="background-color: white;" >
                <!--begin::Callout-->
                    <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                        <div class="d-flex flex-center position-relative mb-25">
														<span class="svg svg-fill-primary position-absolute">
														<img src="/media/3.png">
                                <!--end::Svg Icon-->
														</span>
                        </div>
                        <div class="p-8">
                        <h4 class="font-size-h2 d-block font-weight-bold mb-7 text-dark-50">Schools</h4>
                        </div>

                        <div class="d-flex justify-content-center">
                            <a href="/admin/login" type="button" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Sign In</a>
                        </div>
                    </div>
                               <!--end::Callout-->
            </div>

        </div>
    </div>

    <!--end::Section-->
    <!--end::Entry-->

</div>
<?php echo $__env->make('layout.base._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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

</body>
</html>

<?php /**PATH /home4/softc92r/edu.ixmedia.tech/edu/resources/views/index.blade.php ENDPATH**/ ?>