@extends('company.layout.app')


@section('css')
<link rel="stylesheet" href="https://unpkg.com/photoswipe@5/dist/photoswipe.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<style>
#map {
    height: 500px;  /* Sesuaikan tinggi peta menjadi lebih kecil, misalnya 500px */
    width: 100%;  /* Lebar tetap 100% dari container */
    z-index: 1;
}

.container-map {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    gap: 20px;
}

.sidebar {
    width: 400px; /* Sidebar memiliki lebar tetap */
    height: 500px; /* Menyesuaikan dengan tinggi peta */
    overflow-y: auto;
    border-right: 1px solid #ccc;
    padding: 10px;
}

.accordion-button.section-title {
    font-weight: bold;
    background-color: #fff;
    color: #000;
    padding: 10px 15px;
    border-bottom: 1px solid #ccc;
    font-size: 13px;
}

.accordion-button.section-established {
    background-color: #c0392b;
    color: #fff;
}

.accordion-button.section-progress {
    background-color: #2c3e50;
    color: #fff;
}

.accordion-body .location-item {
    padding: 8px 15px;
    cursor: pointer;
    border-bottom: 1px solid #eee;
}

.accordion-body .location-established:hover {
    background: #f3f3f3;
    font-size: 13px;
    border-left: 3px solid #db4052;
}

.accordion-body .location-progress:hover {
    background: #f3f3f3;
    font-size: 13px;
    border-left: 3px solid #2c3e50;
}

.accordion-body .location-item {
    font-size: 13px;
    padding: 8px 15px;
    cursor: pointer;
    border-bottom: 1px solid #eee;
    background: #fff;
    transition: background 0.3s ease;
}

.custom-popup {
    font-size: 14px;
    color: #444;
    max-width: 250px;
}


</style>
@endsection

@section('content')
      <!-- banner area start -->
    <section class="rs-banner-area rs-banner-nine section-space-bottom rs-swiper">
        <div class="rs-banner-slider-wrapper">
            <div class="swiper" data-clone-slides="false" data-loop="true" data-speed="2000" data-autoplay="true" data-dots-dynamic="false" data-hover-pause="true" data-effect="fade" data-delay="3000" data-item="1" data-margin="30">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="rs-banner-item-wrapper">
                            <div class="rs-banner-bg-thumb" data-background="{{ asset('assets/images/pe-bg/10.jpg')}}">
                            </div>
                            <div class="container">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-8">
                                        <div class="rs-banner-wrapper mt-4">
                                            {{-- <span class="rs-banner-stroke-text">
                                            industrie
                                            </span> --}}
                                            <div class="rs-banner-content">
                                                <h6 class="text-center rs-banner-title" style="background: rgb(39, 52, 120);display: inline-block;padding: 9px 20px;">{{ __('message.energy') }}
                                                </h6>
                                                <div class="rs-banner-info-btn">
                                                    <div class="rs-banner-btn">
                                                        <a class="rs-btn has-theme-red has-icon has-bg" href="/{{ app()->getLocale() }}/about"> <i
                                                            class="ri-play-fill"></i> {{ __('message.learn') }}
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
                                    <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-7">
                                        <div class="rs-banner-wrapper">
                                            <div class="rs-banner-content">
                                                <h1 class="rs-banner-title text-center" style="background: rgb(255, 165, 0);display: inline-block;padding: 9px 10px;">{{ __('message.committed') }}
                                                </h1>
                                                <h1 class="rs-banner-title" style="background: rgb(219, 64, 82);display: inline-block;padding: 9px 10px;">{{ __('message.providing') }}
                                                </h1>
                                                <h1 class="rs-banner-title" style="background: rgb(39, 52, 120);display: inline-block;padding: 9px 10px;">{{ __('message.best') }}
                                                </h1>
                                                <div class="rs-banner-info-btn">
                                                    <div class="rs-banner-btn">
                                                        <a class="rs-btn has-theme-red has-icon has-bg" href="/{{ app()->getLocale() }}/about"> <i
                                                            class="ri-play-fill"></i> {{ __('message.learn') }}
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
                                    <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-8">
                                        <div class="rs-banner-wrapper">
                                            {{-- <span class="rs-banner-stroke-text">
                                            ProEnergi
                                            </span> --}}
                                            <div class="rs-banner-content">
                                                <h3 class="rs-banner-title" style="background: rgb(255, 165, 0);display: inline-block;padding: 9px 10px;">{{ __('message.leading') }}
                                                </h3>
                                                <h3 class="rs-banner-title" style="background: rgb(219, 64, 82);display: inline-block;padding: 9px 10px;">{{ __('message.fuel') }}
                                                </h3>
                                                <h3 class="rs-banner-title" style="background: rgb(39, 52, 120);display: inline-block;padding: 9px 10px;">{{ __('message.indonesia') }}
                                                </h3>
                                                <div class="rs-banner-info-btn">
                                                    <div class="rs-banner-btn">
                                                        <a class="rs-btn has-theme-red has-icon has-bg" href="/{{ app()->getLocale() }}/about"> <i
                                                            class="ri-play-fill"></i> {{ __('message.learn') }}
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

    <!-- about area start -->
    <section id="homeabout" class="rs-elements-portfolio-area section-space rs-portfolio-eight rs-swiper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-10">
                    <div class="rs-section-title-wrapper text-center section-title-space">
                        <p class="rs-section-subtitle has-theme-red rs-fw-ebold">
                          
                            <h3 class="rs-split-text-enable has-theme-red split-in-fade" style="color: #db4052">  {{ __('message.about') }}</h3>
                        </p>
                        <p class="rs-fs-b1 rs-section-title has-theme-black wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">{{ __('message.about_1') }}</p>
                        <p class="rs-fs-b1 rs-section-title has-theme-black wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">{{ __('message.about_2') }}</p>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                    <div class="col-xl-3 col-lg-3">
                        <div class="rs-portfolio-item">
                            <div class="rs-portfolio-thumb wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                <a href="{{ asset('assets/images/about/MG_4899.jpg')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                                    <img src="{{ asset('assets/images/about/MG_4899.jpg')}}" data-pswp-width="1200" data-pswp-height="900" alt="image">
                                </a>
                            </div>
                            <div class="rs-portfolio-content">
                                <h5 class="rs-portfolio-title underline has-white">
                                    <a> {{ __('message.view') }}</a>
                                </h5>
                            </div>
                            <div class="rs-portfolio-btn">
                                <a class="rs-btn has-theme-light-green has-circle has-icon" href="{{ asset('assets/images/about/MG_4899.jpg')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                                    <span class="icon-box">
                                    <svg class="icon-first" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 32 32">
                                        <path
                                            d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                        </path>
                                    </svg>
                                    <svg class="icon-second" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 32 32">
                                        <path
                                            d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                        </path>
                                    </svg>
                                </span>
                                </a>
                            </div>
                        </div>
                         
                    
                        {{-- <div class="rs-portfolio-item">
                            <div class="rs-portfolio-thumb wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                <img src="{{ asset('assets/images/about/MG_4899.jpg')}}" alt="image">
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="rs-portfolio-item">
                            <div class="rs-portfolio-thumb wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                <a href="{{ asset('assets/images/about/MG_4889-copy.jpg')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                                    <img src="{{ asset('assets/images/about/MG_4889-copy.jpg')}}" alt="image">
                                </a>
                            </div>
                            <div class="rs-portfolio-content">
                                <h5 class="rs-portfolio-title underline has-white">
                                    <a> {{ __('message.view') }}</a>
                                </h5>
                            </div>
                            <div class="rs-portfolio-btn">
                                <a class="rs-btn has-theme-light-green has-circle has-icon" href="{{ asset('assets/images/about/MG_4889-copy.jpg')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                                    <span class="icon-box">
                                    <svg class="icon-first" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 32 32">
                                        <path
                                            d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                        </path>
                                    </svg>
                                    <svg class="icon-second" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 32 32">
                                        <path
                                            d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                        </path>
                                    </svg>
                                </span>
                                </a>
                            </div>
                        </div>
                        {{-- <div class="rs-portfolio-item">
                            <div class="rs-portfolio-thumb wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                <img src="{{ asset('assets/images/about/MG_4889-copy.jpg')}}" alt="image">
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="rs-portfolio-item">
                            <div class="rs-portfolio-thumb wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                <a href="{{ asset('assets/images/about/MG_3081.jpg')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                                    <img src="{{ asset('assets/images/about/MG_3081.jpg')}}" alt="image">
                                </a>
                            </div>
                            <div class="rs-portfolio-content">
                                <h5 class="rs-portfolio-title underline has-white">
                                    <a> {{ __('message.view') }}</a>
                                </h5>
                            </div>
                            <div class="rs-portfolio-btn">
                                <a class="rs-btn has-theme-light-green has-circle has-icon" href="{{ asset('assets/images/about/MG_3081.jpg')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                                    <span class="icon-box">
                                    <svg class="icon-first" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 32 32">
                                        <path
                                            d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                        </path>
                                    </svg>
                                    <svg class="icon-second" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 32 32">
                                        <path
                                            d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                        </path>
                                    </svg>
                                </span>
                                </a>
                            </div>
                        </div>
                        {{-- <div class="rs-portfolio-item">
                            <div class="rs-portfolio-thumb wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                <img src="{{ asset('assets/images/about/MG_3081.jpg')}}" alt="image">
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="rs-portfolio-item">
                            <div class="rs-portfolio-thumb wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                <a href="{{ asset('assets/images/about/MG_4882-copy_revisi.jpg')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                                    <img src="{{ asset('assets/images/about/MG_4882-copy_revisi.jpg')}}" alt="image">
                                </a>
                            </div>
                            <div class="rs-portfolio-content">
                                <h5 class="rs-portfolio-title underline has-white">
                                    <a> {{ __('message.view') }}</a>
                                </h5>
                            </div>
                            <div class="rs-portfolio-btn">
                                <a class="rs-btn has-theme-light-green has-circle has-icon" href="{{ asset('assets/images/about/MG_4882-copy_revisi.jpg')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                                    <span class="icon-box">
                                    <svg class="icon-first" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 32 32">
                                        <path
                                            d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                        </path>
                                    </svg>
                                    <svg class="icon-second" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 32 32">
                                        <path
                                            d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                        </path>
                                    </svg>
                                </span>
                                </a>
                            </div>
                        </div>
                        {{-- <div class="rs-portfolio-item">
                            <div class="rs-portfolio-thumb wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                <img src="{{ asset('assets/images/about/MG_4882-copy_revisi.jpg')}}" alt="image">
                            </div>
                        </div> --}}
                    </div>
                        
            </div>
            <div class="row text-center mt-5 g-5">
                <div class="rs-testimonial-btn">
                    <a class="rs-btn has-theme-red has-icon has-bg" href="/{{ app()->getLocale() }}/about"> <i
                        class="ri-play-fill"></i> {{ __('message.learn') }}
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->


    <!-- about area start -->
    <section id="homeproducts">
        <div class="rs-video-area section-space-medium rs-video-two jarallax">
            <div class="rs-video-bg-thumb jarallax-img" data-background="{{ asset('assets/images/pe-bg/pe-bg-product.jpg')}}"></div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-10">
                    <div class="rs-section-title-wrapper text-center section-title-space">
                        <p class="rs-section-subtitle has-theme-red rs-fw-ebold">
                          
                            <h2 class="rs-video-title rs-split-text-enable split-in-fade text-white">{{ __('message.ourproduct') }}</h2>
                        </p>
                    </div>
                </div>
            </div>
            <div class="container justify-content-between">
                <div class="row">
                    <div class="col-xl-4 text-center wow slideInLeft" data-wow-delay=".7s" data-wow-duration="1s">
                        <div class="rs-video-content">
                            <img src="{{ asset('assets/images/produk/pe-product-prodiesel-1.png')}}" alt="image">
                        </div>
                    </div>
                    <div class="col-xl-4 text-center wow slide-down" data-wow-duration="17s" >
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
                <div class="row text-center mt-5 g-5">
                    <div class="rs-testimonial-btn">
                        <a class="rs-btn has-theme-light-blue has-icon has-bg" href="/{{ app()->getLocale() }}/product"> <i
                            class="ri-play-fill"></i>  {{ __('message.learn') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

    <!-- services area start -->
    <section id="homeservices" class="rs-contact-area section-space rs-contact-three">
        <div class="container">
            <div class="row g-5 justify-content-center section-title-space align-items-center">
                <div class="col-xxl-8 col-xl-9 col-lg-9">
                    <div class="text-center has-theme-red">
                        <h3 class="rs-split-text-enable split-in-fade" style="color: #db4052">OUR SERVICES</h3>
                    </div>
                </div>
            </div>
            <div class="justify-content-center g-5">
                <div class="rs-contact-thumb rs-image scroll_reveal reveal_left reveal-active">
                    <img decoding="async" src="{{ asset('assets/images/pe-service.jpg')}}" alt="image">
                </div>
            </div>
            <div class="row text-center mt-5 g-5">
                <div class="rs-testimonial-btn">
                    <a class="rs-btn has-theme-red has-icon has-bg" href="/{{ app()->getLocale() }}/services"> <i
                        class="ri-play-fill"></i>  {{ __('message.learn') }}
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- services area end -->

    <!-- networks area start -->
    <section id="homenetworks" class="rs-testimonial-area section-space rs-testimonial-one primary-bg rs-swiper">
        <div class="container">
            <div class="row  g-5 justify-content-center section-title-space align-items-center">
                <div class="col-xxl-7 col-xl-8 col-lg-8">
                    <div class="text-center has-theme-red">
                        <h3 class="rs-split-text-enable split-in-fade" style="color: #db4052">OUR NETWORKS</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @include('company.pages.maps')
                </div>
            </div>
        </div>
    </section>
    <!-- network area end -->

    <!-- news area start -->
    <section id="homenews" class="rs-elements-blog-area section-space rs-blog-two rs-swiper">
        <div class="container">
            <div class="row  g-5 justify-content-center section-title-space align-items-center">
                <div class="col-xxl-7 col-xl-8 col-lg-8">
                    <div class="text-center has-theme-red">
                        <h3 class="rs-split-text-enable split-in-fade">NEWS & ARTICLES</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-10 col-lg-10">
                    <div class="rs-blog-slider">
                        <div class="swiper" data-clone-slides="false" data-loop="false" data-speed="1500" data-autoplay="true" data-dots-dynamic="false" data-hover-pause="true" data-effect="false" data-delay="2500" data-item="3" data-item-xl="3" data-item-lg="3" data-item-md="2" data-item-sm="1" data-item-xs="1" data-item-mobile="1" data-margin="30" data-margin-xl="30">
                            <div class="swiper-wrapper">
                                @forelse ($articles as $article)
                                    <div class="swiper-slide">
                                        <div class="rs-blog-item">
                                            <div class="rs-blog-thumb">
                                                <a href="blog-details.html">   <img src="{{ asset('storage/' . $article->thumbnail) }}" width="300"></a>
                                            </div>
                                            <div class="rs-blog-content">
                                                <div class="rs-blog-tag has-theme-red">
                                                    <a href="blog-details.html">Company</a>
                                                </div>
                                                <h5 class="rs-blog-title underline has-black"> <a href="blog-details.html">{{$article->title}}</a>
                                                </h5>
                                                <div class="rs-blog-meta">
                                                    {{ Str::limit(strip_tags($article->content), 100) }}
                                                    
                                                </div>
                                                <div class="rs-blog-btn-wrapper">
                                                    <span class="rs-blog-meta-text">{{$article->created_at}}</span>
                                                    <a class="rs-square-btn has-icon has-light-grey" href="blog-details.html">
                                                        <span class="icon-box">
                                                            <i class="ri-arrow-right-line icon-first"></i>
                                                            <i class="ri-arrow-right-line icon-second"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-12">
                                        <div class="flex justify-content-center align-items-center">
                                            <div class="alert alert-warning text-center">
                                                {{ __('message.nonews')}}
                                            </div>
                                        </div>
                                    </div>
                                @endforelse
                              
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2">
                    <div class="text-center mb-2">
                        <h6>{{ __('message.crude')}}</h6>
                    </div>
                   
                    <div class="d-flex flex-column align-items-center">
                        <script type="text/javascript" src="https://www.oil-price.net/TABLE2/gen.php?lang=id"> </script>
                        <a href="http://www.oil-price.net/dashboard.php?lang=en#TABLE2">oil price</a>
                        <br>
                        <script type="text/javascript" src="https://www.oil-price.net/widgets/brent_crude_price_large/gen.php?lang=id"> </script>
                        <a href="http://www.oil-price.net/dashboard.php?lang=en#brent_crude_price_large">oil price</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- career area end -->

    <!-- career area start -->
    <section id="homecareer">
        <div class="rs-video-area section-space rs-video-two jarallax">
            <div class="container has-large">
                {{-- <div class="rs-video-bg-thumb jarallax-img" data-background="{{ asset('assets/images/pe-bg/pe-bg-career.jpg')}}"></div> --}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="rs-video-bg-thumb jarallax-img" data-background="{{ asset('assets/images/pe-bg/pe-bg-career.jpg')}}"></div>
                    </div>
                </div>
                <div class="row g-6 justify-content-center section-title-spacing align-items-center">
                    <div class="col-xxl-7 col-xl-8 col-lg-8">
                        <div class="text-center has-theme-red">
                            <h2 class="rs-video-title rs-split-text-enable split-in-fade"  style="color: #db4052">{{ __('message.ourcareer') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="row mb-4">
                        <div class="rs-breadcrumb-title-wrapper text-center">
                            <h3 class="rs-breadcrumb-title text-white" style="background: #194494b9;display: inline-block;padding: 14px 50px;">{!! __('message.work') !!}</h3>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="rs-testimonial-btn">
                            <a class="rs-btn has-theme-red has-icon has-bg" href="/{{ app()->getLocale() }}/careers"> <i
                                class="ri-play-fill"></i>  {{ __('message.apply') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta area end -->
@endsection

@section('script')

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    // Initialize the map
    var map = L.map('map',{ scrollWheelZoom: false }).setView([-2.5489, 118.0149], 5); // Center Indonesia
  
    // Add a tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '© OpenStreetMap contributors'
    }).addTo(map);
  
    // Marker data
    var locations = [
        {
            name: 'Surabaya',
            lat: -7.2575,
            lng: 112.7521,
            type: 'Established',
            info: `JL. Tenggilis Utara II No. 1<br>
                Prapen Indah Blok P1<br>
                Surabaya 60222<br>
                East Java - Indonesia<br>
                Phone 1: +62-31-99850204<br>
                Phone 2: +62-31-99850208<br>
                Fax: +62-31-99004285`
        },
        {
            name: 'Jakarta',
            lat: -6.2277,
            lng: 106.8326,
            type: 'Established',
            info: `Jl. HR. Rasuna Said<br>
                Blok X1, Kav 1-2<br>
                Jakarta 12950<br>
                DKI Jakarta - Indonesia<br>
                Phone : +62-21-52892321<br>
                Fax : +62-21-52892310`
        },
        {
            name: 'Samarinda',
            lat: -0.4911,
            lng: 117.1456,
            type: 'Established',
            info: `Jl. Raya Alaya, Block LE-21<br>
                Samarinda<br>
                East Kalimantan - Indonesia<br>
                Phone : +62-541-4100195<br>
                Fax : +62-541-7284523`
        },
        {
            name: 'Palembang',
            lat: -2.9761,
            lng: 104.7754,
            type: 'Established',
            info: `Komplek Ruko Golden Boulevard<br>
                Blok D 01 No. 01, Citra Grand City<br>
                South Sumatera - Indonesia<br>
                Phone : +62-711-5645549<br>
                Fax : +62-711-5640399`
        },
        {
            name: 'Pontianak',
            lat: -0.0263,
            lng: 109.3425,
            type: 'Established',
            info: `Komplek Royal Serdam 2 No. A1<br>
                Jln. Sungai Raya Dalam<br>
                Bangka Belitung - Pontianak<br>
                West Kalimantan - Indonesia<br>
                Phone 1: +62-561-6730299<br>
                Phone 2: +62-561-6730854<br>
                Fax: +62-561-6730854`
        },
        {
            name: 'Banjarmasin',
            lat: -3.3194,
            lng: 114.5908,
            type: 'Established',
            info: `Komplek Citraland, The Escapade A01/08<br>
                Jl. Ahmad Yani Km 7, Pemurus Luar, 70654<br>
                Banjarmasin Timur, South Kalimantan<br>
                Telp : 0511-6773900<br>
                Fax : 0511-6773900`
        },
        {
            name: 'Semarang',
            lat: -6.9667,
            lng: 110.4167,
            type: 'On Progress',
            info: 'Semarang (Coming Soon)'
        },
        {
            name: 'Riau',
            lat: 0.5071,
            lng: 101.4478,
            type: 'On Progress',
            info: 'Riau (Coming Soon)'
        },
        {
            name: 'Central Kalimantan',
            lat: -1.6815,
            lng: 113.3824,
            type: 'On Progress',
            info: 'Central Kalimantan (Coming Soon)'
        },
        {
            name: 'North Kalimantan',
            lat: 3.0731,
            lng: 116.0414,
            type: 'On Progress',
            info: 'North Kalimantan (Coming Soon)'
        },
        {
            name: 'Makassar & Palu',
            lat: -2.5,
            lng: 120.0,
            type: 'On Progress',
            info: 'Makassar & Palu (Coming Soon)'
        },
        {
            name: 'Medan',
            lat: 3.5952,
            lng: 98.6722,
            type: 'On Progress',
            info: 'Medan (Coming Soon)'
        },
        {
            name: 'Lampung',
            lat: -5.45,
            lng: 105.2667,
            type: 'On Progress',
            info: 'Lampung (Coming Soon)'
        }
    ];
  
    // Store marker references
    const markerRefs = {};
  
    // Add markers
    locations.forEach(loc => {
      var marker = L.marker([loc.lat, loc.lng], {
        icon: L.icon({
          iconUrl: loc.type === 'Established' ? 'https://maps.gstatic.com/mapfiles/ms2/micons/red-dot.png' : 'https://maps.gstatic.com/mapfiles/ms2/micons/purple-dot.png',
          iconSize: [32, 32]
        })
      }).addTo(map);
  
      marker.bindPopup(`<b>${loc.name}</b><br>${loc.info}`, {
        className: 'custom-popup'
        });

        marker.on('click', () => {
            map.flyTo([loc.lat, loc.lng], 8, {
            duration: 1.5
            });
            marker.openPopup();
        });
      markerRefs[loc.name] = marker;
    });
  
    // Sidebar click event
    document.querySelectorAll('.location-item').forEach(item => {
      item.addEventListener('click', function () {
        const name = this.getAttribute('data-name');
        const marker = markerRefs[name];
        if (marker) {
          map.flyTo(marker.getLatLng(), 8);
          marker.openPopup();
        }
      });
    });


   
</script>
<script type="module">
import PhotoSwipeLightbox from 'https://unpkg.com/photoswipe@5/dist/photoswipe-lightbox.esm.min.js';

const lightbox = new PhotoSwipeLightbox({
    gallery: '.rs-portfolio-btn',
    children: 'a',
    pswpModule: () => import('https://unpkg.com/photoswipe@5/dist/photoswipe.esm.min.js')
});

lightbox.init();
</script>
@endsection
