@extends('company.layout.main')

@section('css')
<link rel="stylesheet" href="https://unpkg.com/photoswipe@5/dist/photoswipe.css">
@endsection

@section('content')
    <!-- breadcrumb area start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative">
        <div class="rs-breadcrumb-bg" data-background="{{ asset('assets/images/pe-bg/about_us_hi_rev2.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="rs-breadcrumb-content-wrapper">
                    <div class="rs-breadcrumb-title-wrapper text-center">
                        <h1 class="rs-breadcrumb-title" style="background: #db4052;display: inline-block;font-size:3em;padding: 14px 50px;">{!! __('message.title_about') !!}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- services area start -->
        <section class="rs-services-area section-space rs-services-one primary-bg p-relative rs-portfolio-eight">
            <div class="container">
                {{-- <div class="row g-5 section-title-space align-items-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="rs-section-title-wrapper">
                            <h2 class="rs-section-title rs-split-text-enable split-in-fade">Creative features from production industry</h2>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="rs-services-btn">
                            <a class="rs-btn has-bg-transparent has-icon has-bg" href="services.html">View All Solution
                                <span class="icon-box">
                                <svg class="icon-first" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                    <path
                                        d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                    </path>
                                </svg>
                                <svg class="icon-second" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                    <path
                                        d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                    </path>
                                </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div> --}}
                <div class="row g-5">
                    <div class="col-xxl-3 col-xl-4 col-lg-4">
                        <div class="rs-services-tab">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-item-one-tab" data-bs-toggle="pill" data-bs-target="#pills-item-one" type="button" role="tab" aria-controls="pills-item-one" aria-selected="true">
                                        {!! Str::upper(__('message.overview')) !!} <span class="rs-services-icon"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewBox="0 0 18 12"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                       d="M0 6C0 5.66249 0.273604 5.38889 0.611111 5.38889L15.0246 5.38889L11.179 1.54323C10.9403 1.30458 10.9403 0.917645 11.179 0.678991C11.4176 0.440337 11.8046 0.440337 12.0432 0.678991L16.9321 5.56788C17.1708 5.80653 17.1708 6.19347 16.9321 6.43212L12.0432 11.321C11.8046 11.5597 11.4176 11.5597 11.179 11.321C10.9403 11.0824 10.9403 10.6954 11.179 10.4568L15.0246 6.61111L0.611111 6.61111C0.273604 6.61111 0 6.33751 0 6Z"
                                       fill="white"></path>
                                 </svg></span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-item-two-tab" data-bs-toggle="pill" data-bs-target="#pills-item-two" type="button" role="tab" aria-controls="pills-item-two" aria-selected="false">  {!! Str::upper(__('message.history')) !!} <span class="rs-services-icon"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewBox="0 0 18 12"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                       d="M0 6C0 5.66249 0.273604 5.38889 0.611111 5.38889L15.0246 5.38889L11.179 1.54323C10.9403 1.30458 10.9403 0.917645 11.179 0.678991C11.4176 0.440337 11.8046 0.440337 12.0432 0.678991L16.9321 5.56788C17.1708 5.80653 17.1708 6.19347 16.9321 6.43212L12.0432 11.321C11.8046 11.5597 11.4176 11.5597 11.179 11.321C10.9403 11.0824 10.9403 10.6954 11.179 10.4568L15.0246 6.61111L0.611111 6.61111C0.273604 6.61111 0 6.33751 0 6Z"
                                       fill="white"></path>
                                 </svg></span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-item-three-tab" data-bs-toggle="pill" data-bs-target="#pills-item-three" type="button" role="tab" aria-controls="pills-item-three" aria-selected="false">
                                        {!! Str::upper(__('message.management')) !!}<span class="rs-services-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="18" height="12" viewBox="0 0 18 12" fill="none">
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
                                        <div class="row">
                                            <div class="col-xl-7 col-lg-7">
                                                <div class="rs-services-tab-content wow fadeInLeft" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <p class="rs-services-tab-word" style="white-space: pre-line;">{!! __('message.overview_1') !!}
                                                   
                                                    {!! __('message.overview_2') !!}
                                                    </p>
                                                </div>
                                                {{-- <div id="slider" class="nivoSlider"> 
                                                    <img src="{{ asset('assets/images/about/MG_4899.jpg')}}" data-thumb="images/toystory.jpg" alt="" /> 
                                                    <img src="{{ asset('assets/images/about/MG_4889-copy.jpg')}}" data-thumb="images/up.jpg" alt="" title="This is an example of a caption" />
                                                    <img src="{{ asset('assets/images/about/MG_4882-copy_revisi.jpg')}}" data-thumb="images/walle.jpg" alt="" data-transition="slideInLeft" /> 
                                                    <img src="{{ asset('assets/images/about/MG_3081.jpg')}}" data-thumb="images/nemo.jpg" alt="" title="#htmlcaption" /> 
                                                </div> --}}
                                                <section class="rs-elements-portfolio-area section-space-bottom rs-portfolio-seven rs-swiper">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="rs-portfolio-slider-wrapper">
                                                                    <div class="swiper" data-clone-slides="false" data-loop="true" data-speed="2000" data-autoplay="true" data-dots-dynamic="false" data-hover-pause="true" data-effect="false" data-delay="1000" data-item="1" data-item-xl="1" data-item-lg="1" data-item-md="1" data-item-sm="1" data-item-xs="1" data-item-mobile="1" data-margin="30">
                                                                        <div class="swiper-wrapper">
                                                                            <div class="swiper-slide">
                                                                                <div class="rs-portfolio-item">
                                                                                    <div class="rs-postbox-thumb">
                                                                                        <img src="{{ asset('assets/images/about/MG_4899.jpg')}}" alt="image">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="swiper-slide">
                                                                                <div class="rs-portfolio-item">
                                                                                    <div class="rs-postbox-thumb">
                                                                                        <img src="{{ asset('assets/images/about/MG_4889-copy.jpg')}}" alt="image">
                                                                                    </div>
                                                                                   
                                                                                </div>
                                                                            </div>
                                                                            <div class="swiper-slide">
                                                                                <div class="rs-portfolio-item">
                                                                                    <div class="rs-postbox-thumb">
                                                                                        <img src="{{ asset('assets/images/about/MG_4882-copy_revisi.jpg')}}" alt="image">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="swiper-slide">
                                                                                <div class="rs-portfolio-item">
                                                                                    <div class="rs-postbox-thumb">
                                                                                        <img src="{{ asset('assets/images/about/MG_3081.jpg')}}" alt="image">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- if we need pagination -->
                                                                        <div class="rs-portfolio-pagination">
                                                                            <div class="swiper-pagination rs-pagination has-theme-orange"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="col-xl-5 col-lg-5">
                                                <div class="rs-services-tab-content wow fadeInRight" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <h3 class="rs-services-tab-title" style="color: #db4052">{!! __('message.title_vision') !!}</h3>
                                                    <p>{!! __('message.vision') !!}</p>
                                                    
                                                </div>
                                                <div class="rs-services-tab-content wow fadeInRight" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <h3 class="rs-services-tab-title" style="color: #db4052">{!! __('message.title_mision') !!}</h3>
                                                    <p>{!! __('message.mision') !!}</p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-item-two" role="tabpanel" aria-labelledby="pills-item-two-tab" tabindex="0">
                                    <div class="rs-services-tab-content-wrapper p-relative">
                                        <div class="row g-5">
                                          
                                        <!-- work process style 04 -->
                                        <section class="rs-elements-work-process-area section-space-bottom rs-work-step-two rs-services-nine has-theme-orange-two">
                                            <div class="container">
                                                <div class="row  g-5 justify-content-center section-title-space align-items-center">
                                                    <div class="col-xxl-8 col-xl-9 col-lg-9">
                                                        <div class="rs-section-title-wrapper text-center">
                                                            {{-- <h4 class="rs-section-title rs-split-text-enable split-in-fade" style="color: #db4052">{!! __('message.title_history') !!}</h4> --}}
                                                            <h4 class="rs-section-title " style="color: #db4052">{!! __('message.title_history') !!}</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="row">
                                                <div class="col-xl-10 col-lg-10">
                                                    <div class="rs-work-process-content-wrapper">
                                                        <div class="rs-work-step-wrapper">
                                                            <div class="rs-work-step-item wow slideInRight" data-wow-delay=".3s" data-wow-duration="1s">
                                                                <span class="rs-work-step-photo rs-postbox-thumb">
                                                                    <a href="{{ asset('assets/images/milestone/2006-2008.jpg')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                                                                        <img src="{{ asset('assets/images/milestone/2006-2008.jpg')}}" alt="image">
                                                                    </a>
                                                                    {{-- <img src="{{ asset('assets/images/milestone/2006-2008.jpg')}}" alt="image"> --}}
                                                                </span>
                                                                <div class="rs-why-choose-content">
                                                                    <h5 class="rs-work-step-title">2006-2008</h5>
                                                                    <p>
                                                                        {!! __('message.history_1') !!}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="rs-work-step-item wow slideInRight" data-wow-delay=".5s" data-wow-duration="1s">
                                                                <span class="rs-work-step-photo rs-postbox-thumb">
                                                                    {{-- <img src="{{ asset('assets/images/milestone/2009-2010.jpg')}}" alt="image"> --}}
                                                                    <a href="{{ asset('assets/images/milestone/2009-2010.jpg')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                                                                        <img src="{{ asset('assets/images/milestone/2009-2010.jpg')}}" alt="image">
                                                                    </a>
                                                                </span>
                                                                <div class="rs-why-choose-content">
                                                                    <h5 class="rs-work-step-title">2009-2010</h5>
                                                                    <p>{!! __('message.history_2') !!}</p>
                                                                </div>
                                                            </div>
                                                            <div class="rs-work-step-item wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                                                <span class="rs-work-step-photo rs-postbox-thumb">
                                                                    {{-- <img src="{{ asset('assets/images/milestone/2011-2012.jpg')}}" alt="image"> --}}
                                                                    <a href="{{ asset('assets/images/milestone/2011-2012.jpg')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                                                                        <img src="{{ asset('assets/images/milestone/2011-2012.jpg')}}" alt="image">
                                                                    </a>
                                                                </span>
                                                                <div class="rs-why-choose-content">
                                                                    <h5 class="rs-work-step-title">2011-2012</h5>
                                                                    <p>{!! __('message.history_3') !!}</p>
                                                                </div>
                                                            </div>
                                                            <div class="rs-work-step-item wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s">
                                                                <span class="rs-work-step-photo rs-postbox-thumb">
                                                                    {{-- <img src="{{ asset('assets/images/milestone/2013-2014.jpg')}}" alt="image"> --}}
                                                                    <a href="{{ asset('assets/images/milestone/2013-2014.jpg')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                                                                        <img src="{{ asset('assets/images/milestone/2013-2014.jpg')}}" alt="image">
                                                                    </a>
                                                                </span>
                                                                <div class="rs-why-choose-content">
                                                                    <h5 class="rs-work-step-title">2013-2014</h5>
                                                                    <p>{!! __('message.history_4') !!}</p>
                                                                </div>
                                                             
                                                            </div>
                                                            <div class="rs-work-step-item wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s">
                                                                <span class="rs-work-step-photo rs-postbox-thumb">
                                                                    <a href="{{ asset('assets/images/milestone/2011-2012.jpg')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                                                                        <img src="{{ asset('assets/images/milestone/2011-2012.jpg')}}" alt="image">
                                                                    </a>
                                                                    {{-- <img src="{{ asset('assets/images/milestone/2011-2012.jpg')}}" alt="image"> --}}
                                                                </span>
                                                                <div class="rs-why-choose-content">
                                                                    <h5 class="rs-work-step-title">2015-2016</h5>
                                                                    <p>{!! __('message.history_5') !!}</p>
                                                                   
                                                                </div>
                                                                {{-- <div class="rs-work-step-descrip">
                                                                </div> --}}
                                                            </div>
                                                            <div class="rs-work-step-item wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s">
                                                                <span class="rs-work-step-photo rs-postbox-thumb">
                                                                    {{-- <img src="{{ asset('assets/images/milestone/2017.jpg')}}" alt="image"> --}}
                                                                    <a href="{{ asset('assets/images/milestone/2017.jpg')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                                                                        <img src="{{ asset('assets/images/milestone/2017.jpg')}}" alt="image">
                                                                    </a>
                                                                </span>
                                                                
                                                                <div class="rs-work-step-descrip">
                                                                    <div class="rs-why-choose-content">
                                                                        <h5 class="rs-work-step-title">2017</h5>
                                                                        <p>
                                                                            {!! __('message.history_6') !!}
                                                                        </p>
                                                                    </div>
                                                                    
                                                                </div>
                                                                {{-- <div class="rs-services-item">
                                                                    <div class="rs-services-thumb">
                                                                        <img src="{{ asset('assets/images/milestone/2017.jpg')}}" alt="image">
                                                                    </div>
                                                                    <div class="rs-services-content">
                                                                        <span class="rs-year">2017</span>
                                                                        <h5 class="rs-services-title"></h5>
                                                                        <div class="rs-services-descrip">
                                                                            <p> {!! __('message.history_6') !!}</p>
                                                                        </div>
                                                                    </div>
                                                                </div> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </section>
                                        <!-- work process style 04 -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-item-three" role="tabpanel" aria-labelledby="pills-item-three-tab" tabindex="0">
                                    <div class="rs-services-tab-content-wrapper p-relative">
                                        <div class="row g-5">
                                            <div class="col-xl-7 col-lg-7">
                                                <div class="rs-portfolio-item">
                                                    <div class="rs-portfolio-thumb wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                                        <a href="{{ asset('assets/images/management.jpg')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                                                            <img src="{{ asset('assets/images/management.jpg')}}" alt="image">
                                                        </a>
                                                    </div>
                                                    <div class="rs-portfolio-content">
                                                        <h5 class="rs-portfolio-title underline has-white">
                                                            <a> {{ __('message.view') }}</a>
                                                        </h5>
                                                    </div>
                                                    <div class="rs-portfolio-btn">
                                                        <a class="rs-btn has-theme-light-green has-circle has-icon" href="{{ asset('assets/images/management.jpg')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
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
                                                {{-- <div class="rs-services-tab-content-thumb wow slideInLeft" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <img src="{{ asset('assets/images/management.jpg')}}" alt="image">
                                                </div> --}}
                                            </div>
                                            <div class="col-xl-5 col-lg-5">
                                                <div class="rs-services-tab-content wow slideInRight" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <h3 class="rs-services-tab-title" style="color: #db4052">{!! __('message.sec_management') !!}
                                                    </h3>
                                                    <p>{!! __('message.sec_1') !!}</p>
                                                  
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
        gallery: '.rs-portfolio-btn, .rs-work-step-photo',
        children: 'a',
        pswpModule: () => import('https://unpkg.com/photoswipe@5/dist/photoswipe.esm.min.js')
    });
    
    lightbox.init();
    </script>
@endsection