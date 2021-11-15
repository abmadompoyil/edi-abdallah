<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8"/>

    {{-- Title Section --}}
    <title>{{ config('app.name') }} | @yield('title', "تسجيل دخول" ?? '')</title>

    {{-- Meta Data --}}
    <meta name="description" content="@yield('page_description', $page_description ?? '')"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('media/logos/favicon.ico') }}" />

    {{-- Fonts --}}
    {{ Metronic::getGoogleFontsInclude() }}

    {{-- Global Theme Styles (used by all pages) --}}
    <link href="{{asset('assets/css/pages/login/classic/login-6.css?v=7.0.4')}}" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{asset('assets/plugins/global/plugins.bundle.css?v=7.0.4')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.4')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/style.bundle.css?v=7.0.4" rel="stylesheet')}}" type="text/css" />
    {{--    <link href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />--}}
    <link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    {{--    <link href="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />--}}
    <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    {{--    <link href="{{asset('assets/css/themes/layout/header/base/light.rtl.css')}}" rel="stylesheet" type="text/css" />--}}
    {{--    <link href="{{asset('assets/css/themes/layout/header/menu/light.rtl.css')}}" rel="stylesheet" type="text/css" />--}}
    {{--    <link href="{{asset('assets/css/themes/layout/brand/dark.rtl.css')}}" rel="stylesheet" type="text/css" />--}}
    {{--    <link href="{{asset('assets/css/themes/layout/aside/dark.rtl.css')}}" rel="stylesheet" type="text/css" />--}}
    {{-- Includable CSS --}}
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
    @yield('styles')
    <style>
        body {
            font-family: 'Almarai', sans-serif;
        }
        .alert.alert-danger {
            direction: ltr
        ;
        }
    </style>
</head>

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled sidebar-enabled page-loading">

<div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Content-->
        <div class="login-container order-2 order-lg-1 d-flex flex-center flex-row-fluid px-7 pt-lg-0 pb-lg-0 pt-4 pb-6 bg-white">
            <!--begin::Wrapper-->
            <div class="login-content d-flex flex-column pt-lg-0 pt-12">
                <!--begin::Logo-->
                <a href="#" class="login-logo pb-xl-20 pb-15" style="text-align: center;">
                    <img src="{{asset('index/img/LOGOAWQAT.png')}}" class="max-h-70px" alt="">
                </a>
                <!--end::Logo-->
                <!--begin::Signin-->
                <div class="login-form">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                @endif
                <!--begin::Form-->
                    <form class="form fv-plugins-framework" method="post" id="kt_login_singin_form" novalidate="novalidate" action="{{route('password.reset')}}">
                        <!--begin::Title-->
                        @csrf
                        @if(isset($status))
                            <div class="alert alert-danger">
                                    <p>{{$status}}</p>
                                </div>
                        @endif

                        <div class="pb-5 pb-lg-15">
                            <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">{{_("Forgotten Password ?
")}} </h3>
                            <h4>{{$page_title ?? 'Enter your email to reset your password

'}}</h4>
                            <div class="text-muted font-weight-bold font-size-h4">{{__("")}}
                                {{--                                <a href="{{route('register')}}" class="text-primary font-weight-bolder">أنشئ حساب جديد </a></div>--}}
                                <div class="fv-plugins-message-container">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group fv-plugins-icon-container" >
                                <div class="d-flex justify-content-between mt-n5" style="    float: left;">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">{{__("E-mail Address")}} </label>
                                </div>
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0" type="email" name="email" autocomplete="off">
                                <div class="fv-plugins-message-container">

                                </div></div>
                            <!--end::Form group-->

                            <!--begin::Action-->
                            <div class="pb-lg-0 pb-5">
                                <button type="submit" id="kt_login_singin_form_submit_button" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">
                                    {{__("Reset")}}</button>
                                {{--								--}}
                            </div>
                            <!--end::Action-->
                            <input type="hidden"><div></div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Signin-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--begin::Content-->
        <!--begin::Aside-->


        <!--end::Aside-->
    </div>
    <!--end::Login-->
</div>
<script>
    var KTAppSettings = {!! json_encode(config('layout.js'), JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES) !!};
</script>

{{-- Global Theme JS Bundle (used by all pages)  --}}
@foreach(config('layout.resources.js') as $script)
    <script src="{{ asset($script) }}" type="text/javascript"></script>
@endforeach
<script src="/js/scripts.bundle.js?v=7.0.4"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Scripts(used by this page)-->
<script src="/js/pages/custom/login/login-general.js?v=7.0.4"></script>
{{-- Includable JS --}}
<script src="/plugins/global/plugins.bundle.js?v=7.0.4"></script>
<script src="/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.4"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Scripts(used by this page)-->


</body>
<!--end::Body-->
</html>
