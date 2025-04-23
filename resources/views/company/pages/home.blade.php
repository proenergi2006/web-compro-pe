@extends('company.layout.main')

@section('css')
<style>
    .rs-gsap-thumb img {
  opacity: 0;
  transform: translateX(-100px); /* posisi awal */
}
</style>
    
@endsection

@section('content')
        <!-- banner area start -->
        <section class="rs-banner-area rs-banner-nine rs-swiper">
            <div class="rs-banner-slider-wrapper">
                <div class="swiper" data-clone-slides="false" data-loop="true" data-speed="2000" data-autoplay="true" data-dots-dynamic="false" data-hover-pause="true" data-effect="fade" data-delay="3000" data-item="1" data-margin="30">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="rs-banner-item-wrapper">
                                <div class="rs-banner-bg-thumb" data-background="{{ asset('assets/images/pe-bg/10.jpg')}}">
                                </div>
                                <div class="container">
                                    <div class="row justify-content-center align-items-center h-100">
                                        <div class="col-xxl-8 col-xl-9 col-lg-10 col-md-10">
                                            <div class="rs-banner-wrapper">
                                                {{-- <span class="rs-banner-stroke-text">
                                                industrie
                                                </span> --}}
                                                <div class="rs-banner-content">
                                                    <h1 class="text-center rs-banner-title">Energy Service & Solution
                                                    </h1>
                                                    <div class="rs-banner-info-btn">
                                                        <div class="rs-banner-btn">
                                                            <a class="rs-btn has-theme-red has-icon has-bg" href="/about"> <i
                                                                class="ri-play-fill"></i> LEARN MORE
                                                            </a>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="rs-banner-item-wrapper">
                                <div class="rs-banner-bg-thumb" data-background="{{ asset('assets/images/pe-bg/sliders_non-merah3hr.jpg')}}">
                               
                                </div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xxl-8 col-xl-9 col-lg-10 col-md-10">
                                            <div class="rs-banner-wrapper">
                                                <div class="rs-banner-content">
                                                    <h1 class="rs-banner-title">Committed to
                                                        Providing the
                                                        Best Service
                                                    </h1>
                                                    <div class="rs-banner-info-btn">
                                                        <div class="rs-banner-btn">
                                                            <a class="rs-btn has-theme-red has-icon has-bg" href="/about"> <i
                                                                class="ri-play-fill"></i> LEARN MORE
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="rs-banner-item-wrapper">
                                <div class="rs-banner-bg-thumb" data-background="{{ asset('assets/images/pe-bg/777.jpg')}}">
                                </div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xxl-8 col-xl-9 col-lg-10 col-md-10">
                                            <div class="rs-banner-wrapper">
                                                <span class="rs-banner-stroke-text">
                                    industrie
                                    </span>
                                                <div class="rs-banner-content">
                                                    <h1 class="rs-banner-title">To be the Leading Providers of
                                                        Fuel and Energy in Indonesia
                                                    </h1>
                                                    <div class="rs-banner-info-btn">
                                                        <div class="rs-banner-btn">
                                                            <a class="rs-btn has-theme-red has-icon has-bg" href="/about"> <i
                                                                class="ri-play-fill"></i> LEARN MORE
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="rs-banner-navigation">
                        <button class="swiper-button-prev rs-swiper-btn has-light-orange"><i
                    class="fa-regular fa-arrow-left"></i></button>
                        <button class="swiper-button-next rs-swiper-btn has-light-orange"><i
                    class="fa-regular fa-arrow-right"></i></button>
                    </div>
                    <!-- if we need pagination -->
                    <div class="rs-banner-pagination d-block d-md-none">
                        <div class="swiper-pagination rs-pagination has-theme-orange"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner area end -->

        {{-- about blue start --}}
        <section class="rs-feature-area section-space-medium rs-feature-two">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9 col-md-10">
                        <div class="rs-section-title-wrapper text-center section-title-space">
                            <p class="rs-section-subtitle has-theme-red rs-fw-ebold">
                                <h4 class="rs-split-text-enable  has-theme-red split-in-fade">ABOUT US</h4>
                            </p>
                            <p class="rs-fs-b1 rs-section-title has-theme-black rs-split-text-enable split-in-fade">PT Pro Energi is a fuel provider company established in 2006 and head quartered in Jakarta. 
                                Pro Energi is a growing company that continuously moving forward to become a superior commercial fuel provider that constantly meeting its customers’ needs, 
                                especially for the segment of manufacturing, mining, commercial, plantation, transportation, construction, also marine and fisheries.</p>
                            <p class="rs-fs-b1 rs-section-title has-theme-black rs-split-text-enable split-in-fade">Being professionally managed and customer satisfaction oriented, 
                                PT Pro Energi keeps doing its best to achieve our ultimate goal to become the leading commercial fuel provider in Indonesia.</p>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-xl-3 col-lg-3">
                        <div class="rs-portfolio-item">
                            <div class="rs-portfolio-thumb wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                <img src="{{ asset('assets/images/about/MG_4899.jpg')}}" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="rs-portfolio-item">
                            <div class="rs-portfolio-thumb wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                <img src="{{ asset('assets/images/about/MG_4889-copy.jpg')}}" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="rs-portfolio-item">
                            <div class="rs-portfolio-thumb wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                <img src="{{ asset('assets/images/about/MG_3081.jpg')}}" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="rs-portfolio-item">
                            <div class="rs-portfolio-thumb wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                <img src="{{ asset('assets/images/about/MG_4882-copy_revisi.jpg')}}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center mt-5 g-5">
                    <div class="rs-testimonial-btn">
                        <a class="rs-btn has-theme-red has-icon has-bg" href="/about"> <i
                            class="ri-play-fill"></i> LEARN MORE
                        </a>
                    </div>
                </div>
            </div>
        </section>
        {{-- about blue end --}}

        <!-- video area start -->
        <div class="rs-video-area section-space-medium rs-video-three jarallax">
            <div class="rs-video-bg-thumb jarallax-img" data-background="{{ asset('assets/images/pe-bg/pe-bg-product.jpg')}}"></div>
            <div class="container justify-content-between">
                <div class="row text-center">
                    <h2 class="rs-video-title rs-split-text-enable split-in-fade">Our Product</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 text-center wow slideInLeft" data-wow-delay=".7s" data-wow-duration="1s">
                        <div class="rs-video-content">
                            <img src="{{ asset('assets/images/produk/pe-product-prodiesel-1.png')}}" alt="image">
                        </div>
                    </div>
                    <div class="col-xl-4 text-center wow slideInUp" data-wow-delay=".7s" data-wow-duration="1s">
                        <div class="rs-video-content">
                            <img src="{{ asset('assets/images/produk/pe-product-prodieselbio-1.png')}}" alt="image">
                        </div>
                    </div>
                    <div class="col-xl-4 text-center wow slideInRight" data-wow-delay=".7s" data-wow-duration="1s">
                        <div class="rs-video-content">
                            <img src="{{ asset('assets/images/produk/bg_otherproduct_rev.png')}}" alt="image">
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="rs-testimonial-btn">
                        <a class="rs-btn has-theme-light-blue has-icon has-bg" href="/product"> <i
                            class="ri-play-fill"></i> LEARN
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- video area end -->
        <section class="rs-elements-gsap-area section-space rs-gsap-one">
            <div class="container">
                <div class="row  g-5 justify-content-center section-title-space align-items-center">
                    <div class="col-xxl-8 col-xl-9 col-lg-9">
                        <div class="text-center has-theme-red">
                            <h3 class="rs-split-text-enable split-in-fade">OUR SERVICES</h3>
                        </div>
                    </div>
                </div>
                <div class="rs-gsap-wrapper justify-content-center">
                    <div class="rs-gsap-item">
                        <div class="rs-gsap-thumb rs-image">
                            <img decoding="async" src="{{ asset('assets/images/pe-service.jpg')}}"  alt="image">
                        </div>
                    </div>
                </div>
                <div class="row text-center mt-5 g-5">
                    <div class="rs-testimonial-btn">
                        <a class="rs-btn has-theme-red has-icon has-bg" href="/services"> <i
                            class="ri-play-fill"></i> LEARN MORE
                        </a>
                    </div>
                </div>
            </div>
        </section>
    
    

        <!-- testimonial area start -->
        <section class="rs-testimonial-area section-space rs-testimonial-one primary-bg rs-swiper">
            <div class="container">
                <div class="row  g-5 justify-content-center section-title-space align-items-center">
                    <div class="col-xxl-7 col-xl-8 col-lg-8">
                        <div class="text-center has-theme-red">
                            <h3 class="rs-split-text-enable split-in-fade">OUR NETWORKS</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="swiper" data-clone-slides="false" data-loop="true" data-speed="1500" data-autoplay="true" data-dots-dynamic="false" data-hover-pause="true" data-effect="false" data-delay="2500" data-item="3" data-item-xl="3" data-item-lg="3" data-item-md="2" data-item-sm="1" data-item-xs="1" data-item-mobile="1" data-margin="30" data-margin-xl="30">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="rs-testimonial-item has-clip-path">
                                        <div class="rs-testimonial-content">
                                            <div class="rs-testimonial-top">
                                                <div class="rs-testimonial-avater-wrapper">
                                                    <div class="rs-testimonial-avater-thumb">
                                                        <img src="{{ asset('assets/images/user/user-thumb-01.png')}}" alt="image">
                                                    </div>
                                                    <div class="rs-testimonial-avater-info">
                                                        <h6 class="rs-testimonial-avater-title">John Wlick</h6>
                                                        <span class="rs-testimonial-avater-designation">Ceo</span>
                                                    </div>
                                                </div>
                                                <div class="rs-testimonial-icon">
                                                    <img src="{{ asset('assets/images/brand/brand-thumb-01.png')}}" alt="image">
                                                </div>
                                            </div>
                                            <div class="rs-testimonial-description">
                                                <p> More-or-less normal distribution of letters, as opposed to using content making
                                                    it look like readable english. </p>
                                            </div>
                                            <div class="rs-testimonial-rating-wrapper">
                                                <div class="rs-rating">
                                                    <span><i class="ri-star-fill"></i></span>
                                                    <span><i class="ri-star-fill"></i></span>
                                                    <span><i class="ri-star-fill"></i></span>
                                                    <span><i class="ri-star-fill"></i></span>
                                                    <span><i class="ri-star-half-line"></i></span>
                                                </div>
                                                <div class="rs-testimonial-quote">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="43" viewBox="0 0 60 43" fill="none">
                                                        <path d="M57.3913 0H33.913C32.4746 0 31.3043 1.14482 31.3043 2.55199V24.2439C31.3043 25.6511 32.4746 26.7959 33.913 26.7959H45V42.1077C45 42.7082 45.805 42.9717 46.1739 42.4907L59.8696 24.6267C59.9542 24.5163 60 24.382 60 24.2439V2.55199C60 1.14482 58.8299 0 57.3913 0ZM58.6957 24.0312L46.3043 40.1939V26.1579C46.3043 25.8055 46.0124 25.5199 45.6522 25.5199H33.913C33.1938 25.5199 32.6087 24.9475 32.6087 24.2439V2.55199C32.6087 1.84841 33.1938 1.276 33.913 1.276H57.3913C58.1105 1.276 58.6957 1.84841 58.6957 2.55199V24.0312ZM26.087 0H2.6087C1.17026 0 0 1.14482 0 2.55199V24.2439C0 25.6511 1.17026 26.7959 2.6087 26.7959H13.6957V42.1079C13.6957 42.7049 14.5004 42.9721 14.8696 42.4907L28.5652 24.6267C28.6499 24.5163 28.6957 24.382 28.6957 24.2439V2.55199C28.6957 1.14482 27.5254 0 26.087 0ZM27.3913 24.0312L15 40.1939V26.1579C15 25.8055 14.708 25.5199 14.3478 25.5199H2.6087C1.88948 25.5199 1.30435 24.9475 1.30435 24.2439V2.55199C1.30435 1.84841 1.88948 1.276 2.6087 1.276H26.087C26.8062 1.276 27.3913 1.84841 27.3913 2.55199V24.0312Z" fill="#1F1F1F"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="rs-testimonial-item has-clip-path">
                                        <div class="rs-testimonial-content">
                                            <div class="rs-testimonial-top">
                                                <div class="rs-testimonial-avater-wrapper">
                                                    <div class="rs-testimonial-avater-thumb">
                                                        <img src="{{ asset('assets/images/user/user-thumb-02.png')}}" alt="image">
                                                    </div>
                                                    <div class="rs-testimonial-avater-info">
                                                        <h6 class="rs-testimonial-avater-title">Joshua Sendu</h6>
                                                        <span class="rs-testimonial-avater-designation">Engineer</span>
                                                    </div>
                                                </div>
                                                <div class="rs-testimonial-icon">
                                                    <img src="{{ asset('assets/images/brand/brand-thumb-01.png')}}" alt="image">
                                                </div>
                                            </div>
                                            <div class="rs-testimonial-description">
                                                <p> More-or-less normal distribution of letters, as opposed to using content making
                                                    it look like readable english. </p>
                                            </div>
                                            <div class="rs-testimonial-rating-wrapper">
                                                <div class="rs-rating">
                                                    <span><i class="ri-star-fill"></i></span>
                                                    <span><i class="ri-star-fill"></i></span>
                                                    <span><i class="ri-star-fill"></i></span>
                                                    <span><i class="ri-star-fill"></i></span>
                                                    <span><i class="ri-star-half-line"></i></span>
                                                </div>
                                                <div class="rs-testimonial-quote">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="43" viewBox="0 0 60 43" fill="none">
                                                        <path d="M57.3913 0H33.913C32.4746 0 31.3043 1.14482 31.3043 2.55199V24.2439C31.3043 25.6511 32.4746 26.7959 33.913 26.7959H45V42.1077C45 42.7082 45.805 42.9717 46.1739 42.4907L59.8696 24.6267C59.9542 24.5163 60 24.382 60 24.2439V2.55199C60 1.14482 58.8299 0 57.3913 0ZM58.6957 24.0312L46.3043 40.1939V26.1579C46.3043 25.8055 46.0124 25.5199 45.6522 25.5199H33.913C33.1938 25.5199 32.6087 24.9475 32.6087 24.2439V2.55199C32.6087 1.84841 33.1938 1.276 33.913 1.276H57.3913C58.1105 1.276 58.6957 1.84841 58.6957 2.55199V24.0312ZM26.087 0H2.6087C1.17026 0 0 1.14482 0 2.55199V24.2439C0 25.6511 1.17026 26.7959 2.6087 26.7959H13.6957V42.1079C13.6957 42.7049 14.5004 42.9721 14.8696 42.4907L28.5652 24.6267C28.6499 24.5163 28.6957 24.382 28.6957 24.2439V2.55199C28.6957 1.14482 27.5254 0 26.087 0ZM27.3913 24.0312L15 40.1939V26.1579C15 25.8055 14.708 25.5199 14.3478 25.5199H2.6087C1.88948 25.5199 1.30435 24.9475 1.30435 24.2439V2.55199C1.30435 1.84841 1.88948 1.276 2.6087 1.276H26.087C26.8062 1.276 27.3913 1.84841 27.3913 2.55199V24.0312Z" fill="#1F1F1F"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="rs-testimonial-item has-clip-path">
                                        <div class="rs-testimonial-content">
                                            <div class="rs-testimonial-top">
                                                <div class="rs-testimonial-avater-wrapper">
                                                    <div class="rs-testimonial-avater-thumb">
                                                        <img src="{{ asset('assets/images/user/user-thumb-03.png')}}" alt="image">
                                                    </div>
                                                    <div class="rs-testimonial-avater-info">
                                                        <h6 class="rs-testimonial-avater-title">Penelopa Miller</h6>
                                                        <span class="rs-testimonial-avater-designation">Team Manager</span>
                                                    </div>
                                                </div>
                                                <div class="rs-testimonial-icon">
                                                    <img src="{{ asset('assets/images/brand/brand-thumb-01.png')}}" alt="image">
                                                </div>
                                            </div>
                                            <div class="rs-testimonial-description">
                                                <p> More-or-less normal distribution of letters, as opposed to using content making
                                                    it look like readable english. </p>
                                            </div>
                                            <div class="rs-testimonial-rating-wrapper">
                                                <div class="rs-rating">
                                                    <span><i class="ri-star-fill"></i></span>
                                                    <span><i class="ri-star-fill"></i></span>
                                                    <span><i class="ri-star-fill"></i></span>
                                                    <span><i class="ri-star-fill"></i></span>
                                                    <span><i class="ri-star-half-line"></i></span>
                                                </div>
                                                <div class="rs-testimonial-quote">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="43" viewBox="0 0 60 43" fill="none">
                                                        <path d="M57.3913 0H33.913C32.4746 0 31.3043 1.14482 31.3043 2.55199V24.2439C31.3043 25.6511 32.4746 26.7959 33.913 26.7959H45V42.1077C45 42.7082 45.805 42.9717 46.1739 42.4907L59.8696 24.6267C59.9542 24.5163 60 24.382 60 24.2439V2.55199C60 1.14482 58.8299 0 57.3913 0ZM58.6957 24.0312L46.3043 40.1939V26.1579C46.3043 25.8055 46.0124 25.5199 45.6522 25.5199H33.913C33.1938 25.5199 32.6087 24.9475 32.6087 24.2439V2.55199C32.6087 1.84841 33.1938 1.276 33.913 1.276H57.3913C58.1105 1.276 58.6957 1.84841 58.6957 2.55199V24.0312ZM26.087 0H2.6087C1.17026 0 0 1.14482 0 2.55199V24.2439C0 25.6511 1.17026 26.7959 2.6087 26.7959H13.6957V42.1079C13.6957 42.7049 14.5004 42.9721 14.8696 42.4907L28.5652 24.6267C28.6499 24.5163 28.6957 24.382 28.6957 24.2439V2.55199C28.6957 1.14482 27.5254 0 26.087 0ZM27.3913 24.0312L15 40.1939V26.1579C15 25.8055 14.708 25.5199 14.3478 25.5199H2.6087C1.88948 25.5199 1.30435 24.9475 1.30435 24.2439V2.55199C1.30435 1.84841 1.88948 1.276 2.6087 1.276H26.087C26.8062 1.276 27.3913 1.84841 27.3913 2.55199V24.0312Z" fill="#1F1F1F"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial area start -->

        <!-- blog area start -->
        <section class="rs-blog-area section-space rs-blog-one">
            <div class="container">
                <div class="row  g-5 section-title-space align-items-center">
                  
                    <div class="text-center has-theme-red">
                        <h3 class="rs-split-text-enable split-in-fade">NEWS & ARTICLES</h3>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-xl-6 col-lg-6">
                        <div class="rs-blog-item has-thumb-height wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="has-bg has-clip-path rs-blog-bg-thumb" data-background="{{ asset('assets/images/blog/blog-thumb-01.png')}}">
                            </div>
                            <div class="rs-blog-content has-position">
                                <div class="rs-blog-meta">
                                    <div class="rs-blog-meta-item has-white">
                                        <span>
                                 By
                                 <a class="rs-blog-meta-author" href="#"> Nayeem</a>
                              </span>
                                    </div>
                                    <div class="rs-blog-meta-item has-white">
                                        <span>
                                 Feb 8, 2024
                              </span>
                                    </div>
                                </div>
                                <h3 class="rs-blog-title has-white has-big underline"> <a href="blog-details.html">Construction
                                        of a new high tech plant in
                                        washingtons</a></h3>
                                <p class="rs-blog-description has-white">Industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of
                                    type and...</p>
                                <div class="rs-blog-tag has-white">
                                    <a href="blog-details.html">Company</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="row g-5 wow fadeInRight" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="col-12">
                                <div class="rs-blog-item has-grid">
                                    <div class="rs-blog-content has-padding order-1 order-sm-0">
                                        <div class="rs-blog-meta">
                                            <div class="rs-blog-meta-item">
                                                <span>
                                       By
                                       <a class="rs-blog-meta-author" href="#"> Nayeem</a>
                                    </span>
                                            </div>
                                            <div class="rs-blog-meta-item">
                                                <span>
                                       Feb 8, 2024
                                    </span>
                                            </div>
                                        </div>
                                        <h5 class="rs-blog-title underline has-black"> <a href="blog-details.html">Building
                                                resilient supply
                                                chains for</a></h5>
                                        <p class="rs-blog-description">Industry's standard dummy text ever....</p>
                                        <div class="rs-blog-tag">
                                            <a href="blog-details.html">Oil Factory</a>
                                        </div>
                                    </div>
                                    <div class="rs-blog-thumb has-clip-path order-0 order-sm-1">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('assets/images/blog/blog-thumb-02.png')}}" alt="image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="rs-blog-item has-grid">
                                    <div class="rs-blog-content has-padding order-1 order-sm-0">
                                        <div class="rs-blog-meta">
                                            <div class="rs-blog-meta-item">
                                                <span>
                                       By
                                       <a class="rs-blog-meta-author" href="#"> Nayeem</a>
                                    </span>
                                            </div>
                                            <div class="rs-blog-meta-item">
                                                <span>
                                       Feb 8, 2024
                                    </span>
                                            </div>
                                        </div>
                                        <h5 class="rs-blog-title underline has-black"> <a href="blog-details.html">Factories
                                                technologies in
                                                interactive and</a></h5>
                                        <p class="rs-blog-description">Industry's standard dummy text ever....</p>
                                        <div class="rs-blog-tag">
                                            <a href="blog-details.html">Manufacture</a>
                                        </div>
                                    </div>
                                    <div class="rs-blog-thumb has-clip-path order-0 order-sm-1">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('assets/images/blog/blog-thumb-03.png')}}" alt="image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog area end -->

@endsection
 
@section('script')
<script>
    document.addEventListener("DOMContentLoaded", function () {
      gsap.registerPlugin(ScrollTrigger);
  
      gsap.from(".rs-gsap-thumb img", {
        scrollTrigger: {
          trigger: ".rs-gsap-thumb",
          start: "top 80%",
          toggleActions: "play none none none",
        },
        x: -100, // geser dari kiri
        opacity: 0,
        duration: 0.2,
        ease: "power2.out"
      });
    });
  </script>

@endsection