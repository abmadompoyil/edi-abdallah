{{--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
 --}}
    <!DOCTYPE html >
<html lang="{{\Illuminate\Support\Facades\App::getLocale()}}"  {{ Metronic::printAttrs('html') }} {{ Metronic::printClasses('html') }}
@if(\Illuminate\Support\Facades\App::getLocale()=="ar")
dir="rtl"
      @else
      dir="ltr"
    @endif
>
<head>
    <meta charset="utf-8"/>

    {{-- Title Section --}}
    <title>{{ config('app.name') }} | @yield('title', $page_title ?? '')</title>

    {{-- Meta Data --}}
    <meta name="description" content="@yield('page_description', $page_description ?? '')"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('media/logos/favicon.ico') }}" />

    {{-- Fonts --}}
    {{ Metronic::getGoogleFontsInclude() }}

    {{-- Global Theme Styles (used by all pages) --}}
    @if(\Illuminate\Support\Facades\App::getLocale()=="ar")
        <link href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/themes/layout/header/base/light.rtl.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/themes/layout/header/menu/light.rtl.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/themes/layout/brand/dark.rtl.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/themes/layout/aside/dark.rtl.css')}}" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
        {{-- Includable CSS --}}
    @else
        <link href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/themes/layout/header/base/light.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/themes/layout/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/themes/layout/brand/dark.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/themes/layout/aside/dark.css')}}" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    @endif
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-file-poster/dist/filepond-plugin-file-poster.css" rel="stylesheet">
    <link
        href="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.css"
        rel="stylesheet"
    />
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />

    @yield('styles')

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
<body {{ Metronic::printAttrs('body') }} {{ Metronic::printClasses('body') }}
      @if(\Illuminate\Support\Facades\App::getLocale()=="ar")
      direction="rtl" dir="rtl" style="direction: rtl"
      @else
      direction="ltr" dir="ltr" style="direction: ltr"
    @endif

>

<div class="content pt-0 d-flex flex-column flex-column-fluid" id="kt_content">

    <!--begin::Entry-->
    <!--begin::Hero-->
{{--    <div class="d-flex flex-row-fluid bgi-size-cover bgi-position-center" style="background-image: url('/assets/media/bg/bg-9.jpg')">--}}
{{--        <div class="container">--}}
{{--            <!--begin::Topbar-->--}}
{{--            <div class="d-flex justify-content-between align-items-center border-bottom border-white py-7">--}}
{{--                <h3 class="h4 text-dark mb-0">{{ config('app.name') }}</h3>--}}
{{--                <div class="d-flex">--}}
{{--                    <a href="#" class="font-size-h6 font-weight-bold">Schools</a>--}}
{{--                    <a href="/library/arabic" class="font-size-h6 font-weight-bold ml-8">Arabic library</a>--}}
{{--                    <a href="/islamic/arabic" class="font-size-h6 font-weight-bold ml-8">Islamic library</a>--}}
{{--                    <a href="/library/other" class="font-size-h6 font-weight-bold ml-8">Others files library</a>--}}
{{--                    <a href="#" class="font-size-h6 font-weight-bold ml-8">About us </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--end::Topbar-->--}}
{{--            <div class="d-flex align-items-stretch text-center flex-column py-40">--}}
{{--                <!--begin::Heading-->--}}
{{--                <h1 class="text-dark font-weight-bolder mb-12">Recruitment of teachers for national programs</h1>--}}
{{--                <!--end::Heading-->--}}
{{--                <!--begin::Form-->--}}
{{--                <form class="d-flex position-relative w-75 px-lg-40 m-auto">--}}
{{--                    <div class="input-group">--}}
{{--                        <!--begin::Icon-->--}}
{{--                        <div class="input-group-prepend">--}}
{{--												<span class="input-group-text bg-white border-0 py-7 px-8">--}}
{{--													<span class="svg-icon svg-icon-xl">--}}
{{--														<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Search.svg-->--}}
{{--														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--																<rect x="0" y="0" width="24" height="24"></rect>--}}
{{--																<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>--}}
{{--																<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>--}}
{{--															</g>--}}
{{--														</svg>--}}
{{--                                                        <!--end::Svg Icon-->--}}
{{--													</span>--}}
{{--												</span>--}}
{{--                        </div>--}}
{{--                        <!--end::Icon-->--}}
{{--                        <!--begin::Input-->--}}
{{--                        <input type="text" class="form-control h-auto border-0 py-7 px-1 font-size-h6" placeholder="Ask a question">--}}
{{--                        <!--end::Input-->--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--                <!--end::Form-->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!--end::Hero-->--}}
{{--    <!--begin::Section-->--}}
{{--    <!--begin::Section-->--}}

{{--    <!--end::Section-->--}}
{{--    <!--begin::Section-->--}}
{{--    <div class="container p-8">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-6">--}}
{{--                <!--begin::Callout-->--}}
{{--                <div class="card card-custom p-6 mb-8 mb-lg-0">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="row">--}}
{{--                            <!--begin::Content-->--}}
{{--                            <div class="col-sm-7">--}}
{{--                                <h2 class="text-dark mb-4">Teacher Recruitment for National Programs</h2>--}}
{{--                                <p class="text-dark-50 line-height-lg">Teacher Recruitment for National Programs</p>--}}
{{--                            </div>--}}
{{--                            <!--end::Content-->--}}
{{--                            <!--begin::Button-->--}}
{{--                            <div class="col-sm-5 d-flex align-items-center justify-content-sm-end">--}}
{{--                                <a href="/edu/public/TeacherRecruitmentforNationalPrograms-Letter.pdf" download class="btn font-weight-bolder text-uppercase font-size-lg btn-primary py-3 px-6">  Download  </a>--}}
{{--                            </div>--}}
{{--                            <!--end::Button-->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--end::Callout-->--}}
{{--            </div>--}}
{{--            <div class="col-lg-6">--}}
{{--                <!--begin::Callout-->--}}
{{--                <div class="card card-custom p-6 ">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="row">--}}
{{--                            <!--begin::Content-->--}}
{{--                            <div class="col-sm-7">--}}
{{--                                <h2 class="text-dark mb-4">Process for recruiting </h2>--}}
{{--                                <p class="text-dark-50 line-height-lg">Process for recruiting NP_Nov2019</p>--}}
{{--                            </div>--}}
{{--                            <!--end::Content-->--}}
{{--                            <!--begin::Button-->--}}
{{--                            <div class="col-sm-5 d-flex align-items-center justify-content-sm-end">--}}
{{--                                <a href="/edu/public/ProcessforrecruitingNP_Nov2019.pdf" download class="btn font-weight-bolder text-uppercase font-size-lg btn-primary py-3 px-6">  Download  </a>--}}
{{--                            </div>--}}
{{--                            <!--end::Button-->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--end::Callout-->--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
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
@include('layout.base._footer')

<script>var HOST_URL = "{{ route('quick-search') }}";</script>

{{-- Global Config (global config for global JS scripts) --}}
<script>
    var KTAppSettings = {!! json_encode(config('layout.js'), JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES) !!};
</script>

{{-- Global Theme JS Bundle (used by all pages)  --}}
@foreach(config('layout.resources.js') as $script)
    <script src="{{ asset($script) }}" type="text/javascript"></script>
@endforeach

{{-- Includable JS --}}
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
@yield('scripts')

</body>
</html>

