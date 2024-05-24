<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="keywords" content="online solution, it, tech, sass, technology, teaching, learning">
    <meta name="description" content="Techy is a it solutions HTML template for all kinds of it, technology, online tech website">
    <title>@yield('title')</title>
    <meta property="og:site_name" content="Techy">
    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Techy – IT Solution & Web Security HTML5 Template">
    <meta name='og:image' content="{!! asset('frontend/img/favcon.png') !!}">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device  {!! asset('assets/frontend/') !!}-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#913BFF">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#913BFF">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#913BFF">

    <!-- <link rel="manifest" href="site.webmanifest" /> -->
    <link rel="shortcut icon" type="image/x-icon" href="{!! asset('frontend/img/favcon.png') !!}" />
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/fonts/custom-font/css/clash-display.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/fonts/bootstrap-icons/font-css.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/metisMenu.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/aos.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/spacing.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css')}}" />
</head>

<body>
    <div class="main-page-wrapper">
        <!--[if lte IE 9]> <p class="browserupgrade"> You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security. </p> <![endif]-->

        <!-- Add your site or application content here -->
        <!-- preloader -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- preloader end  -->
        <!-- offcanvas start  -->

        <!-- offcanvas end  -->

        <!-- header-area start -->
        <header class="theme-main-menu py-lg-4">
            <div class="main-header-area">
                <div class="container custom-container-nav">
                    <div class="row gx-4 gx-xxl-5 align-items-center">
                        <div class="col-xxl-3 col-xl-2 col-lg-2 col-6 text-start">
                            <div class="logo-area">
                                <a href="/">
                                    <img src="{{ asset('frontend/img/logo/header-logo-1.png') }}" alt="Header-logo"></a>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 d-none d-lg-block">
                            <nav class="navbar navbar-expand-lg">
                                <div class="container-fluid">
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav mb-2 mb-lg-0 ps-1">
                                            <li class="nav-item {!! request()->is('/') ? 'active ' : '' !!}">
                                                <a class="nav-link mybar" href="/">Home</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownTwo" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Pages
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownTwo">
                                                    <li>
                                                        <a class="dropdown-item" href="about">About Us</a>
                                                    </li>

                                                    <li>
                                                        <a class="dropdown-item" href="faq">FAQ</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item {!! request()->is('project-grid') ? 'active ' : '' !!}">
                                                <a class="nav-link mybar" href="project-grid">Project</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownThree" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Services
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownThree">
                                                    <li>
                                                        <a class="dropdown-item" href="services">Services</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="services-details">Services Details</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item {!! request()->is('blog-grid') ? 'active ' : '' !!}">
                                                <a class="nav-link mybar" href="blog-grid">Blog</a>
                                            </li>
                                            <li class="nav-item {!! request()->is('contact') ? 'active ' : '' !!}">
                                                <a class="nav-link" href="contact">contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-4 col-6 text-end">
                            <ul class="right-nav mb-0 d-flex align-items-center justify-content-end">
                                <li>
                                    <div class="d-none d-xxl-inline-block right-language pr-40">
                                        <div class="dropdown">
                                            <a class="language-btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                English
                                                <i class="fal fa-chevron-down"></i>
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <li>
                                                    <a class="dropdown-item" href="#">Arabic</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">USA</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">German</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Chaina</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Spanish</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="hamburger-menu">
                                        <a class="round-menu" href="javascript:void(0);">
                                            <i class="bi bi-list"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.theme-main-menu -->
        </header>
        <!-- header-area end -->

        <!-- slide-bar start -->
        <aside class="slide-bar">
            <div class="close-mobile-menu">
                <a href="javascript:void(0);">
                    <i class="fas fa-times"></i>
                </a>
            </div>
            <!-- offset-sidebar start -->
            <div class="offset-sidebar">
                <div class="offset-widget offset-logo mb-30">
                    <a href="/">
                        <img src="{{ asset('frontend/img/logo/header-logo-1.png') }}" alt="logo">
                    </a>
                </div>
                <div class="offset-widget mb-40">
                    <div class="info-widget">
                        <h4 class="offset-title mb-20">About Us</h4>
                        <p class="mb-30">
                            We understand that IT projects can be both exciting and challenging for students. That's why Techy is here to offer a helping hand, providing a platform where students can find expert advice, resources, and practical solutions to navigate their projects with confidence.
                        </p>
                    </div>
                </div>
                <div class="offset-widget mb-30 pr-10">
                    <div class="info-widget info-widget2">
                        <h4 class="offset-title mb-20">Contact Info</h4>
                        <p>
                            <i class="fal fa-address-book"></i>
                            Rajkot, Gujrat 360001
                        </p>
                        <p>
                            <i class="fal fa-phone"></i>
                            +91 95100 09505
                        </p>
                        <p>
                            <i class="fal fa-envelope-open"></i>
                            techybiiz@gmail.com
                        </p>
                    </div>
                </div>
                <div class="login-btn text-center">
                    <a class="theme_btn w-100" href="contact">Contact</a>
                </div>
            </div>
            <!-- offset-sidebar end -->
            <!-- side-mobile-menu start -->
            <nav class="side-mobile-menu">
                <ul id="mobile-menu-active">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li class="has-dropdown">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="about">About Us</a>
                            </li>
                            <li>
                                <a href="faq">FAQ</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="project-grid">Project</a>
                    </li>
                    <li class="has-dropdown">
                        <a href="#">Service</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="/services">Service</a>
                            </li>
                            <li>
                                <a href="/services-details">Service Details</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="blog-grid">Blog</a>
                    </li>

                    <li>
                        <a href="contact">Contact Us</a>
                    </li>
                </ul>
            </nav>
            <!-- side-mobile-menu end -->
        </aside>
        <div class="body-overlay"></div>
        <!-- slide-bar end -->
        @yield('content')
        <!--footer-area start-->
        <footer class="footer-area pt-140 pt-lg-95">
            <img class="fot-shape-one" src="{{ asset('frontend/img/shape/line-round-4a.svg')}}" alt="footer shape">
            <div class="container">
                <div class="row gx-4 gx-xxl-5 mb-1">
                    <div class="col-lg-4 col-md-8">
                        <div class="footer__widget mb-30" data-aos="fade-right" data-aos-delay="200">
                            <p class="pe-xl-3 foter-para">An influencal creative agency. Get’s IT Solutions For Expert
                                Consultants
                            </p>
                            <a class="foter-btn" href="contact">Let’s Chat
                                <i class="bi bi-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="footer__widget d-flex justify-content-md-center mb-30">
                            <ul class="fot-list">
                                <li>
                                    <a href="about">About Us</a>
                                </li>
                                <li>
                                    <a href="contact">Contact</a>
                                </li>
                                <li>
                                    <a href="blog-grid">Blog</a>
                                </li>
                                <li>
                                    <a href="faq">Policy</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="fade-left" data-aos-delay="200">
                        <div class="footer__widget mb-30 ps-xl-5">
                            <h4 class="text-white mb-40">techybiiz@gmail.com</h4>
                            <address>Rajkot,&nbsp; Gujrat&nbsp; 360001</address>
                        </div>
                    </div>
                </div>
            </div>
            <div class="techy-copyright pt-60 pb-45 pb-lg-10">
                <div class="container">
                    <div class="row gx-4 gx-xxl-5 align-items-center">
                        <div class="col-md-6 text-center text-md-start">
                            <div class="copyright mb-30">
                                <h6>
                                    <!-- <a>Techy</a> -->
                                    Copyright&nbsp; ©&nbsp; 2023&nbsp; mybestprojects. All Rights Reserved
                                </h6>
                            </div>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer__social mb-30">
                                <a href="https://instagram.com/techy.biz?igshid=MjEwN2IyYWYwYw==">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://youtube.com/@techybiz?si=wLY9UtJE1KF-YGAX">
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <!-- <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a> -->
                                <a href="#">
                                    <i class="fab fa-whatsapp"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer-area end-->
    </div>

    <!-- JS here -->

    <script src="{{asset('frontend/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{asset('frontend/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{asset('frontend/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{asset('frontend/js/slick.min.js') }}"></script>
    <script src="{{asset('frontend/js/jquery.supermarquee.min.js') }}"></script>
    <script src="{{asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{asset('frontend/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('frontend/js/wow.min.js')}}"></script>
    <script src="{{asset('frontend/js/aos.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{asset('frontend/js/tilt.jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-ui.js') }}"></script>
    <script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('frontend/js/plugins.js')}}"></script>

    <!--Custom JS here -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>


</body>

</html>