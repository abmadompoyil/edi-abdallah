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
    <div class="d-flex flex-row-fluid bgi-size-cover bgi-position-center" style="background-image: url('/assets/media/bg/bg-9.jpg')">
        <div class="container">
            <!--begin::Topbar-->
            <div class="d-flex justify-content-between align-items-center border-bottom border-white py-7">
                <h3 class="h4 text-dark mb-0">{{ config('app.name') }}</h3>
                <div class="d-flex">
                    <a href="#" class="font-size-h6 font-weight-bold">Schools</a>
                    <a href="/library/arabic" class="font-size-h6 font-weight-bold ml-8">Arabic library</a>
                    <a href="/islamic/arabic" class="font-size-h6 font-weight-bold ml-8">Islamic library</a>
                    <a href="/library/other" class="font-size-h6 font-weight-bold ml-8">Others files library</a>
                    <a href="#" class="font-size-h6 font-weight-bold ml-8">About us </a>
                </div>
            </div>
            <!--end::Topbar-->
            <div class="d-flex align-items-stretch text-center flex-column py-40">
                <!--begin::Heading-->
                <h1 class="text-dark font-weight-bolder mb-12">{{$page_title}}</h1>
                <h3 class="text-dark font-weight-bolder mb-12">{{$page_description  }}</h3>
                <!--end::Heading-->
                <!--begin::Form-->
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
                <!--end::Form-->
            </div>
        </div>
    </div>
    <!--end::Hero-->
    <!--begin::Section-->
    <!--begin::Section-->

    <!--end::Section-->
    <!--begin::Section-->


    <div class="container pu-8">
        <!--begin::Row-->
        <div class="row">
            <div class="col-12 p-9">
                <h1 class="text-lg-center"> {{$page_title}} </h1>
            </div>

            @foreach($files as $file)
            <div class="col-xl-4">
                <!--begin::Card-->
                <div class="card card-custom gutter-b card-stretch">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center">
                            <!--begin::Pic-->
                            <div class="flex-shrink-0 mr-4 symbol symbol-60 symbol-circle">
                                <img src="/assets/media/svg/icons/Files/Selected-file.svg"/>
                            </div>
                            <!--end::Pic-->
                            <!--begin::Info-->
                            <div class="d-flex flex-column mr-auto">
                                <!--begin: Title-->
                                <div class="d-flex flex-column mr-auto">
                                    <a href="{{asset($file->src)}}" download="" class="text-dark text-hover-primary font-size-h4 font-weight-bolder mb-1">{{$file->name}}</a>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Toolbar-->
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Description-->
                        <!--end::Description-->
                        <!--begin::Data-->
                        <!--end::Data-->
                        <!--begin::Progress-->
                        <!--ebd::Progress-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer d-flex align-items-center">
                        <div class="d-flex">
                            <div class="d-flex align-items-center mr-7">
<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-06-223557/theme/html/demo1/dist/../src/media/svg/icons/Files/Cloud-download.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M5.74714567,13.0425758 C4.09410362,11.9740356 3,10.1147886 3,8 C3,4.6862915 5.6862915,2 9,2 C11.7957591,2 14.1449096,3.91215918 14.8109738,6.5 L17.25,6.5 C19.3210678,6.5 21,8.17893219 21,10.25 C21,12.3210678 19.3210678,14 17.25,14 L8.25,14 C7.28817895,14 6.41093178,13.6378962 5.74714567,13.0425758 Z" fill="#000000" opacity="0.3"/>
        <path d="M11.1288761,15.7336977 L11.1288761,17.6901712 L9.12120481,17.6901712 C8.84506244,17.6901712 8.62120481,17.9140288 8.62120481,18.1901712 L8.62120481,19.2134699 C8.62120481,19.4896123 8.84506244,19.7134699 9.12120481,19.7134699 L11.1288761,19.7134699 L11.1288761,21.6699434 C11.1288761,21.9460858 11.3527337,22.1699434 11.6288761,22.1699434 C11.7471877,22.1699434 11.8616664,22.1279896 11.951961,22.0515402 L15.4576222,19.0834174 C15.6683723,18.9049825 15.6945689,18.5894857 15.5161341,18.3787356 C15.4982803,18.3576485 15.4787093,18.3380775 15.4576222,18.3202237 L11.951961,15.3521009 C11.7412109,15.173666 11.4257142,15.1998627 11.2472793,15.4106128 C11.1708299,15.5009075 11.1288761,15.6153861 11.1288761,15.7336977 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.959697, 18.661508) rotate(-270.000000) translate(-11.959697, -18.661508) "/>
    </g>
</svg><!--end::Svg Icon--></span>
                                <a href="{{asset($file->src)}}" download="" class="font-weight-bolder text-primary ml-2">Dwonload</a>
                            </div>
                        </div>
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end:: Card-->
            </div>
            @endforeach
        </div>
        <!--end::Row-->
        <!--begin::Row-->

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

