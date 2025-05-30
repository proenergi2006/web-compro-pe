@extends('company.layout.main')

@section('css')
<link rel="stylesheet" href="https://unpkg.com/photoswipe@5/dist/photoswipe.css">

<style>
.timeline {
  position: relative;
}

.timeline::before {
  content: '';
  background: #e9d2c5;
  width: 5px;
  height: 95%;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
}

.timeline-item {
  width: 100%;
  margin-bottom: 70px;
}

.timeline-item::after {
  content: '';
  display: block;
  clear: both;
}

.timeline-item:nth-child(even) .timeline-content {
  float: right;
  padding: 40px 30px 10px 30px;
}

.timeline-item:nth-child(even) .timeline-content .date {
  right: auto;
  left: 0;
}

.timeline-item:nth-child(even) .timeline-content::after {
  content: '';
  position: absolute;
  border-style: solid;
  width: 0;
  height: 0;
  top: 30px;
  left: -15px;
  border-width: 10px 15px 10px 0;
  border-color: transparent #f5f5f5 transparent transparent;
}

.timeline-content {
  position: relative;
  width: 45%;
  padding: 10px 30px;
  border-radius: 4px;
  background: #f5f5f5;
  box-shadow: 0 20px 25px -15px rgba(0, 0, 0, 0.3);
}

.timeline-content::after {
  content: '';
  position: absolute;
  border-style: solid;
  width: 0;
  height: 0;
  top: 30px;
  right: -15px;
  border-width: 10px 0 10px 15px;
  border-color: transparent transparent transparent #f5f5f5;
}

.timeline-img {
  width: 30px;
  height: 30px;
  background: #fd7e14; /* $primary */
  border-radius: 50%;
  position: absolute;
  left: 50%;
  margin-top: 25px;
  margin-left: -15px;
}

.timeline-card {
  padding: 0 !important;
}

.timeline-card p {
  padding: 0 20px;
}

.timeline-card a {
  margin-left: 20px;
}

.timeline-item .timeline-img-header {
  background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.4)),
    url('https://picsum.photos/1000/800/?random') center center no-repeat;
  background-size: cover;
}

.timeline-img-header {
  height: 200px;
  position: relative;
  margin-bottom: 20px;
}

.timeline-img-header h2 {
  color: #ffffff;
  position: absolute;
  bottom: 5px;
  left: 20px;
}

blockquote {
  margin-top: 30px;
  color: #757575;
  border-left: 5px solid #3f51b5;
  padding: 0 20px;
}

.date {
  background: #ff4081;
  display: inline-block;
  color: #ffffff;
  padding: 10px;
  position: absolute;
  top: 0;
  right: 0;
}
/* .timeline-side-image {
  position: relative;
  top: 0;
  left: calc(50% + 40px); 
  width: 200px;
  max-width: 90%;
}

.timeline-side-image img {
  width: 100%;
  border-radius: 8px;
  box-shadow: 0 10px 15px -5px rgba(0, 0, 0, 0.2);
}
.timeline-item:nth-child(even) .timeline-side-image {
  left: auto;
  right: calc(50% + 40px); 
} */

/* Responsive */
@media screen and (max-width: 768px) {
  .timeline::before {
    left: 50px;
  }

  .timeline .timeline-img {
    left: 50px;
  }

  .timeline .timeline-content {
    max-width: 100%;
    width: auto;
    margin-left: 70px;
  }

  .timeline .timeline-item:nth-child(even) .timeline-content {
    float: none;
  }

  .timeline .timeline-item:nth-child(odd) .timeline-content::after {
    content: '';
    position: absolute;
    border-style: solid;
    width: 0;
    height: 0;
    top: 30px;
    left: -15px;
    border-width: 10px 15px 10px 0;
    border-color: transparent #f5f5f5 transparent transparent;
  }
  /* .timeline-side-image {
    position: static;
    width: 100%;
    margin-top: 15px;
  }

  .timeline-item {
    display: flex;
    flex-direction: column;
  } */
}

	
</style>
@endsection

@section('content')
    <!-- breadcrumb area start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative">
        <div class="rs-breadcrumb-bg" data-background="{{ asset('assets/images/pe-bg/about_us_hi_rev2.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="rs-breadcrumb-content-wrapper">
                    <div class="rs-breadcrumb-title-wrapper text-center">
                        <h2 class="text-white radius-10" style="background: #EA5501;display: inline-block;padding: 10px 40px;">{!! __('message.title_about') !!}</h2>
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
                                        <div class="row  g-5 justify-content-center section-title-space align-items-center">
                                                    <div class="col-xxl-8 col-xl-9 col-lg-9">
                                                        <div class="rs-section-title-wrapper text-center">
                                                            {{-- <h4 class="rs-section-title rs-split-text-enable split-in-fade" style="color: #db4052">{!! __('message.title_history') !!}</h4> --}}
                                                            <h4 class="rs-section-title " style="color: #db4052">{!! __('message.title_history') !!}</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                        <div class="row g-5">
                                        <section class="timeline">
                                            <div class="container">
                                                

                                                <!-- ITEM 1 -->
                                                <div class="timeline-item">
                                                <div class="timeline-img"></div>
                                                <div class="timeline-content js--fadeInLeft">
                                                    <a href="{{ asset('assets/images/milestone/2006-2008.jpg')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                                                    <img src="{{ asset('assets/images/milestone/2006-2008.jpg')}}" alt="image" />
                                                    </a>
                                                  
                                                    <h5>2006-2008</h5>
                                                    <p>{!! __('message.history_1') !!}</p>
                                                </div>
                                               
                                                </div>

                                                <!-- ITEM 2 -->
                                                <div class="timeline-item">
                                                <div class="timeline-img"></div>
                                                <div class="timeline-content js--fadeInRight">
                                                    <a href="{{ asset('assets/images/milestone/2009-2010.jpg')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                                                        <img src="{{ asset('assets/images/milestone/2009-2010.jpg')}}" alt="image" />
                                                    </a>
                                                    <h5>2009-2010</h5>
                                                    <p>{!! __('message.history_2') !!}</p>
                                                </div>
                                             
                                                </div>

                                                <!-- ITEM 3 -->
                                                <div class="timeline-item">
                                                <div class="timeline-img"></div>
                                                <div class="timeline-content js--fadeInLeft">
                                                     <a href="{{ asset('assets/images/milestone/2011-2012.jpg')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                                                         <img src="{{ asset('assets/images/milestone/2011-2012.jpg')}}" alt="image" />
                                                    </a>
                                                    <h5>2011-2012</h5>
                                                    <p>{!! __('message.history_3') !!}</p>
                                                </div>
                                                </div>

                                                <!-- ITEM 4 -->
                                                <div class="timeline-item">
                                                <div class="timeline-img"></div>
                                                <div class="timeline-content js--fadeInRight">
                                                    <a href="{{ asset('assets/images/milestone/2013-2014.jpg')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                                                        <img src="{{ asset('assets/images/milestone/2013-2014.jpg')}}" alt="image" />
                                                    </a>
                                                    <h5>2013-2014</h5>
                                                    <p>{!! __('message.history_4') !!}</p>
                                                </div>
                                                </div>

                                                <!-- ITEM 5 -->
                                                <div class="timeline-item">
                                                <div class="timeline-img"></div>
                                                <div class="timeline-content js--fadeInLeft">
                                                    <a href="{{ asset('assets/images/milestone/2011-2012.jpg')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                                                        <img src="{{ asset('assets/images/milestone/2011-2012.jpg')}}" alt="image" />
                                                    </a>
                                                    <h5>2015-2016</h5>
                                                    <p>{!! __('message.history_5') !!}</p>
                                                </div>
                                                </div>

                                                <!-- ITEM 6 -->
                                                <div class="timeline-item">
                                                <div class="timeline-img"></div>
                                                <div class="timeline-content js--fadeInRight">
                                                    <a href="{{ asset('assets/images/milestone/2017.jpg')}}" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                                                    <img src="{{ asset('assets/images/milestone/2017.jpg')}}" alt="image" />
                                                    </a>
                                                    <h5>2017</h5>
                                                    <p>{!! __('message.history_6') !!}</p>
                                                </div>
                                                </div>

                                            </div>
                                            </section>

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
<script src="https://cdn.jsdelivr.net/scrollreveal.js/3.3.1/scrollreveal.min.js"></script>
<script type="module">
    import PhotoSwipeLightbox from 'https://unpkg.com/photoswipe@5/dist/photoswipe-lightbox.esm.min.js';
    
    const lightbox = new PhotoSwipeLightbox({
        gallery: '.rs-portfolio-btn, .rs-work-step-photo, .timeline-side-image',
        children: 'a',
        pswpModule: () => import('https://unpkg.com/photoswipe@5/dist/photoswipe.esm.min.js')
    });
    
    lightbox.init();
    </script>

     <script>
        $(function(){

  window.sr = ScrollReveal();

  if ($(window).width() < 768) {

  	if ($('.timeline-content').hasClass('js--fadeInLeft')) {
  		$('.timeline-content').removeClass('js--fadeInLeft').addClass('js--fadeInRight');
  	}

  	sr.reveal('.js--fadeInRight', {
	    origin: 'right',
	    distance: '300px',
	    easing: 'ease-in-out',
	    duration: 800,
	  });

  } else {
  	
  	sr.reveal('.js--fadeInLeft', {
	    origin: 'left',
	    distance: '300px',
		  easing: 'ease-in-out',
	    duration: 800,
	  });

	  sr.reveal('.js--fadeInRight', {
	    origin: 'right',
	    distance: '300px',
	    easing: 'ease-in-out',
	    duration: 800,
	  });

  }
  
  sr.reveal('.js--fadeInLeft', {
	    origin: 'left',
	    distance: '300px',
		  easing: 'ease-in-out',
	    duration: 800,
	  });

	  sr.reveal('.js--fadeInRight', {
	    origin: 'right',
	    distance: '300px',
	    easing: 'ease-in-out',
	    duration: 800,
	  });


});

</script>
@endsection