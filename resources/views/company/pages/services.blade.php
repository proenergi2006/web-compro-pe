@extends('company.layout.main')

@section('css')
<link rel="stylesheet" href="https://unpkg.com/photoswipe@5/dist/photoswipe.css">
@endsection

@section('content')
    <!-- breadcrumb area start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative">
        <div class="rs-breadcrumb-bg" data-background="{{ asset('assets/images/pe-bg/services_hi_rev.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="rs-breadcrumb-content-wrapper">
                    <div class="rs-breadcrumb-title-wrapper text-center">
                        <h2 class="text-white radius-10" style="background: #EA5501;display: inline-block;padding: 10px 40px;">{!! __('message.title_services') !!}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- services area start -->
        <section class="rs-services-area section-space mt-5 rs-services-one rs-portfolio-eight p-relative">
            <div class="container">
                <div class="row g-5 section-title-space align-items-center">
                    <div class="rs-section-title-wrapper">
                        <h6 class="rs-section-title rs-split-text-enable split-in-fade text-center"><i style="color: #db4052">{!! __('message.quote_services') !!}</i></h6>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-xxl-3 col-xl-4 col-lg-4">
                        <div class="rs-services-tab">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-item-one-tab" data-bs-toggle="pill" data-bs-target="#pills-item-one" type="button" role="tab" aria-controls="pills-item-one" aria-selected="true">
                                        {!! __('message.title_supply') !!}<span class="rs-services-icon"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewBox="0 0 18 12"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                       d="M0 6C0 5.66249 0.273604 5.38889 0.611111 5.38889L15.0246 5.38889L11.179 1.54323C10.9403 1.30458 10.9403 0.917645 11.179 0.678991C11.4176 0.440337 11.8046 0.440337 12.0432 0.678991L16.9321 5.56788C17.1708 5.80653 17.1708 6.19347 16.9321 6.43212L12.0432 11.321C11.8046 11.5597 11.4176 11.5597 11.179 11.321C10.9403 11.0824 10.9403 10.6954 11.179 10.4568L15.0246 6.61111L0.611111 6.61111C0.273604 6.61111 0 6.33751 0 6Z"
                                       fill="white"></path>
                                 </svg></span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-item-two-tab" data-bs-toggle="pill" data-bs-target="#pills-item-two" type="button" role="tab" aria-controls="pills-item-two" aria-selected="false"> {!! __('message.facility') !!}<span class="rs-services-icon"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewBox="0 0 18 12"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                       d="M0 6C0 5.66249 0.273604 5.38889 0.611111 5.38889L15.0246 5.38889L11.179 1.54323C10.9403 1.30458 10.9403 0.917645 11.179 0.678991C11.4176 0.440337 11.8046 0.440337 12.0432 0.678991L16.9321 5.56788C17.1708 5.80653 17.1708 6.19347 16.9321 6.43212L12.0432 11.321C11.8046 11.5597 11.4176 11.5597 11.179 11.321C10.9403 11.0824 10.9403 10.6954 11.179 10.4568L15.0246 6.61111L0.611111 6.61111C0.273604 6.61111 0 6.33751 0 6Z"
                                       fill="white"></path>
                                 </svg></span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-9 col-xl-8 col-lg-8">
                        <div class="rs-services-tab-wrapper">
                            <div class="tab-content rs-services-tab-anim" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-item-one" role="tabpanel" aria-labelledby="pills-item-one-tab" tabindex="0">
                                    <div class="rs-services-tab-content-wrapper p-relative">
                                        <div class="row rs-contact-three">
                                            <div class="mb-4 rs-services-tab-content wow fadeInLeft" data-wow-delay=".7s" data-wow-duration="1s">
                                                <h3 class="rs-services-tab-title text-center" style="color: #db4052"> {!! __('message.title_supply') !!}</h3>
                                            </div>
                                            {{-- <div class="rs-services-tab-content wow fadeInRight" data-wow-delay=".7s" data-wow-duration="1s">
                                                <img src="{{ asset('assets/images/pe-service.jpg')}}" alt="image">
                                            </div> --}}
                                            <div class="rs-contact-thumb rs-image scroll_reveal reveal_left reveal-active">
                                                <img decoding="async" src="{{ asset('assets/images/pe-service.jpg')}}" alt="image">
                                            </div>
                                       
                                        </div>
                                        <div class="row">
                                             <!-- feature style 01 -->
                                                <section class="rs-elements-feature-area mt-4 rs-feature-one">
                                                    <div class="container">
                                                        <div class="row g-5">
                                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                                <div class="rs-feature-item wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                                                    <h5 class="rs-feature-title">
                                                                        LOCO
                                                                    </h5>
                                                                    <div class="rs-feature-descrip">
                                                                        <p>{!! __('message.loco') !!}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                                <div class="rs-feature-item wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                                                                    <h5 class="rs-feature-title">
                                                                        FRANCO
                                                                    </h5>
                                                                    <div class="rs-feature-descrip">
                                                                        <p>{!! __('message.franco') !!}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                                <div class="rs-feature-item wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                                                    <h5 class="rs-feature-title">
                                                                       Vendor Held Stock (VHS)
                                                                    </h5>
                                                                    <div class="rs-feature-descrip">
                                                                        <p>{!! __('message.vhs') !!}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                                <div class="rs-feature-item wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s">
                                                                    <h5 class="rs-feature-title">
                                                                        Fuel Management System (FMS)
                                                                    </h5>
                                                                    <div class="rs-feature-descrip">
                                                                        <p>{!! __('message.fms') !!}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <!-- feature style 01 -->
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="tab-pane fade" id="pills-item-two" role="tabpanel" aria-labelledby="pills-item-two-tab" tabindex="0">
                                    <div class="rs-services-tab-content-wrapper p-relative">
                                        <div class="rs-services-tab-content wow fadeInLeft" data-wow-delay=".7s" data-wow-duration="1s">
                                            <h3 class="rs-services-tab-title" style="color: #db4052">{!! __('message.fleet') !!}</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4">
                                                {{-- <div class="rs-portfolio-item">
                                                    <div class="rs-portfolio-thumb wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                                        <a href="{{ asset('assets/images/truck/trucks_facility1_small.png')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                                                            <img src="{{ asset('assets/images/truck/trucks_facility1_small.png')}}" alt="image">
                                                        </a>
                                                    </div>
                                                    <div class="rs-portfolio-content">
                                                        <h5 class="rs-portfolio-title underline has-white">
                                                            <a>View Image</a>
                                                        </h5>
                                                    </div>
                                                    <div class="rs-portfolio-btn">
                                                        <a class="rs-btn has-theme-light-green has-circle has-icon" href="{{ asset('assets/images/truck/trucks_facility1_small.png')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
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
                                                </div> --}}
                                                {{-- <div class="rs-portfolio-item"> --}}
                                                    <div class="rs-portfolio-thumb wow fadeInLeft" data-wow-delay=".7s" data-wow-duration="1s">
                                                        <a href="{{ asset('assets/images/truck/trucks_facility1_small.png')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                                                            <img src="{{ asset('assets/images/truck/trucks_facility1_small.png')}}" alt="image">
                                                        </a>
                                                    </div>
                                                {{-- </div> --}}
                                                {{-- <img src="{{ asset('assets/images/truck/trucks_facility1_small.png')}}" alt="image"> --}}
                                            </div>
                                            <div class="col-xl-8 col-lg-8">
                                                <div class="rs-services-tab-content wow fadeInLeft" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <p>5,000 Liters {!! __('message.and') !!} 8,000 Liters</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4">
                                                {{-- <div class="rs-portfolio-item">
                                                    <div class="rs-portfolio-thumb wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                                        <a href="{{ asset('assets/images/truck/trucks_facility2_small.png')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                                                            <img src="{{ asset('assets/images/truck/trucks_facility2_small.png')}}" alt="image">
                                                        </a>
                                                    </div>
                                                    <div class="rs-portfolio-content">
                                                        <h5 class="rs-portfolio-title underline has-white">
                                                            <a>View Image</a>
                                                        </h5>
                                                    </div>
                                                    <div class="rs-portfolio-btn">
                                                        <a class="rs-btn has-theme-light-green has-circle has-icon" href="{{ asset('assets/images/truck/trucks_facility2_small.png')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
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
                                                </div> --}}
                                                 {{-- <div class="rs-portfolio-item"> --}}
                                                    <div class="rs-portfolio-thumb wow fadeInLeft" data-wow-delay=".7s" data-wow-duration="1s">
                                                        <a href="{{ asset('assets/images/truck/trucks_facility2_small.png')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                                                            <img src="{{ asset('assets/images/truck/trucks_facility2_small.png')}}" alt="image">
                                                        </a>
                                                    </div>
                                                {{-- </div> --}}
                                               
                                            </div>
                                            <div class="col-xl-8 col-lg-8">
                                                <div class="rs-services-tab-content wow fadeInLeft" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <p>10,000 Liters {!! __('message.and') !!} 16,000 Liters</p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="rs-services-tab-content wow fadeInLeft mt-4" data-wow-delay=".7s" data-wow-duration="1s">
                                            <h3 class="rs-services-tab-title" style="color: #db4052">{!! __('message.storage') !!}</h3>
                                        </div>
                                        <div class="row mb-5">
                                            <div class="col-xl-5 col-lg-5">
                                                <div class="rs-portfolio-item">
                                                    <div class="rs-portfolio-thumb wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                                        <a href="{{ asset('assets/images/storage/Vopak2.jpg')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                                                            <img src="{{ asset('assets/images/storage/Vopak2.jpg')}}" alt="image">
                                                        </a>
                                                    </div>
                                                    <div class="rs-portfolio-content">
                                                        <h5 class="rs-portfolio-title underline has-white">
                                                            <a>View Image</a>
                                                        </h5>
                                                    </div>
                                                    <div class="rs-portfolio-btn">
                                                        <a class="rs-btn has-theme-light-green has-circle has-icon" href="{{ asset('assets/images/storage/Vopak2.jpg')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
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
                                                {{-- <div class="rs-portfolio-thumb wow fadeInLeft" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <img src="{{ asset('assets/images/storage/Vopak2.jpg')}}" alt="image">
                                                </div> --}}
                                            </div>
                                            <div class="col-xl-7 col-lg-7">
                                                <div class="rs-services-tab-content wow fadeInLeft" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <h3 class="rs-services-tab-title">Jakarta Tank Terminal (Vopak)
                                                    </h3>
                                                    <p>Tanjung Priuk Tank Terminal, DKI Jakarta</p>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-5">
                                            <div class="col-xl-5 col-lg-5">
                                                <div class="rs-portfolio-item">
                                                    <div class="rs-portfolio-thumb wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                                        <a href="{{ asset('assets/images/storage/FOTO-DMT-1.jpg')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                                                            <img src="{{ asset('assets/images/storage/FOTO-DMT-1.jpg')}}" alt="image">
                                                        </a>
                                                    </div>
                                                    <div class="rs-portfolio-content">
                                                        <h5 class="rs-portfolio-title underline has-white">
                                                            <a>View Image</a>
                                                        </h5>
                                                    </div>
                                                    <div class="rs-portfolio-btn">
                                                        <a class="rs-btn has-theme-light-green has-circle has-icon" href="{{ asset('assets/images/storage/FOTO-DMT-1.jpg')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
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
                                                {{-- <div class="rs-portfolio-thumb wow fadeInLeft" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <img src="{{ asset('assets/images/storage/FOTO-DMT-1.jpg')}}" alt="image">
                                                </div> --}}
                                            </div>
                                            <div class="col-xl-7 col-lg-7">
                                                <div class="rs-services-tab-content wow fadeInLeft" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <h3 class="rs-services-tab-title">Dovechem Maspion Terminal (DMT)
                                                    </h3>
                                                    <p>Gresik, East Java</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-5">
                                            <div class="col-xl-5 col-lg-5">
                                                <div class="rs-portfolio-item">
                                                    <div class="rs-portfolio-thumb wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                                        <a href="{{ asset('assets/images/storage/ptt.jpeg')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                                                            <img src="{{ asset('assets/images/storage/ptt.jpeg')}}" alt="image">
                                                        </a>
                                                    </div>
                                                    <div class="rs-portfolio-content">
                                                        <h5 class="rs-portfolio-title underline has-white">
                                                            <a>View Image</a>
                                                        </h5>
                                                    </div>
                                                    <div class="rs-portfolio-btn">
                                                        <a class="rs-btn has-theme-light-green has-circle has-icon" href="{{ asset('assets/images/storage/ptt.jpeg')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
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
                                                {{-- <div class="rs-portfolio-thumb wow fadeInLeft" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <img src="{{ asset('assets/images/storage/ptt.jpeg')}}" alt="image">
                                                </div> --}}
                                            </div>
                                            <div class="col-xl-7 col-lg-7">
                                                <div class="rs-services-tab-content wow fadeInLeft" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <h3 class="rs-services-tab-title">Pro Tank Terminal (PTT)
                                                    </h3>
                                                    <p>Mangkujenang, Palaran, East Kalimantan</p>
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
        <!-- services area end -->
@endsection

@section('script')
<script type="module">
import PhotoSwipeLightbox from 'https://unpkg.com/photoswipe@5/dist/photoswipe-lightbox.esm.min.js';

const lightbox = new PhotoSwipeLightbox({
    gallery: '.rs-portfolio-btn, .rs-portfolio-thumb',
    children: 'a',
    pswpModule: () => import('https://unpkg.com/photoswipe@5/dist/photoswipe.esm.min.js')
});

lightbox.init();
</script>

@endsection
