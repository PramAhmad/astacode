<!DOCTYPE html>
<html lang="en">
 
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <mcharset="UTF-8">
        <meta eta name="author" content="gramentheme">
        <meta name="description" content="Infotek - IT Solution & Technology HTML Template">
        <title>Infotek - IT Solution & Technology HTML Template</title>
        <link rel="shortcut icon" href="{{asset('fe/assets/img/favicon.svg')}}">
        <link rel="stylesheet" href="{{asset('fe/assets/css/bootstrap.min.css')}}">
        <link rel="styesheet" href="{{asset('fe/assets/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('fe/assets/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('fe/assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('fe/assets/css/meanmenu.css')}}">
        <link rel="stylesheet" href="{{asset('fe/assets/css/swiper-bundle.min.css')}}">
        <link rel="stylesheet" href="{{asset('fe/assets/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('fe/assets/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('fe/fa/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/brands.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/regular.min.css" integrity="sha512-KYEnM30Gjf5tMbgsrQJsR0FSpufP9S4EiAYi168MvTjK6E83x3r6PTvLPlXYX350/doBXmTFUEnJr/nCsDovuw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/solid.min.css" integrity="sha512-Hp+WwK4QdKZk9/W0ViDvLunYjFrGJmNDt6sCflZNkjgvNq9mY+0tMbd6tWMiAlcf1OQyqL4gn2rYp7UsfssZPA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @vite('resources/css/app.css')
    </head>
    <body>

        <!-- Preloader Start -->
        <div id="preloader" class="preloader">
            <div class="animation-preloader">
                <div class="spinner">                
                </div>
                <div class="txt-loading">
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="C" class="letters-loading">
                        C
                    </span>
                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>
                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                </div>
                <p class="text-center">Loading</p>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>

        <!--<< Mouse Cursor Start >>-->  
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

        <!-- Offcanvas Area Start -->
        <div class="fix-area">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="{{route('frontend.index')}}">
                                    <img src="{{asset('fe/assets/img/logo/logo.png')}}" alt="logo-img">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button>
                                <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                      
                        <div class="mobile-menu fix mb-3"></div>
                        <div class="offcanvas__contact">
                          
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas__overlay"></div>

        <!-- Header Section Start -->
        <header class="header-section-2">
            <div class="header-top-section top-style-2 fix">
                <div class="container-fluid">
                    <div class="header-top-wrapper style-2">
                        <ul class="contact-list">
                            <li>
                                <i class="far fa-envelope"></i>
                                <a href="mailto:info@example.com" class="link">info@example.com</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-phone-volume"></i>
                                <a href="tel:2086660112">+208-666-0112</a>
                            </li>
                        </ul>
                        <div class="top-right">
                            <div class="social-icon d-flex align-items-center">
                                <span>Follow Us:</span>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="header-sticky" class="header-2">
                <div class="main-logo">
                    <a href="index.html">
                    <img src="{{asset('fe/assets/img/logo/logo.png')}}" alt="logo-image">
                    </a>
                </div>
                <div class="container-fluid">
                    <div class="mega-menu-wrapper">
                        <div class="header-main">
                            <div class="logo d-none">
                                <a href="index.html" class="header-logo">
                                    <img src="{{asset('fe/assets/img/logo/logo.png')}}" width="130px"  alt="logo-img">
                                </a>
                            </div>
                            <div class="header-left">
                                <div class="mean__menu-wrapper">
                                    <div class="main-menu">
                                        <nav id="mobile-menu">
                                            <ul>
                                                <li class="has-dropdown active menu-thumb">
                                                    <a href="{{route('frontend.index')}}">
                                                    Home 
                                                 
                                                    
                                                </li>
                                                <li>
                                                    <a href="#about">About</a>
                                                </li>
                                                <li>
                                                    <a href="#service">Services</a>
                                                </li>
                                                <li>
                                                    <a href="#project">Projects</a>
                                                </li>
                                                <li>
                                                    <a href="#team">Team</a>
                                                </li>
                                                <li>
                                                    <a href="#blog">Blog</a>
                                                </li>
                                                <li>
                                                    <a href="#contact">Contact</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="header-right d-flex justify-content-end align-items-center">
                             <div class="header-button">
                                    <a href="contact.html" class="tw-py-3 tw-px-5 tw-rounded-md tw-text-white tw-font-semibold  tw-bg-sky-500">
                                        <span>
                                            free Consultancy
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </span>
                                     </a>
                                </div>
                                <div class="header__hamburger d-lg-none my-auto">
                                    <div class="sidebar__toggle">
                                        <i class="fas fa-bars"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

       

        @yield('content')
        <!--<< Footer Section Start >>-->
        <footer class="footer-section footer-bg tw-pt-10">
            <div class="container">
                
            </div>
            <div class="footer-widgets-wrapper">
                <div class="shape-1">
                    <img src="{{asset('fe/assets/img/footer-shape-1.png')}}" alt="shape-img">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="single-footer-widget">
                                <div class="widget-head tw-bg-gray-200 tw-rounded-md">
                                    <a href="{{route('frontend.index')}}">
                                        <img src="{{asset('fe/assets/img/logo/logo.png')}}" alt="logo-img">
                                    </a>
                                </div>
                                <div class="footer-content">
                                    <p>
                                        Phasellus ultricies aliquam volutpat 
                                        ullamcorper laoreet neque, a lacinia
                                        curabitur lacinia mollis
                                    </p>
                                    <div class="social-icon d-flex align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".5s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h3>Quick Links</h3>
                                </div>
                                <ul class="list-area">
                                    <li>
                                        <a href="about.html">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            Infotech About
                                        </a>
                                    </li>
                                    <li>
                                        <a href="service.html">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            Our Services
                                        </a>
                                    </li>
                                    <li>
                                        <a href="news.html">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            Our Blogs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="faq.html">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            FAQ’S
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact.html">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            Contact Us
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".5s">
                            <div class="single-footer-widget style-margin">
                                <div class="widget-head">
                                    <h3>IT Solution</h3>
                                </div>
                                <ul class="list-area">
                                    <li>
                                        <a href="service-details.html">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            IT Management
                                        </a>
                                    </li>
                                    <li>
                                        <a href="service-details.html">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            Web Development
                                        </a>
                                    </li>
                                    <li>
                                        <a href="service-details.html">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            Cyber Security
                                        </a>
                                    </li>
                                    <li>
                                        <a href="service-details.html">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            SEO Optimization
                                        </a>
                                    </li>
                                    <li>
                                        <a href="service-details.html">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            App Development
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="single-footer-widget style-margin">
                                <div class="widget-head">
                                    <h3>Recent Posts</h3>
                                </div>
                                <div class="recent-post-area">
                                    <div class="recent-post-items">
                                        <div class="thumb">
                                            <img src="{{asset('fe/assets/img/news/pp1.jpg')}}" alt="post-img">
                                        </div>
                                        <div class="content">
                                            <ul class="post-date">
                                                <li>
                                                    <i class="fa-solid fa-calendar-days me-2"></i>
                                                    20 Feb, 2024
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="news-details.html">
                                                    Top 5 Most Famous <br>
                                                    Technology Trend In 2024
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="recent-post-items mb-0">
                                        <div class="thumb">
                                            <img src="{{asset('assets/img/news/pp2.jpg')}}" alt="post-img">
                                        </div>
                                        <div class="content">
                                            <ul class="post-date">
                                                <li>
                                                    <i class="fa-solid fa-calendar-days me-2"></i>
                                                    15 Dec, 2024
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="news-details.html">
                                                    The Surfing Man Will Blow <br>
                                                    Your Mind
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom style-2">
                <div class="container">
                    <div class="footer-wrapper d-flex align-items-center justify-content-between">
                        <p class="wow fadeInLeft color-2" data-wow-delay=".3s">
                            © All Copyright 2024 by <a href="index.html">Infotech</a>
                        </p>
                        <ul class="footer-menu wow fadeInRight" data-wow-delay=".5s">
                            <li>
                                <a href="contact.html">
                                    Terms & Condition
                                </a>
                            </li>
                            <li>
                                <a href="contact.html">
                                    Privacy Policy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="#" id="scrollUp" class="scroll-icon">
                    <i class="far fa-arrow-up"></i>
                </a>
            </div>
        </footer>

        <!--<< All JS Plugins >>-->
        <script src="{{asset('fe/assets/js/jquery-3.7.1.min.js')}}"></script>
        <!--<< Viewport Js >>-->
        <script src="{{asset('fe/assets/js/viewport.jquery.js')}}"></script>
        <!--<< Bootstrap Js >>-->
        <script src="{{asset('fe/assets/js/bootstrap.bundle.min.js')}}"></script>
        <!--<< Nice Select Js >>-->
        <script src="{{asset('fe/assets/js/jquery.nice-select.min.js')}}"></script>
        <!--<< Waypoints Js >>-->
        <script src="{{asset('fe/assets/js/jquery.waypoints.js')}}"></script>
        <!--<< Counterup Js >>-->
        <script src="{{asset('fe/assets/js/jquery.counterup.min.js')}}"></script>
        <!--<< Swiper Slider Js >>-->
        <script src="{{asset('fe/assets/js/swiper-bundle.min.js')}}"></script>
        <!--<< MeanMenu Js >>-->
        <script src="{{asset('fe/assets/js/jquery.meanmenu.min.js')}}"></script>
        <!--<< Magnific Popup Js >>-->
        <script src="{{asset('fe/assets/js/jquery.magnific-popup.min.js')}}"></script>
        <!--<< Wow Animation Js >>-->
        <script src="{{asset('fe/assets/js/wow.min.js')}}"></script>
        <!--<< Main.js >>-->
        <script src="{{asset('fe/assets/js/main.js')}}"></script>
    </body>
</html>