@extends('fe.layout')
@section('content')
 <!-- Hero Section Start -->
 <section class="hero-section fix hero-1 hero-2 bg-cover" style="background-image: url('{{asset('fe/assets/img/hero/hero-bg-2.jpg')}}');">
    <div class="line-shape-2">
        <img src="{{asset('fe/assets/img/hero/line-shape-2.png')}}" alt="shape-img">
    </div>
    <div class="right-shape">
        <img src="{{asset('fe/assets/img/hero/right-shape.png')}}" alt="shape-img">
    </div>
    <div class="left-shape">
        <img src="{{asset('fe/assets/img/hero/left-shape.png')}}" alt="shape-img">
    </div>
    <div class="frame-2">
        <img src="{{asset('fe/assets/img/frame.png')}}" alt="shape-img">
    </div>
    <div class="frame-3">
        <img src="{{asset('fe/assets/img/hero/frame.png')}}" alt="shape-img">
    </div>
    <div class="circle-shape">
        <img src="{{asset('fe/assets/img/choose/circle.png')}}" alt="shape-img">
    </div>
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-8">
                <div class="hero-content tw-max-w-[80%]">
                    
                    <h6 class="wow fadeInUp" data-wow-delay=".2s">Best it SOULTION Provider</h6>
                    <h1 class="wow fadeInUp md:tw-text-5xl tw-text-3xl tw-font-semibold" data-wow-delay=".4s">
                        We Help Our Clients To Grow Their Business
                    </h1>
                    <p class="wow fadeInUp" data-wow-delay=".6s" class="">
                        Astacode is a company engaged in the technology sector, with our motto being Support Your System, with types of services including IT Consultant, System Development, Networking, Gadget Service, Design, Computer Procurement etc.</p>
                    <div class="hero-button">
                        <a href="#about" class="tw-py-3 tw-px-5 tw-bg-sky-500 tw-hover:bg-sky-600 tw-text-white tw-rounded-md wow fadeInUp" data-wow-delay=".8s">
                            About Us
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </a>
                        <a href="https://youtu.be/ckJ6kIev64c?si=YZk1Adc8BG2wzE_q" class=" tw-bg-rose-500 hover:tw-bg-rose-400 tw-text-white tw-py-3 tw-px-5 tw-rounded-md wow fadeInUp" data-wow-delay=".9s">
                            
                            <span class=" d-line">Watch Company Video</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="hero-image wow fadeInUp " data-wow-delay=".4s">
                    <img src="https://cdn1.iconfinder.com/data/icons/facely-metapeople-3d-avatar-set/512/17._Designer.png" alt="hero-img" class="tw-translate-y-10">
                    <div class="border-circle">
                        <img src="{{asset('fe/assets/img/hero/border-circle.png')}}" alt="shape-img">
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
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="service-box-items style-2">
                    <div class="icon">
                        <img src="{{asset('fe/assets/img/service/icon/s-icon-4.svg')}}" alt="icon-img">
                       
                    </div>
                    <div class="content">
                        <h4>
                            <a href="service-details.html">
                                Website Development
                            </a>
                        </h4>
                        <p>
                            We provide company profile websites, online shops, microsites, landing pages and others according to the wishes and needs of clients with the best quality and affordable prices.
                        </p>
                        <a href="service-details.html" class="theme-btn-2 mt-3">
                            read More
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="service-box-items style-2 ">
                    <div class="icon">
                       <img src="{{asset('fe/assets/img/service/icon/s-icon-2.svg')}}" alt="icon-img">
                    </div>
                    <div class="content">
                        <h4>
                            <a href="service-details.html">
                                Mobile App Development
                            </a>
                        </h4>
                        <p>
                            We provide Mobile application development services with an emphasis on custom application development processes with an attractive UI and UX that supports the backend system integration process.
                        </p>
                        <a href="service-details.html" class="theme-btn-2 mt-3">
                            read More
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="service-box-items style-2">
                    <div class="icon">
                       <img src="{{asset('fe/assets/img/service/icon/s-icon-3.svg')}}" alt="icon-img">
                    </div>
                    <div class="content">
                        <h4>
                            <a href="service-details.html">
                                Creative Branding And Design
                            </a>
                        </h4>
                        <p>
                            We provide creative visual content creation services in the form of graphic design, animation, banners, logos, photography and videography and other content needs. and best quality.
                        </p>
                        <a href="service-details.html" class="theme-btn-2 mt-3">
                            read More
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                <div class="service-box-items style-2">
                    <div class="icon">
                        <img src="{{asset('fe/assets/img/service/icon/s-icon-1.svg')}}" alt="icon-img">
                    </div>
                    <div class="content">
                        <h4>
                            <a href="service-details.html">
                                IT Consultant
                            </a>
                        </h4>
                        <p>
                            We have good communication skills, from conducting research interviews with clients, managing teams and stakeholders, writing business proposals, conducting presentations, to writing reports.
                        </p>
                        <a href="service-details.html" class="theme-btn-2 mt-3">
                            read More
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section Start -->
<section class="about-section section-padding fix bg-cover" id="about" style="background-image: url('{{asset('fe/assets/img/service/service-bg-2.jpg')}}');">
    <div class="container">
        <div class="about-wrapper style-2">
            <div class="row">
                <div class="col-lg-6 ">
                    <div class="about-image-items">
                        <div class="circle-shape">
                            <img src="{{asset('fe/assets/img/about/circle.png')}}" alt="shape-img">
                        </div>
                        <div class="tw-translate-y-28 counter-shape float-bob-y">
                            <div class="icon">
                                <img src="{{asset('fe/assets/img/about/icon-1.svg')}}" alt="icon-img">
                            </div>
                            <div class="content">
                                <h3><span class="count">9</span>Years</h3>
                                <p>Of Experience</p>
                            </div>
                        </div>
                        <div class="about-img-1 bg-cover wow fadeInLeft" data-wow-delay=".3s" >
                            <img src="{{asset('fe/assets/img/team/about1.png')}}"  alt="about-img" style="background-position: center">
                           
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
                            It is a long established fact that a reader will be distracted the readable <br> content of a page when looking at layout the point.
                        </p>
                        <div class="about-icon-items">
                            <div class="icon-items wow fadeInUp" data-wow-delay=".7s">
                                <div class="icon">
                                    <img src="{{asset('fe/assets/img/about/icon-4.svg')}}" alt="icon-img">
                                </div>
                                <div class="content">
                                    <h4>Problem Solving</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </div>
                            <div class="icon-items wow fadeInUp" data-wow-delay=".9s">
                                <div class="icon">
                                    <img src="{{asset('fe/assets/img/about/icon-5.svg')}}" alt="icon-img">
                                </div>
                                <div class="content">
                                    <h4>Mission & Vision</h4>
                                    <a href="">See our Vision And Mission</a>
                                </div>
                            </div>
                        </div>
                        <div class="about-author">
                            <div class="about-button wow fadeInUp" data-wow-delay=".5s">
                                <a href="about.html" class="tw-py-5 tw-font-semibold tw-px-3 tw-rounded-md tw-text-white tw-bg-sky-500 tw-hover:bg-sky-400 ">
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
        <img src="{{asset('fe/assets/img/team/line-shape.png')}}" alt="shape-img">
    </div>
    <div class="mask-shape">
        <img src="{{asset('fe/assets/img/team/mask-shape.png')}}" alt="shape-img">
    </div>
    <div class="container">
        <div class=" text-center">
            <span class="wow fadeInUp tw-text-white tw-text-4xl tw-mb-5 tw-font-semibold">Our offering</span>
            <h2 class="tw-text-white wow tw-mt-5 fadeInUp" data-wow-delay=".3s">
                Enhance and Pioneer Using <br> Technology Trends
            </h2>
        </div>
        <div class="row tw-mt-10">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="md:tw-w-2/3 tw-w-full py-2    fadeInUp" data-wow-delay=".2s">
                    <div class="tw-relative tw-bg-white tw-rounded-lg tw-shadow-lg tw-overflow-hidden">
                        <div class="tw-flex tw-items-center tw-justify-center tw-py-2 tw-pt-5">
                            <img src="data:image/png;base64,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" class="tw-w-20 tw-h-20" alt="">
                        </div>
                        <div class="tw-text-center tw-py-2">
                            <h5 class="tw-text-lg tw-font-medium">Vue Js</h5>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="md:tw-w-2/3 tw-w-full py-2 fadeInUp" data-wow-delay=".2s">
                    <div class="tw-relative tw-bg-white tw-rounded-lg tw-shadow-lg tw-overflow-hidden">
                        <div class="tw-flex tw-items-center tw-justify-center tw-py-2 tw-pt-5">
                            <img src="data:image/png;base64,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" class="tw-w-20 tw-h-20" alt="">
                        </div>
                        <div class="tw-text-center tw-py-2">
                            <h5 class="tw-text-lg tw-font-medium">Laravel</h5>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="md:tw-w-2/3 tw-w-full py-2 fadeInUp" data-wow-delay=".2s">
                    <div class="tw-relative tw-bg-white tw-rounded-lg tw-shadow-lg tw-overflow-hidden">
                        <div class="tw-flex tw-items-center tw-justify-center tw-py-2 tw-pt-5">
                            <img src="data:image/png;base64,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" class="tw-w-20 tw-h-20" alt="">
                        </div>
                        <div class="tw-text-center tw-py-2">
                            <h5 class="tw-text-lg tw-font-medium">Flutter</h5>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="md:tw-w-2/3 tw-w-full py-2 fadeInUp" data-wow-delay=".2s">
                    <div class="tw-relative tw-bg-white tw-rounded-lg tw-shadow-lg tw-overflow-hidden">
                        <div class="tw-flex tw-items-center tw-justify-center tw-py-2 tw-pt-5">
                            <img src="data:image/png;base64,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" class="tw-w-20 tw-h-20" alt="">
                        </div>
                        <div class="tw-text-center tw-py-2">
                            <h5 class="tw-text-lg tw-font-medium">React Js</h5>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="md:tw-w-2/3 tw-w-full py-2 fadeInUp" data-wow-delay=".2s">
                    <div class="tw-relative tw-bg-white tw-rounded-lg tw-shadow-lg tw-overflow-hidden">
                        <div class="tw-flex tw-items-center tw-justify-center tw-py-2 tw-pt-5">
                            <img src="data:image/jpeg;base64,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" class="tw-w-20 tw-h-20" alt="">
                        </div>
                        <div class="tw-text-center tw-py-2">
                            <h5 class="tw-text-lg tw-font-medium">Firebase</h5>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="md:tw-w-2/3 tw-w-full py-2 fadeInUp" data-wow-delay=".2s">
                    <div class="tw-relative tw-bg-white tw-rounded-lg tw-shadow-lg tw-overflow-hidden">
                        <div class="tw-flex tw-items-center tw-justify-center tw-py-2 tw-pt-5">
                            <img src="data:image/jpeg;base64,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" class="tw-w-20 tw-h-20" alt="">
                        </div>
                        <div class="tw-text-center tw-py-2">
                            <h5 class="tw-text-lg tw-font-medium">CodeIgniter</h5>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<!-- Project Section Start -->
<section class="project-section-2 section-padding fix" id="project">
    <div class="left-shape">
        <img src="{{asset('fe/assets/img/project/left-shape.png')}}" alt="shape-img">
    </div>
    <div class="right-shape">
        <img src="{{asset('fe/assets/img/project/right-shape.png')}}" alt="shape-img">
    </div>
    <div class="container">
        <div class="section-title-area">
            <div class="section-title">
                <span class="wow fadeInUp">PROJECTS</span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    Our Latest Incredible Client's Projects
                </h2>
            </div>
            <a href="{{route('frontend.project')}}" class="tw-bg-sky-500 tw-rounded-md tw-py-3 tw-px-5 tw-text-white  hover:tw-scale-110">See Project <i class="fa-solid fa-arrow-right-long"></i> </a>
      
        </div>
        <div class="project-wrapper">
            <div class="swiper project-slider-2">
                <div class="swiper-wrapper">
                    @foreach ($project as $item)
                        
                    <div class="swiper-slide">
                        <div class="project-items style-2">
                            <div class="project-image">
                                <img src="{{$item->firstimage->path}}" alt="project-img">
                            </div>
                            <a href="{{route('frontend.detail.project',$item->id)}}">
                            <div class="tw-w-full">

                                    <div class="project-content tw-bg-gray-100 hover:tw-bg-gray-200 tw-pt-10 tw-flex tw-justify-between tw-items-center tw-px-4 tw-pb-4 group">
                                        <div class="group-hover:tw-text-white">
                                            <p class="tw-text-2xl tw-text-sky-500 tw-font-semibold group-hover:tw-text-white">{{$item->name}}</p>
                                            <h4>
                                                <a href="{{route('frontend.detail.project',$item->id)}}" class="group-hover:tw-text-white">{{$item->category_project->name}}</a>
                                            </h4>
                                        </div>
                                        <a href="{{route('frontend.detail.project',$item->id)}}" class="tw-text-right tw-ml-auto tw-text-xl tw-transition tw-transform hover:tw-translate-x-1 group-hover:tw-text-white">
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
            <h6 class="text-center wow fadeInUp" data-wow-delay=".3s">Our Client</h6>
            <div class="swiper brand-slider tw-flex tw-items-center tw-align-middle">
                <div class="swiper-wrapper tw-my-auto">
                    <div class="swiper-slide">
                        <div class="brand-image tw-flex tw-justify-center tw-items-center tw-h-full">
                            <img class="tw-object-contain tw-h-24" src="{{asset('fe/assets/img/logo/pertamina.png')}}" alt="brand-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image tw-flex tw-justify-center tw-items-center tw-h-full">
                            <img class="tw-object-contain tw-h-24" src="{{asset('fe/assets/img/logo/bni.png')}}" alt="brand-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image tw-flex tw-justify-center tw-items-center tw-h-full">
                            <img class="tw-object-contain tw-h-24" src="{{asset('fe/assets/img/logo/papan.png')}}" alt="brand-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image tw-flex tw-justify-center tw-items-center tw-h-full">
                            <img class="tw-object-contain tw-h-24" src="{{asset('fe/assets/img/logo/baznas.png')}}" alt="brand-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image tw-flex tw-justify-center tw-items-center tw-h-full">
                            <img class="tw-object-contain tw-h-24" src="{{asset('fe/assets/img/logo/saraf.png')}}" alt="brand-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image tw-flex tw-justify-center tw-items-center tw-h-full">
                            <img class="tw-object-contain tw-h-24" src="{{asset('fe/assets/img/logo/layton.png')}}" alt="brand-img">
                        </div>
                    </div>
                  
                </div>
            </div>
            
        </div>
    </div>
</div>

<!--<< Team Section Start >>-->
<section class="team-section-2 section-padding bg-cover" style="background-image: url('{{asset('fe/assets/img/team/bg.jpg')}}');" id="team">
    <div class="container">
        <div class="section-title-area">
            <div class="section-title">
                <span class="wow fadeInUp">Team Members</span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    Our Dedicated Team <br> Members
                </h2>
            </div>
            <a href="team.html" class="theme-btn wow fadeInUp" data-wow-delay=".5s">
                All Member
                <i class="fa-solid fa-arrow-right-long"></i>
            </a>
        </div>
        <div class="row">
            @foreach ($member as $item)
                
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="team-card-items">
                    <div class="team-image">
                        <img src="{{asset($item->photo)}}" alt="team-img" style="width: 370px">
                        <div class="social-profile">
                            <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                            <ul>
                                <li><a href="{{$item->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{$item->twitter}}"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="{{$item->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h3>
                            <a href="team-details.html">{{$item->name}}</a>
                        </h3>
                        <p>{{$item->jabatan->name}}</p>
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
        <img src="{{asset('fe/assets/img/choose/bottom-shape.png')}}" alt="shape-img">
    </div>
    <div class="arrow-shape-1 bounce-x">
        <img src="{{asset('fe/assets/img/choose/arrow-shape-1.png')}}" alt="shape-img">
    </div>
    <div class="circle-shape">
        <img src="{{asset('fe/assets/img/choose/circle.png')}}" alt="shape-img">
    </div>
    <div class="line-shape">
        <img src="{{asset('fe/assets/img/choose/line-shape.png')}}" alt="shape-img">
    </div>
    <div class="container">
        <div class="choose-us-wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <div class=" wow fadeInUp" data-wow-delay=".4s">
                        {{-- ember video --}}
                        <div class="md:tw-w-[80%] tw-w-full">
                            <div class="">
                                <div class="tw-bg-white tw-border tw-border-gray-200  tw-rounded-md tw-p-3   wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                   
                                    <div class="row ">
                                        
                                        <iframe width="1482" height="350" src="https://www.youtube.com/embed/ckJ6kIev64c" title="Documentation - SINKOP (Sistem Informasi Koperasi) Kab. Garut" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
                                        
                                        
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
                        <div class="progress-wrap">
                            <div class="pro-items wow fadeInUp" data-wow-delay=".5s">
                                <div class="pro-head">
                                    <h6 class="title">
                                        Startup Consultancy
                                    </h6>
                                    <span class="point">
                                        86%
                                    </span>
                                </div>
                                <div class="progress">
                                    <div class="progress-value"></div>
                                </div>
                            </div>
                            <div class="pro-items wow fadeInUp" data-wow-delay=".7s">
                                <div class="pro-head">
                                    <h6 class="title">
                                     Smart Soultions
                                    </h6>
                                    <span class="point">
                                        92%
                                    </span>
                                </div>
                                <div class="progress">
                                    <div class="progress-value style-two"></div>
                                </div>
                            </div>
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
                <span class="text-white wow fadeInUp">achievement</span>
                <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                    We Are Increasing <br> Business Success
                </h2>
            </div>
            <div class="counter-area">
                <div class="counter-items wow fadeInUp" data-wow-delay=".3s">
                    <div class="icon">
                        <img src="{{asset('fe/assets/img/achievement-icon/01.svg')}}" alt="icon-img">
                    </div>
                    <div class="content">
                        <h2><span class="count">720</span>+</h2>
                        <p>Satisfied Clients</p>
                    </div>
                </div>
                <div class="counter-items wow fadeInUp" data-wow-delay=".5s">
                    <div class="icon">
                        <img src="{{asset('fe/assets/img/achievement-icon/02.svg')}}" alt="icon-img">
                    </div>
                    <div class="content">
                        <h2><span class="count">695</span>+</h2>
                        <p>Finished Projects</p>
                    </div>
                </div>
                <div class="counter-items wow fadeInUp" data-wow-delay=".7s">
                    <div class="icon">
                        <img src="{{asset('fe/assets/img/achievement-icon/03.svg')}}" alt="icon-img">
                    </div>
                    <div class="content">
                        <h2><span class="count">50</span>+</h2>
                        <p>Skilled Experts</p>
                    </div>
                </div>
                <div class="counter-items wow fadeInUp" data-wow-delay=".9s">
                    <div class="icon">
                        <img src="{{asset('fe/assets/img/achievement-icon/04.svg')}}" alt="icon-img">
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
<section class="contact-section fix section-padding" id="contact">
    <div class="container">
        <div class="contact-wrapper">
            <div class="arrow-shape">
                <img src="{{asset('fe/assets/img/arrow-shape.png')}}" alt="shape-img">
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-image wow fadeInUp" data-wow-delay=".4s">
                        <img src="{{asset('fe/assets/img/hero/cs.png')}}" alt="contact-img" class="tw--translate-x-1/4">
                        <div class="cricle-shape">
                            <img src="{{asset('fe/assets/img/circle-shape.png')}}" alt="shape-img">
                        </div>
                        <div class="small-cricle-shape">
                            <img src="{{asset('fe/assets/img/choose/circle.png')}}" alt="shape-img">
                        </div>
                        <div class="frame-shape">
                            <img src="{{asset('fe/assets/img/frame.png')}}" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-content">
                        <div class="section-title">
                            <span class="text-white wow fadeInUp tw-text-4xl tw-font-semibold">TALK TO US</span>
                            <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">How May We Help You!</h2>
                        </div>
                        <form action="#" id="contact-form" method="POST" class="contact-form-items">
                            <div class="row g-4">
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="form-clt">
                                        <span>Your name*</span>
                                        <input type="text" name="name" id="name" placeholder="Robot fox">
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="form-clt">
                                        <span>Your Email*</span>
                                        <input type="text" name="email" id="email" placeholder="info@example.com">
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                    <div class="form-clt">
                                        <span>Message*</span>
                                        <textarea name="message" id="message" placeholder="Write Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-7 wow fadeInUp" data-wow-delay=".9s">
                                    <button type="submit" class="theme-btn bg-white">
                                        Sand Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<< Testimonial Section Start >>-->




@endsection