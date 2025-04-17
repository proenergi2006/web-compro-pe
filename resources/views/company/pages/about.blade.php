@extends('company.layout.main')

@section('content')
    <!-- breadcrumb area start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative">
        <div class="rs-breadcrumb-bg" data-background="{{ asset('assets/images/pe-bg/about_us_hi_rev2.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="rs-breadcrumb-content-wrapper">
                    <div class="rs-breadcrumb-title-wrapper text-center">
                        <h1 class="rs-breadcrumb-title" style="background: #db4052;display: inline-block;font-size:3em;padding: 14px 50px;">About Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- services area start -->
        <section class="rs-services-area section-space rs-services-one primary-bg p-relative">
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
                                        OVERVIEW <span class="rs-services-icon"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewBox="0 0 18 12"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                       d="M0 6C0 5.66249 0.273604 5.38889 0.611111 5.38889L15.0246 5.38889L11.179 1.54323C10.9403 1.30458 10.9403 0.917645 11.179 0.678991C11.4176 0.440337 11.8046 0.440337 12.0432 0.678991L16.9321 5.56788C17.1708 5.80653 17.1708 6.19347 16.9321 6.43212L12.0432 11.321C11.8046 11.5597 11.4176 11.5597 11.179 11.321C10.9403 11.0824 10.9403 10.6954 11.179 10.4568L15.0246 6.61111L0.611111 6.61111C0.273604 6.61111 0 6.33751 0 6Z"
                                       fill="white"></path>
                                 </svg></span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-item-two-tab" data-bs-toggle="pill" data-bs-target="#pills-item-two" type="button" role="tab" aria-controls="pills-item-two" aria-selected="false"> MILESTONE <span class="rs-services-icon"><svg
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
                                        MANAGEMENT<span class="rs-services-icon"><svg xmlns="http://www.w3.org/2000/svg"
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
                                                    <p class="rs-services-tab-word ">PT Pro Energi is a fuel provider company established in 2006 and head quartered in Jakarta. 
                                                        Pro Energi is a growing company that continuously moving forward to become a superior commercial fuel provider 
                                                        that constantly meeting its customers' needs, especially for the segment of manufacturing, mining, commercial, plantation, 
                                                        transportation, construction, also marine and fisheries.
                                                    </br>
                                                        Being professionally managed and customer satisfaction oriented, PT Pro Energi keeps doing 
                                                        Its best to achieve our ultimate goal to become the leading commercial fuel provider in Indonesia.
                                                    </p>
                                                </div>
                                                {{-- <div id="slider" class="nivoSlider"> 
                                                    <img src="{{ asset('assets/images/about/MG_4899.jpg')}}" data-thumb="images/toystory.jpg" alt="" /> 
                                                    <img src="{{ asset('assets/images/about/MG_4889-copy.jpg')}}" data-thumb="images/up.jpg" alt="" title="This is an example of a caption" />
                                                    <img src="{{ asset('assets/images/about/MG_4882-copy_revisi.jpg')}}" data-thumb="images/walle.jpg" alt="" data-transition="slideInLeft" /> 
                                                    <img src="{{ asset('assets/images/about/MG_3081.jpg')}}" data-thumb="images/nemo.jpg" alt="" title="#htmlcaption" /> 
                                                </div> --}}
                                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                      <div class="carousel-item active">
                                                        <img class="d-block w-100" src="..." alt="First slide">
                                                      </div>
                                                      <div class="carousel-item">
                                                        <img class="d-block w-100" src="..." alt="Second slide">
                                                      </div>
                                                      <div class="carousel-item">
                                                        <img class="d-block w-100" src="..." alt="Third slide">
                                                      </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                      <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                      <span class="sr-only">Next</span>
                                                    </a>
                                                  </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-5">
                                                <div class="rs-services-tab-content wow fadeInRight" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <h3 class="rs-services-tab-title" style="color: #db4052">VISION</h3>
                                                    <p>To be one of the leading fuel and energy providers in Indonesia with world class management and customer service.</p>
                                                    
                                                </div>
                                                <div class="rs-services-tab-content wow fadeInRight" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <h3 class="rs-services-tab-title" style="color: #db4052">MISSION</h3>
                                                    <p>To be fully committed in providing the best service to meet our customers’ needs by continuously promote improvement and innovation, develop excellent internal or external relationship, and to provide secure and convenient workplace for employees for the sustainable growth of the company.</p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-item-two" role="tabpanel" aria-labelledby="pills-item-two-tab" tabindex="0">
                                    <div class="rs-services-tab-content-wrapper p-relative">
                                        <div class="row g-5">
                                          
                                        <!-- work process style 04 -->
                                        <section class="rs-elements-work-process-area section-space-bottom rs-work-step-two has-theme-orange-two">
                                            <div class="container">
                                                <div class="row  g-5 justify-content-center section-title-space align-items-center">
                                                    <div class="col-xxl-8 col-xl-9 col-lg-9">
                                                        <div class="rs-section-title-wrapper text-center">
                                                            <h4 class="rs-section-title rs-split-text-enable split-in-fade" style="color: #db4052">HISTORY/MILESTONE</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="row">
                                                <div class="col-xl-10 col-lg-10">
                                                    <div class="rs-work-process-content-wrapper">
                                                        <div class="rs-work-step-wrapper">
                                                            <div class="rs-work-step-item wow slideInRight" data-wow-delay=".3s" data-wow-duration="1s">
                                                                <span class="rs-work-step-number">01</span>
                                                                <h5 class="rs-work-step-title">2006-2008</h5>
                                                                <div class="rs-work-step-descrip">
                                                                    <p>
                                                                        Pro Energi starts operation based in Jakarta and strengthened its fleet by MT. Birdie
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="rs-work-step-item wow slideInRight" data-wow-delay=".5s" data-wow-duration="1s">
                                                                <span class="rs-work-step-number">02</span>
                                                                <h5 class="rs-work-step-title">2009-2010</h5>
                                                                <div class="rs-work-step-descrip">
                                                                    <p>Pro Energi is registered as general commercial trader (INU) and opened Surabaya and Samarinda branches</p>
                                                                </div>
                                                            </div>
                                                            <div class="rs-work-step-item wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                                                <span class="rs-work-step-number">03</span>
                                                                <h5 class="rs-work-step-title">2011-2012</h5>
                                                                <div class="rs-work-step-descrip">
                                                                    <p>Pro Energi collaborates with MIT (Massachusetts Institute of Technology)</p>
                                                                </div>
                                                            </div>
                                                            <div class="rs-work-step-item wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s">
                                                                <span class="rs-work-step-number">04</span>
                                                                <h5 class="rs-work-step-title">2013-2014</h5>
                                                                <div class="rs-work-step-descrip">
                                                                    <p>Pro Energi opened Palembang branch and signed contract to JXTG Nippon Oil & Energy as shareholder</p>
                                                                </div>
                                                            </div>
                                                            <div class="rs-work-step-item wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s">
                                                                <span class="rs-work-step-number">04</span>
                                                                <h5 class="rs-work-step-title">2015-2016</h5>
                                                                <div class="rs-work-step-descrip">
                                                                    <p>Pro Energi opened Pontianak branch and improved its fleet with the newest technology and design</p>
                                                                </div>
                                                            </div>
                                                            <div class="rs-work-step-item wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s">
                                                                <span class="rs-work-step-number">04</span>
                                                                <h5 class="rs-work-step-title">2017</h5>
                                                                <div class="rs-work-step-descrip">
                                                                    <p>
                                                                        Pro Energi provides >1,000 liters needs with Pro Energi retail truck and had an additional products such as <i> Marine Fuel Oil </i>(MFO) and <i>Lubricant</i>
                                                                    </p>
                                                                </div>
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
                                                <div class="rs-services-tab-content-thumb">
                                                    <img src="{{ asset('assets/images/management.jpg')}}" alt="image">
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-5">
                                                <div class="rs-services-tab-content">
                                                    <h3 class="rs-services-tab-title" style="color: #db4052">OUR SERVICE PEOPLE
                                                    </h3>
                                                    <p>We can serve you with the best services</p>
                                                  
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
