@if($lang == 'en')
    <header class="header" >
        <!--start navbar-->
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#myNavbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand page-scroll" href="index.html">
                            <img src="index/img/LOGOwhite.png"  height="60" alt="logo">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="navbar-collapse collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a class="page-scroll" href="#hero">Home</a></li>
                            <li><a class="page-scroll" href="#features">Features</a></li>
                            <li><a class="page-scroll" href="#faqs">FAQS</a></li>
                            <li><a class="page-scroll" href="#news">News</a></li>
                            <li><a class="page-scroll" href="#contact">Contact </a></li>
                            <li><a class="page-scroll" href="{{route('lang','ar')}}">arabic</a></li>
                            {{--                                <li><a class="page-scroll" href="{{route('register')}}">تسجيل ك مالك</a></li>--}}

                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!--end navbar-->
    </header>

@else
<header class="header" >
    <!--start navbar-->
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#myNavbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="index.html">
                        <img src="index/img/LOGOwhite.png"  height="60" alt="logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="navbar-collapse collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a class="page-scroll" href="#hero">الرئيسية</a></li>
                        <li><a class="page-scroll" href="#features">المميزات</a></li>
                        <li><a class="page-scroll" href="#faqs">الاسئلة الشائعة</a></li>
                        <li><a class="page-scroll" href="#news">الأخبار</a></li>
                        <li><a class="page-scroll" href="#contact">اتصل بنا</a></li>
                        <li><a class="page-scroll" href="{{route('lang','en')}}">الإنجليزية</a></li>
                        {{--                                <li><a class="page-scroll" href="{{route('register')}}">تسجيل ك مالك</a></li>--}}

                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!--end navbar-->
</header>
@endif
