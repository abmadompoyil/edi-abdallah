<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--title-->
    <title> الشامل | وسيط بينك وبين الآخرين</title>

    <!--favicon icon-->
    <link rel="icon" href="index/img/LOGOAWQAT.png" type="image/png" sizes="16x16">

    <!-- font-awesome css -->
    <link rel="stylesheet" href="index/css/font-awesome.min.css">

    <!--themify icon-->
    <link rel="stylesheet" href="index/css/themify-icons.css">

    <!-- magnific popup css-->
    <link rel="stylesheet" href="index/css/magnific-popup.css">

    <!--owl carousel -->
    <link href="index/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="index/css/owl.carousel.min.css" rel="stylesheet">

    <!-- bootstrap core css -->
    <link href="index/css/bootstrap.min.css" rel="stylesheet">

    <!-- custom css -->
    <link href="index/css/style1.css" rel="stylesheet">

    <!-- responsive css -->
    <link href="index/css/responsive.css" rel="stylesheet">

    <script src="index/js/vendor/modernizr-2.8.1.min.js"></script>
    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/vendor/html5shim.js"></script>
    <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
    <!--    <link-->
    <!--            rel="stylesheet"-->
    <!--            href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css"-->
    <!--            integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If"-->
    <!--            crossorigin="anonymous">-->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">    <style>
        body{
            /*direction: rtl !important;*/
            text-align: right;
            unicode-bidi: bidi-override !important;
            /*direction: unset !important;*/
            text-align:right;
        }
        .p{
        linear-gradient(150deg, rgba(43, 57, 141, 0.76) 15%, rgba(115, 207, 231, 0.89) 70%, rgba(249, 162, 54, 0.74) 94%);

        }
        .download-btn {

            float: right !important;

            width: 70% !important;
        }
        #toTop span {

            background: #44b299 !important;
        }
        #accordion .panel-title a:before, #accordion .panel-title a.collapsed:before  #accordion .panel:before {

            background: linear-gradient(150deg,#1f80a8 15%,#36a09f 70%,#4ec094 94%) !important;

        }
element.style {
}

    </style>

    <?php if($lang == 'en'): ?>
        <style>
            body{
                text-align: left;

            }
            html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video{
                direction: ltr;

            }
            .feature-icon {
                margin-right: 20px;
            }
            @media (min-width: 768px) {
                .navbar-nav > li {
                    float: left !important;
                }
            }
            .section-heading h3 {
                font-weight: 700;
                text-align: center;
            }
            .section-heading p{
                text-align: center;

            }
            #accordion .panel-title a:before, #accordion .panel-title a.collapsed:before {
                right: 25px;
                left: unset;
            }
        </style>
        <?php endif; ?>
</head>


<body >

<!-- Preloader -->
<div id="preloader">
    <div id="loader"></div>
</div>
<!--end preloader-->

<div id="main" class="main-content-wraper">
    <div class="main-content-inner">

        <!--start header section-->
        <?php echo $__env->make('index.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--end header section-->

        <!--start hero section-->
        <section id="hero" class="section-lg section-hero section-circle">
            <!--background circle shape-->
            <div class="shape shape-style-1 shape-primary">
                <span class="circle-150"></span>
                <span class="circle-50"></span>
                <span class="circle-50"></span>
                <span class="circle-75"></span>
                <span class="circle-100"></span>
                <span class="circle-75"></span>
                <span class="circle-50"></span>
                <span class="circle-100"></span>
                <span class="circle-50"></span>
                <span class="circle-100"></span>
            </div>
            <!--background circle shape-->
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="hero-content-wrap">
                            <div class="hero-content">
                                <h1> <?php echo e($front->header_Title); ?> </h1>

                                <p>
                                    <?php echo e($front->header_subTitle); ?>

                                </p>
                                <div class="slider-action-btn">
                                    <a href="<?php echo e($front->header_btn1_url); ?>" class="btn softo-solid-btn"><i class="fa fa-apple"></i><?php echo e($front->header_btn1); ?></a>
                                    <a href="<?php echo e($front->header_btn2_url); ?>" class="btn softo-solid-btn"><i class="fa fa-android"> </i> <?php echo e($front->header_btn2); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mobile-slider-area">
                            <div class="phone">
                                <img src="index/img/funny.png" alt="Phone" class="img-responsive">
                            </div>

                            <div class="slider-indicator">
                                <ul>
                                    <li id="prev">
                                        <i class="fa fa-angle-right"></i>
                                    </li>
                                    <li id="next">
                                        <i class="fa fa-angle-left"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-shape">
                <img src="index/img/waves-shape.svg" alt="shape image">
            </div>
        </section>
        <!--end hero section-->

        <!--start promo section-->
        <section class="promo-section ptb-90">
            <div class="promo-section-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="bg-secondary single-promo-section text-center">
                                <div class="single-promo-content">
                                    <span class="<?php echo e($front->icon_1_icon_fa); ?>"></span>
                                    <h6><?php echo e($front->icon_1_icon); ?>  </h6>
                                    <p><?php echo e($front->icon_1_text); ?></p>
                                </div>
                                <div class="line"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="bg-secondary single-promo-section text-center">
                                <div class="single-promo-content">
                                    <span class="<?php echo e($front->icon_2_icon_fa); ?>"></span>
                                    <h6><?php echo e($front->icon_2_icon); ?>  </h6>
                                    <p><?php echo e($front->icon_2_text); ?></p>
                                </div>
                                <div class="line"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="bg-secondary single-promo-section text-center">
                                <div class="single-promo-content">
                                    <span class="<?php echo e($front->icon_3_icon_fa); ?>"></span>
                                    <h6><?php echo e($front->icon_3_icon); ?>  </h6>
                                    <p><?php echo e($front->icon_3_text); ?></p>
                                </div>
                                <div class="line"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="bg-secondary single-promo-section text-center">
                                <div class="single-promo-content">
                                    <span class="<?php echo e($front->icon_4_icon_fa); ?>"></span>
                                    <h6><?php echo e($front->icon_4_icon); ?>  </h6>
                                    <p><?php echo e($front->icon_4_text); ?></p>
                                </div>
                                <div class="line"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--end promo section-->

        <!--start features section-->
        <section id="features" class="bg-secondary ptb-90">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading text-center">
                            <h3><?php echo e($front->section2_title); ?></h3>
                            <p>  <?php echo e($front->section2_sub_title); ?>  </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-4 col-sm-6">
                        <!--feature single start-->
                        <div class="single-feature mb-5">
                            <div class="feature-icon">
                                <div class="icon icon-shape bg-color white-text">
                                    <i class="fa fa-car"></i>
                                </div>
                            </div>
                            <div class="feature-content">
                                <?php if($lang == 'en'): ?>

                                    <h5><?php echo e($services[3]['title_en']); ?></h5>
                                    <p class="mb-0"><?php echo e($services[3]['sub_title_en']); ?> </p>
                                <?php else: ?>
                                    <h5><?php echo e($services[3]['title']); ?></h5>
                                    <p class="mb-0"><?php echo e($services[3]['sub_title']); ?> </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <!--feature single end-->
                        <!--feature single start-->
                        <div class="single-feature mb-5">
                            <div class="feature-icon">
                                <div class="icon icon-shape bg-color white-text">
                                    <i class="fa fa-hospital-alt"></i>
                                </div>
                            </div>
                            <div class="feature-content">
                                <?php if($lang == 'en'): ?>

                                <h5><?php echo e($services[4]['title_en']); ?></h5>
                                <p class="mb-0"><?php echo e($services[4]['sub_title_en']); ?> </p>
                                <?php else: ?>
                                    <h5><?php echo e($services[4]['title']); ?></h5>
                                    <p class="mb-0"><?php echo e($services[4]['sub_title']); ?> </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <!--feature single end-->
                        <!--feature single start-->
                        <div class="single-feature mb-5">
                            <div class="feature-icon">
                                <div class="icon icon-shape bg-color white-text">
                                    <i class="fa fa-plane"></i>
                                </div>
                            </div>
                            <div class="feature-content">
                                <?php if($lang == 'en'): ?>

                                    <h5><?php echo e($services[5]['title_en']); ?></h5>
                                    <p class="mb-0"><?php echo e($services[5]['sub_title_en']); ?> </p>
                                <?php else: ?>
                                    <h5><?php echo e($services[5]['title']); ?></h5>
                                    <p class="mb-0"><?php echo e($services[5]['sub_title']); ?> </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <!--feature single end-->
                    </div>
                    <div class="col-md-4 hidden-sm hidden-xs">
                        <div class="feature-image">
                            <img src="index/img/funny.png" class="pos-hcenter img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">

                        <!--feature single start-->
                        <div class="single-feature mb-5">
                            <div class="feature-icon">
                                <div class="icon icon-shape bg-color white-text">
                                    <i class="fa fa-motorcycle"></i>                                </div>
                            </div>
                            <div class="feature-content">
                                <?php if($lang == 'en'): ?>

                                    <h5><?php echo e($services[0]['title_en']); ?></h5>
                                    <p class="mb-0"><?php echo e($services[0]['sub_title_en']); ?> </p>
                                <?php else: ?>
                                    <h5><?php echo e($services[0]['title']); ?></h5>
                                    <p class="mb-0"><?php echo e($services[0]['sub_title']); ?> </p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!--feature single end-->
                        <!--feature single start-->
                        <div class="single-feature mb-5">
                            <div class="feature-icon">
                                <div class="icon icon-shape bg-color white-text">
                                    <i class="fas fa-hospital"></i>                                </div>
                            </div>
                            <div class="feature-content">
                                <?php if($lang == 'en'): ?>

                                    <h5><?php echo e($services[1]['title_en']); ?></h5>
                                    <p class="mb-0"><?php echo e($services[1]['sub_title_en']); ?> </p>
                                <?php else: ?>
                                    <h5><?php echo e($services[1]['title']); ?></h5>
                                    <p class="mb-0"><?php echo e($services[1]['sub_title']); ?> </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <!--feature single end-->
                        <!--feature single start-->
                        <div class="single-feature mb-5">
                            <div class="feature-icon">
                                <div class="icon icon-shape bg-color white-text">
                                    <i class="fa fa-search"></i>
                                </div>
                            </div>
                            <div class="feature-content">
                                <?php if($lang == 'en'): ?>

                                    <h5><?php echo e($services[2]['title_en']); ?></h5>
                                    <p class="mb-0"><?php echo e($services[2]['sub_title_en']); ?> </p>
                                <?php else: ?>
                                    <h5><?php echo e($services[2]['title']); ?></h5>
                                    <p class="mb-0"><?php echo e($services[2]['sub_title']); ?> </p>
                                <?php endif; ?>
                        </div>
                        <!--feature single end-->
                    </div>
                </div>

            </div>
            </div>
        </section>
        <!--end features section-->

        <!--start app video section-->
        <div id="video-app" class="video-app-1"
             style="background: url('index/img/video-play.jpg')no-repeat center center / cover">
            <div class="overlay-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="video-play-button">
                                <a href="<?php echo e($front->video_url); ?>"
                                   class="video video-play mfp-iframe" data-toggle="modal"
                                   data-target="#video-popup">
                                    <span class="ti-control-play"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="index/img/bg-wave-sym.png" alt="shape image" class="img-responsive">
            </div><!-- end overlay -->
        </div>

        <section id="faqs" class="faq-section ptb-90">
            <div class="faq-section-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="section-heading">
                                <h3><?php echo e($front->section3_title); ?></h3>
                                <p><?php echo e($front->section3_sub_title); ?></p>
                            </div>
                            <div class="panel-group" id="accordion">
                                <?php $__currentLoopData = $question; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!-- Start Single Item -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" id="headingOne">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">
                                                <?php echo e($item->title); ?>

                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                                <?php echo e($item->sub_title); ?>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="faq-img">
                                <img src="index/img/123-min.png" class="img-responsive" alt="faq image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end faq section-->

        <!--start download section-->
        <section class="download-section" style="background: url('index/img/download-bg.jpg')no-repeat center center fixed">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 hidden-sm">
                        <div class="download-app-img">
                            <img src="index/img/download-app.png" alt="app download" class="img-responsive" style="
    position: relative;
    bottom: -31px;
">
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <div class="download-app-text">
                            <h3><?php echo e($front->section4_title); ?></h3>
                            <p><?php echo e($front->section4_sub_title); ?></p>
                            <div class="download-app-button">
                                <a href="<?php echo e($front->section4_btn1_url); ?>" class="download-btn hover-active">
                                    <span class="ti-apple"></span>
                                    <p>
                                        <?php if($lang == 'en'): ?>
                                        <small>Download On</small>
                                        <?php else: ?>
                                            <small>إحصل عليه من </small>

                                        <?php endif; ?>
                                        <br> <?php echo e($front->section4_btn1_text); ?>

                                    </p>
                                </a>
                                <a href="<?php echo e($front->section4_btn2_url); ?>" class="download-btn">
                                    <span class="ti-android"></span>
                                    <p>
                                        <?php if($lang == 'en'): ?>
                                            <small>Download On</small>
                                        <?php else: ?>
                                            <small>إحصل عليه من </small>

                                        <?php endif; ?>
                                            <br><?php echo e($front->section4_btn2_text); ?>

                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end download section-->


        <section id="contact" class="contact-us ptb-90">
            <div class="contact-us-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="section-heading">
                                <h3><?php echo e($front->contact_title); ?></h3>
                                <p>
                                    <?php echo e($front->contact_sub_title); ?>

                                </p>
                            </div>
                            <div class="footer-address">
                                <h6><?php echo e($front->contact_address_title); ?></h6>
                                <p><?php echo e($front->contact_address_sub_title); ?> </p>
                                <ul>
                                    <li><i class="fa fa-phone"></i> <span>Phone: <?php echo e($front->contact_phone); ?></span></li>
                                    <li><i class="fa fa-envelope-o"></i> <span>Email : <a
                                                href="mailto:<?php echo e($front->contact_email); ?>"><?php echo e($front->contact_email); ?></a></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <form action="<?php echo e(url('contact')); ?>" method="POST" id="contactForm1" class="contact-us-form" novalidate="novalidate">
                                <?php echo csrf_field(); ?>
                                <?php if($lang == 'en'): ?>
                                    <h6>Be on Touch </h6>
                                <?php else: ?>
                                    <h6>تواصل معنا لنكون بالقرب</h6>

                                <?php endif; ?>

                                <div class="row">

                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name"
                                            <?php if($lang == 'en'): ?>
                                            placeholder="Enter Your name"
                                        <?php else: ?>
                                                   placeholder="أدخل إسمك"

                                                   <?php endif; ?>

                                                   required="required" >
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email"
                                                   <?php if($lang == 'en'): ?>
                                                   placeholder="Enter Your E-mail"
                                                   <?php else: ?>
                                                   placeholder="أدخل بريدك الإلكتروني "

                                                   <?php endif; ?>

                                                   required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="phone" value="" class="form-control"
                                                   id="phone"
                                                   <?php if($lang == 'en'): ?>
                                                   placeholder="Enter Your Phone"
                                                   <?php else: ?>
                                                   placeholder="أدخل هاتفك"

                                                   <?php endif; ?>
                                            >
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="title" value="" size="40"
                                                   class="form-control" id="title"
                                                   <?php if($lang == 'en'): ?>
                                                   placeholder="Enter Your Title of message"
                                                   <?php else: ?>
                                                   placeholder="عنوان الرسالة">

                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                                    <textarea name="message" id="message" class="form-control" rows="7"

                                                              cols="25"
                                                              <?php if($lang == 'en'): ?>
                                                              placeholder="Enter Your  message"
                                                              <?php else: ?>
                                                              placeholder="الرسالة"

                                            <?php endif; ?>
                                                    ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 mt-20">
                                        <button type="submit" class="btn softo-solid-btn pull-right btn-save1"
                                                id="btnContactUs">
                                            <?php if($lang == 'en'): ?>
                                               send  message"
                                            <?php else: ?>
                                                أرسل الرسالة

                                            <?php endif; ?>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-message"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact us section end-->

        <!--start footer section-->
        <footer class="footer-section bg-secondary ptb-60">
            <div class="footer-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="footer-single-col text-center">
                                <img src="index/img/LOGOAWQAT.png"  height="50" alt="footer logo">
                                <div class="footer-social-list">
                                    <ul class="list-inline">
                                        <li><a href="#"> <i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-snapchat"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                                <div class="url">
                                    <ul class="list-inline">
                                        <li><a href="/privacy"> سياسة الخصوصية</a></li>
                                        <li><a href="/terms"> شروط الإستخدام</a></li>
                                        <li><a href="#contact"> إتصل بنا</a></li>
                                    </ul>
                                </div>
                                <div class="copyright-text">
                                    <p>&copy; copyright <a href="#">
                                            <?php if($lang == 'en'): ?>
                                                alshshamil
                                            <?php else: ?>
                                                الشامل

                                            <?php endif; ?>



                                            <Time>

                                            </Time> </a> طور بواسطة <a
                                            href="https://www.afkaar.com.sa" target="_blank">أفكار</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Start of Tawk.to Script-->

        <!--End of Tawk.to Script-->
    <!--end footer section-->

    </div><!--end main content inner-->
</div>
<!--end main container -->


<!--=========== all js file link ==============-->

<!-- main jQuery -->
<script src="index/js/jquery-3.3.1.min.js"></script>

<!-- bootstrap core js -->
<script src="index/js/bootstrap.min.js"></script>

<!-- smothscroll -->
<script src="index/js/jquery.easeScroll.min.js"></script>

<!--owl carousel-->
<script src="index/js/owl.carousel.min.js"></script>

<!-- scrolling nav -->
<script src="index/js/jquery.easing.min.js"></script>

<!--fullscreen background video js-->
<script src="index/js/jquery.mb.ytplayer.min.js"></script>

<!--typed js -->
<script src="index/js/typed.min.js"></script>

<!--magnific popup js-->
<script src="index/js/magnific-popup.min.js"></script>

<!-- custom script -->
<script src="index/js/scripts.js"></script>
<!--<script-->
<!--        src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js"-->
<!--        integrity="sha384-a9xOd0rz8w0J8zqj1qJic7GPFfyMfoiuDjC9rqXlVOcGO/dmRqzMn34gZYDTel8k"-->
<!--        crossorigin="anonymous"></script>-->
</body>

<!-- Mirrored from cssmaterial.com/apetech/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Aug 2020 12:21:26 GMT -->
</html>
<?php /**PATH /home4/softc92r/alfarismedia.com/edu/resources/views/index.blade.php ENDPATH**/ ?>