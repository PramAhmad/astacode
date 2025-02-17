@extends('fe.layout')
@section('content')
    <!-- Hero Section Start -->

    <section class="hero-section fix hero-1 hero-2 bg-cover"
        style="background-image: url('{{ asset('fe/assets/img/hero/hero-bg-2.jpg') }}');">
        <div class="line-shape-2">
            <img src="{{ asset('fe/assets/img/hero/line-shape-2.png') }}" alt="shape-img">
        </div>
        <div class="right-shape">
            <img src="{{ asset('fe/assets/img/hero/right-shape.png') }}" alt="shape-img">
        </div>
        <div class="left-shape">
            <img src="{{ asset('fe/assets/img/hero/left-shape.png') }}" alt="shape-img">
        </div>
        <div class="frame-2">
            <img src="{{ asset('fe/assets/img/frame.png') }}" alt="shape-img">
        </div>
        <div class="frame-3">
            <img src="{{ asset('fe/assets/img/hero/frame.png') }}" alt="shape-img">
        </div>
        <div class="circle-shape">
            <img src="{{ asset('fe/assets/img/choose/circle.png') }}" alt="shape-img">
        </div>
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-8">
                    <div class="hero-content tw-max-w-[80%]">

                        <h6 class="wow fadeInUp md:tw-text-3xl tw-text-left tw-text-xl" data-wow-delay=".2s">Best it SOULTION Provider</h6>
                        <h1 class="wow fadeInUp md:tw-text-5xl tw-text-3xl tw-font-semibold" data-wow-delay=".4s">
                            We Help Our Clients To Grow Their Business
                        </h1>
                        <p class="wow fadeInUp" data-wow-delay=".6s" class="">
                            Astacode is a company engaged in the technology sector, with our motto being Support Your
                            System, with types of services including IT Consultant, System Development, Networking, Gadget
                            Service, Design, Computer Procurement etc.</p>
                        <div class="hero-button">
                            <a href="#about"
                                class="tw-py-3 tw-px-5 tw-bg-sky-500 tw-hover:bg-sky-600 tw-text-white tw-rounded-md wow fadeInUp"
                                data-wow-delay=".8s">
                                About Us
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                            <a href="https://youtu.be/ckJ6kIev64c?si=YZk1Adc8BG2wzE_q"
                                class=" tw-bg-rose-500 hover:tw-bg-rose-400 tw-text-white tw-py-3 tw-px-5 tw-rounded-md wow fadeInUp"
                                data-wow-delay=".9s">

                                <span class=" d-line">Watch Company Video</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="hero-image wow fadeInUp " data-wow-delay=".4s">

                    
                        <img src="{{asset('fe/assets/img/hero/heroimg.png')}}"
                            alt="hero-img" class="tw-translate-y-10">
                        <div class="border-circle">
                            <img src="{{ asset('fe/assets/img/hero/border-circle.png') }}" alt="shape-img">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Section Start -->
    <section class="service-section-2 fix section-padding pb-0" id="service">
        <div class="container">
            <div class="section-title text-center">
                <span class="wow tw-text-3xl fadeInUp">OUR SERVICES</span>
                <h2 class="wow fadeInUp tw-text-2xl" data-wow-delay=".3s">
                    We Provide the Best Quality
                </h2>
            </div>
            <div class="row">
                @foreach ($service as $item)
                    
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-box-items style-2">
                        <div class="icon">
                            <img src="{{ asset($item->icon) }}" alt="icon-img">

                        </div>
                        <div class="content">
                            <h4>
                                <p>
                                    {{$item->name}}
                                </p>
                            </h4>
                            <p>
                                {{$item->description}}
                            </p>
                           
                        </div>
                    </div>
                </div>
                @endforeach
             
            </div>
        </div>
    </section>

    <!-- About Section Start -->
    <section class="about-section section-padding fix bg-cover" id="about"
        style="background-image: url('{{ asset('fe/assets/img/service/service-bg-2.jpg') }}');">
        <div class="container">
            <div class="about-wrapper style-2">
                <div class="row">
                    <div class="col-lg-6 ">
                        <div class="about-image-items">
                            <div class="circle-shape">
                                <img src="{{ asset('fe/assets/img/about/circle.png') }}" alt="shape-img">
                            </div>
                            <div class=" counter-shape float-bob-y">
                                <div class="icon">
                                    <img src="{{ asset('fe/assets/img/about/icon-1.svg') }}" alt="icon-img">
                                </div>
                                <div class="content tw-rounded-md">
                                    <h3><span class="count">9</span>Years</h3>
                                    <p>Of Experience</p>
                                </div>
                            </div>
                            <div class="about-img-1 tw-h-full  bg-cover wow fadeInLeft" data-wow-delay=".3s" style=" margin-bottom: 0%">
                                <img src="{{ asset('fe/assets/img/team/team.webp') }}" alt="about-img"
                                    style="background-position: center;width:450px;">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="about-content">
                            <div class="section-title">
                                <span class="wow fadeInUp">ABOUT ASTACODE</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    We Are Increasing Business Success With <span>Technology</span>
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                It is a long established fact that a reader will be distracted the readable <br> content of
                                a page when looking at layout the point.
                            </p>
                            <div class="about-icon-items">
                                <div class="icon-items wow fadeInUp" data-wow-delay=".7s">
                                    <div class="icon" style="padding:20px">
                                        <img src="{{ asset('fe/assets/img/about/icon-4.svg') }}" alt="icon-img">
                                    </div>
                                    <div class="content">
                                        <h4>Problem Solving</h4>
                                        <p>
                                            Good problem solving resources  .
                                        </p>
                                    </div>
                                </div>
                                <div class="icon-items wow fadeInUp" data-wow-delay=".9s">
                                    <div class="icon" style="padding:20px">
                                        <img src="{{ asset('fe/assets/img/about/icon-5.svg') }}" alt="icon-img">
                                    </div>
                                    <div class="content">
                                        <h4>Mission & Vision</h4>
                                        <a href="">See our Vision And Mission</a>
                                    </div>
                                </div>
                            </div>
                            <div class="about-author">
                                <div class="about-button wow fadeInUp" data-wow-delay=".5s">
                                    <a href="{{route('frontend.project')}}"
                                        class="tw-py-5 tw-font-semibold tw-px-3 tw-rounded-md tw-text-white tw-bg-sky-500 tw-hover:bg-sky-400 ">
                                        See Project
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Offer Section Start -->
    <section class="offer-section fix section-bg-2 section-padding">
        <div class="line-shape">
            <img src="{{ asset('fe/assets/img/team/line-shape.png') }}" alt="shape-img">
        </div>
        <div class="mask-shape">
            <img src="{{ asset('fe/assets/img/team/mask-shape.png') }}" alt="shape-img">
        </div>
        <div class="container">
            <div class=" text-center">
                <span class="wow fadeInUp tw-text-white tw-text-4xl tw-mb-5 tw-font-semibold">Our Offering</span>
                <h2 class="tw-text-white wow tw-mt-5 fadeInUp" data-wow-delay=".3s">
                    Enhance and Pioneer Using <br> Technology Trends
                </h2>
            </div>
            <div class="row tw-mt-10">
                @foreach ($tech as $item)
                    
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6  col-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="md:tw-w-2/3 tw-w-full py-2 fadeInUp" data-wow-delay=".2s">
                        <div class="tw-relative tw-bg-white md:tw-my-10 tw-rounded-lg tw-shadow-lg tw-overflow-hidden">
                            <div class="tw-flex tw-items-center tw-justify-center tw-py-2 tw-pt-5">
                                <img src="{{ asset($item->foto) }}"
                                    class="tw-w-20 tw-h-20" alt="">
                            </div>
                            <div class="tw-text-center tw-py-2">
                                <h5 class="tw-text-lg tw-font-medium">{{$item->name}}</h5>
                            </div>
                        </div>
                    </div>

                </div>
          
                @endforeach
               
            </div>
        </div>
    </section>

    <!-- Project Section Start -->
    <section class="project-section-2 section-padding fix" id="project">
        <div class="left-shape">
            <img src="{{ asset('fe/assets/img/project/left-shape.png') }}" alt="shape-img">
        </div>
        <div class="right-shape">
            <img src="{{ asset('fe/assets/img/project/right-shape.png') }}" alt="shape-img">
        </div>
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <span class="wow fadeInUp">PROJECTS</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        Our Latest Incredible Client's Projects
                    </h2>
                </div>
                <a href="{{ route('frontend.project') }}"
                    class="tw-bg-sky-500 tw-rounded-md tw-py-3 tw-px-5 tw-text-white  hover:tw-scale-110">See Project <i
                        class="fa-solid fa-arrow-right-long"></i> </a>

            </div>
            <div class="project-wrapper">
                <div class="swiper project-slider-2">
                    <div class="swiper-wrapper">
                        @foreach ($project as $item)
                            <div class="swiper-slide">
                                <div class="project-items style-2">
                                    <div class="project-image">
                                        <img src="{{ $item->firstimage->path }}" alt="project-img">
                                    </div>
                                    <a href="{{ route('frontend.detail.project', $item->id) }}">
                                        <div class="tw-w-full">

                                            <div
                                                class="project-content tw-bg-gray-100 hover:tw-bg-gray-200 tw-pt-10 tw-flex tw-justify-between tw-items-center tw-px-4 tw-pb-4 group">
                                                <div class="group-hover:tw-text-white">
                                                    <p
                                                        class="tw-text-2xl tw-text-sky-500 tw-font-semibold group-hover:tw-text-white">
                                                        {{ $item->name }}</p>
                                                    <h4>
                                                        <a href="{{ route('frontend.detail.project', $item->id) }}"
                                                            class="group-hover:tw-text-white">{{ $item->category_project->name }}</a>
                                                    </h4>
                                                </div>
                                                <a href="{{ route('frontend.detail.project', $item->id) }}"
                                                    class="tw-text-right tw-ml-auto tw-text-xl tw-transition tw-transform hover:tw-translate-x-1 group-hover:tw-text-white">
                                                    <i class="fa-solid fa-arrow-right group-hover:tw-text-white"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </a>


                                </div>

                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Brand Section Start -->
    <div class="brand-section fix section-padding">
        <div class="container">
            <div class="brand-wrapper">
                <h6 class="text-center wow fadeInUp" data-wow-delay=".3s">Our Client or Sub Contract</h6>
                <div class="swiper brand-slider tw-flex tw-items-center tw-align-middle">
                    <div class="swiper-wrapper tw-my-auto">
                        <div class="swiper-slide">
                            <div class="brand-image tw-flex tw-justify-center tw-items-center tw-h-full">
                                <img class="tw-object-contain tw-h-24"
                                    src="{{ asset('fe/assets/img/logo/pertamina.png') }}" alt="brand-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image tw-flex tw-justify-center tw-items-center tw-h-full">
                                <img class="tw-object-contain tw-h-24" src="{{ asset('fe/assets/img/logo/bni.png') }}"
                                    alt="brand-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image tw-flex tw-justify-center tw-items-center tw-h-full">
                                <img class="tw-object-contain tw-h-24" src="{{ asset('fe/assets/img/logo/papan.png') }}"
                                    alt="brand-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image tw-flex tw-justify-center tw-items-center tw-h-full">
                                <img class="tw-object-contain tw-h-24" src="{{ asset('fe/assets/img/logo/baznas.png') }}"
                                    alt="brand-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image tw-flex tw-justify-center tw-items-center tw-h-full">
                                <img class="tw-object-contain tw-h-24" src="{{ asset('fe/assets/img/logo/saraf.png') }}"
                                    alt="brand-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image tw-flex tw-justify-center tw-items-center tw-h-full">
                                <img class="tw-object-contain tw-h-24" src="{{ asset('fe/assets/img/logo/layton.png') }}"
                                    alt="brand-img">
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--<< Team Section Start >>-->
    <section class="team-section-2 section-padding bg-cover"
        style="background-image: url('{{ asset('fe/assets/img/team/bg.jpg') }}');" id="team">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <span class="wow fadeInUp">Team Members</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        Our Dedicated Team <br> Members
                    </h2>
                </div>
                <a href="{{ route('frontend.member') }}" class="theme-btn wow fadeInUp" data-wow-delay=".5s">
                    All Member
                    <i class="fa-solid fa-arrow-right-long"></i>
                </a>
            </div>
            <div class="row">
                @foreach ($member as $item)
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="team-card-items">
                            <div class="team-image">
                                @if ($item->photo)
                                    <img src="{{ asset($item->photo) }}" alt="" style="width: 370px">
                                @endif
                              <div class="social-profile">
                                    <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                                    <ul>
                                        <li><a href="{{ $item->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="{{ $item->twitter }}"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="{{ $item->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h3>
                                    <a href="{{route('frontend.detail.member',$item->id)}}">{{ $item->name }}</a>
                                </h3>
                                <p>{{ $item->jabatan->name }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <!--<< Choose Us Section Start >>-->
    <section class="choose-us-section fix section-padding">

        <div class="bottom-shape">
            <img src="{{ asset('fe/assets/img/choose/bottom-shape.png') }}" alt="shape-img">
        </div>
        <div class="arrow-shape-1 bounce-x">
            <img src="{{ asset('fe/assets/img/choose/arrow-shape-1.png') }}" alt="shape-img">
        </div>
        <div class="circle-shape">
            <img src="{{ asset('fe/assets/img/choose/circle.png') }}" alt="shape-img">
        </div>
        <div class="line-shape">
            <img src="{{ asset('fe/assets/img/choose/line-shape.png') }}" alt="shape-img">
        </div>
        <div class="container">
            <div class="choose-us-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class=" wow fadeInUp" data-wow-delay=".4s">
                            {{-- ember video --}}
                            <div class="md:tw-w-[80%] tw-w-full">
                                <div class="">
                                    <div class="tw-bg-white tw-border tw-border-gray-200  tw-rounded-md tw-p-3   wow fadeInUp"
                                        data-wow-delay="0.5s"
                                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">

                                        <div class="row ">

                                            <iframe width="1482" height="350"
                                                src="https://www.youtube.com/embed/ckJ6kIev64c"
                                                title="Documentation - SINKOP (Sistem Informasi Koperasi) Kab. Garut"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen=""></iframe>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="choose-content">
                            <div class="section-title">
                                <span class="wow fadeInUp">WHY CHOOSE US</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    We Prominent Truly Trusted <br>
                                    we will adjust the price you submit, but still with the best results
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                we are there when you need anytime <br> Have a team that is experienced in their field
                            </p>
                            <div class="choose-list-area">
                                <ul class="choose-list wow fadeInUp" data-wow-delay=".7s">
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Best Price
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Dedicated Team
                                    </li>
                                </ul>
                                <ul class="choose-list wow fadeInUp" data-wow-delay=".9s">
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        24/7 Available For Contact
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        100% Satisfaction
                                    </li>
                                </ul>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Achievement Section Start -->
    <section class="achievement-section-2 fix section-bg-2">
        <div class="container">
            <div class="achievement-wrapper style-2">
                <div class="section-title mb-0">
                    <div class="achiev-wrapper">

                        <div class="contact-image  wow fadeInUp" data-wow-delay=".4s">
               
                            <div class="animate-img">
                                <img src="{{ asset('fe/assets/img/circle-shape.png') }}" alt="shape-img">
                            </div>
                        </div>
                    </div>
                    <span class="text-white wow fadeInUp">achievement</span>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                        We Are Increasing <br> Business Success
                    </h2>
                </div>
                <div class="counter-area">
                    <div class="counter-items wow fadeInUp" data-wow-delay=".3s">
                        <div class="icon">
                            <img src="{{ asset('fe/assets/img/achievement-icon/01.svg') }}" alt="icon-img">
                        </div>
                        <div class="content">
                            <h2><span class="count">720</span>+</h2>
                            <p>Satisfied Clients</p>
                        </div>
                    </div>
                    <div class="counter-items wow fadeInUp" data-wow-delay=".5s">
                        <div class="icon">
                            <img src="{{ asset('fe/assets/img/achievement-icon/02.svg') }}" alt="icon-img">
                        </div>
                        <div class="content">
                            <h2><span class="count">695</span>+</h2>
                            <p>Finished Projects</p>
                        </div>
                    </div>
                    <div class="counter-items wow fadeInUp" data-wow-delay=".7s">
                        <div class="icon">
                            <img src="{{ asset('fe/assets/img/achievement-icon/03.svg') }}" alt="icon-img">
                        </div>
                        <div class="content">
                            <h2><span class="count">50</span>+</h2>
                            <p>Skilled Experts</p>
                        </div>
                    </div>
                    <div class="counter-items wow fadeInUp" data-wow-delay=".9s">
                        <div class="icon">
                            <img src="{{ asset('fe/assets/img/achievement-icon/04.svg') }}" alt="icon-img">
                        </div>
                        <div class="content">
                            <h2><span class="count">20</span>+</h2>
                            <p>Media Posts</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section Start -->
   
    <!--<< Testimonial Section Start >>-->
@endsection
