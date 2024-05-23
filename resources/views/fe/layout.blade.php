<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Astacode">
        <meta property="og:image" content="{{ asset('fe/assets/img/favico.png') }}">
        <meta name="description" content="Astacode - IT Company">
        <title>Astacode - IT Company</title>

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('fe/assets/img/favico.png') }}">
        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{ asset('fe/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fe/assets/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fe/assets/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('fe/assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('fe/assets/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('fe/assets/css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fe/assets/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('fe/assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('fe/fa/css/font-awesome.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/brands.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/regular.min.css" integrity="sha512-KYEnM30Gjf5tMbgsrQJsR0FSpufP9S4EiAYi168MvTjK6E83x3r6PTvLPlXYX350/doBXmTFUEnJr/nCsDovuw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/solid.min.css" integrity="sha512-Hp+WwK4QdKZk9/W0ViDvLunYjFrGJmNDt6sCflZNkjgvNq9mY+0tMbd6tWMiAlcf1OQyqL4gn2rYp7UsfssZPA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @vite('resources/css/app.css')
        <style>
            .floating {
                position: fixed;
                width: 60px;
                height: 60px;
                bottom: 40px;
                right: 40px;
                background-color: #25d366;
                color: #fff;
                border-radius: 50px;
                text-align: center;
                font-size: 30px;
                box-shadow: 2px 2px 3px #999;
                z-index: 100;
            }
            .fab-icon {
                margin-top: 16px;
            }
            .team-photo {
                width: 100%;
                max-width: 370px;
                height: 100px;
                object-fit: cover;
            }
        </style>
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
            <div class="header-top-section top-style-2 fix tw-px-10">
                <div class="tw-container ">
                    <div class="header-top-wrapper style-2 tw-flex tw-justify-between tw-items-center">
                        <ul class="contact-list tw-flex tw-space-x-4">
                            <li class="tw-flex tw-items-center">
                                <i class="far fa-envelope tw-mr-2"></i>
                                <a href="mailto:astacode.mng@gmail.com " class="link">astacode.mng@gmail.com </a>
                            </li>
                            <li class="tw-flex tw-items-center">
                                <i class="fa-solid fa-phone-volume tw-mr-2"></i>
                                <a href="tel:+62 853-1771-3639">+62 853-1771-3639</a>
                            </li>
                        </ul>
                        <div class="top-right tw-flex tw-items-center">
                            <span class="tw-mr-2">Follow Us:</span>
                            <div class="social-icon tw-flex tw-space-x-2">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" tw-sticky tw-top-0 tw-bg-white tw-z-50 tw-shadow">
                <div class="mega-menu-wrapper tw-container">
                    <div class="header-main tw-flex tw-justify-between tw-items-center tw-py-4">
                        <div class="logo ">
                            <a href="index.html" class="header-logo ">
                                <img src="{{asset('fe/assets/img/logo/logo.png')}}" width="130px" alt="logo-img" class="tw-w-32">
                            </a>
                        </div>
                        <div class="header-left tw-flex-grow">
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul class="tw-flex tw-space-x-4">
                                            <li>
                                                <a href=""></a>
                                            </li>
                                            <li class="">
                                                <a href="{{route('frontend.index')}}">Home</a>
                                            </li>
                                            <li><a href="/#about">About</a></li>
                                            <li><a href="/#service">Services</a></li>
                                            <li><a href="/#project">Projects</a></li>
                                            <li><a href="/#team">Team</a></li>
                                            <li><a href="/#blog">Blog</a></li>
                                            <li><a href="/#contact">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="header-right tw-flex tw-items-center tw-space-x-4">
                            <div class="header-button ">
                                <a href="https://wa.me/085317713639" class="tw-py-3 tw-px-5 tw-rounded-md tw-text-white tw-font-semibold tw-bg-sky-500  tw-items-center tw-space-x-2 md:tw-block tw-hidden">
                                    <span>Free Consultancy</span>
                                    <i class="fa-solid fa-arrow-right-long"></i>
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
                                        We Are Increasing Business Success With Technology

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
                                        <a href="{{route('frontend.index')}}">
                                            <i class="fa-solid fa-chevron-right"></i>
                                           Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('frontend.project')}}">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            Project
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('frontend.member')}}">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            Member
                                        </a>
                                    </li>
                               
                                    <li>
                                        
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
                                    @foreach (App\Models\CategoryProject::all() as $item)
                                        
                                    <ul>
                                        
                                            <li>
                                                <a href="{{ route('frontend.category.project', ['cid' => $item->id]) }}">
                                                    <i class="fa-solid fa-chevron-right"></i>
                                                    {{ $item->name }}
                                                </a>
                                            </li>
                                        
                                    </ul>
                                    
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="single-footer-widget style-margin">
                                <div class="widget-head">
                                    <h3>Recent Project</h3>
                                </div>
                                @foreach (App\Models\Project::limit(2)->with('category_project','firstimage')->get() as $item)              
                                <div class="recent-post-area">
                                    <div class="recent-post-items">
                                        <div class="thumb">
                                            <img src="{{asset($item->firstimage->path)}}" alt="post-img">
                                        </div>
                                        <div class="content">
                                            <ul class="post-date">
                                                <li>
                                                    <i class="fa-solid fa-calendar-days me-2"></i>
                                                    {{$item->created_at}}
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="{{route('frontend.detail.project',$item->id)}}">
                                                   {{$item->name}} <br>
                                                    {{$item->category_project->name}}
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                 
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom style-2">
                <div class="container">
                    <div class="footer-wrapper d-flex align-items-center justify-content-between">
                        <p class="wow fadeInLeft color-2" data-wow-delay=".3s">
                            © All Copyright 2024 by <a href="/#about">Astacode
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
        {{-- float icon wa using tailwind prefix tw---}}
        <a href="https://wa.me/085317713639" class="floating" target="_blank">
            <i class="fab fa-whatsapp fab-icon"></i>
            </a>
        

        <!--<< All JS Plugins >>-->
        <script src="{{asset('fe/assets/js/jquery-3.7.1.min.js')}}"></script>
        <!--<< Viewport Js >>-->
        <script src="{{asset('fe/assets/js/viewport.jquery.js')}}"></script>
        <!--<< Bootstrap Js >>-->
        <script src="{{asset('fe/assets/js/bootstrap.bundle.min.js')}}"></script>
        <!--<< Nice Select Js >>-->
        <script src="{{asset('fe/assets/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('fe/assets/js/jquery.waypoints.js')}}"></script>
        <script src="{{asset('fe/assets/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('fe/assets/js/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('fe/assets/js/jquery.meanmenu.min.js')}}"></script>
        <script src="{{asset('fe/assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('fe/assets/js/wow.min.js')}}"></script>
        <script src="{{asset('fe/assets/js/main.js')}}"></script>
    </body>
</html>