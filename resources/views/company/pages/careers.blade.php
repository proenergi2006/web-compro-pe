@extends('company.layout.main')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <style>
        .testimonial-carousel .swiper-slide {
        transition: transform 0.5s ease, opacity 0.5s ease;
        transform: scale(0.8);
        opacity: 0.4;
        }

        .testimonial-carousel .swiper-slide-active {
        transform: scale(1);
        opacity: 1;
        }

        .testimonial-carousel .swiper-slide-active .card {
        transform: scale(1);
        opacity: 1;
        background: rgb(255, 118, 32);
        color: white;
        }
        .card {
        background: white;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        text-align: center;
        transition: background 0.4s ease;
        }

        .avatar {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        margin-bottom: 15px;
        margin: 0 auto 15px;
        }

 

    .popup-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.6);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      padding: 10px;
      animation: fadeIn 0.5s ease-in-out;
    }

    .popup {
      background: #fff;
      width: 100%;
      max-width: 900px;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(0,0,0,0.3);
      position: relative;
      animation: slideIn 0.6s ease;
      box-sizing: border-box;
    }

    .popup h2 {
      margin-top: 0;
      font-size: 22px;
      color: #c00;
      text-align: center;
    }

    .popup-content {
      display: flex;
      gap: 20px;
      flex-direction: row;
      flex-wrap: wrap;
    }

    .popup-column {
      flex: 1;
      min-width: 250px;
      font-size: 14px;
      color: #333;
      line-height: 1.6;
      box-sizing: border-box;
    }

    .popup-column ul {
      padding-left: 20px;
    }

    .popup button {
      position: absolute;
      top: 10px;
      right: 10px;
      background: #c00;
      color: #fff;
      border: none;
      padding: 5px 10px;
      cursor: pointer;
      border-radius: 4px;
    }

    @keyframes slideIn {
      from {
        transform: translateY(-30px);
        opacity: 0;
      }
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    /* Responsive for small screens */
    @media (max-width: 768px) {
      .popup-content {
        flex-direction: column;
      }

      .popup {
        padding: 20px;
      }

      .popup h2 {
        font-size: 18px;
      }
    }

    @media (max-width: 480px) {
      .popup button {
        top: 5px;
        right: 5px;
        padding: 4px 8px;
        font-size: 12px;
      }

      .popup-column {
        font-size: 13px;
      }
    }
    </style>
@endsection
@section('content')
    <!-- breadcrumb area start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative">
        <div class="rs-breadcrumb-bg" data-background="{{ asset('assets/images/pe-bg/career_hi_rev.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="rs-breadcrumb-content-wrapper">
                    <div class="rs-breadcrumb-title-wrapper text-center">
                        <h2 class="text-white radius-10 mb-3" style="background: #EA5501;display: inline-block;padding: 10px 40px;">  {!! __('message.title_career') !!}</h2>
                       <div>
                            <h4 class="text-white radius-4" style="background: #194494b9;display: inline-block;padding: 10px 40px;">Home for Dynamic People</h4>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="rs-postbox-area section-space-bottom">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-12 col-lg-12">
                    <div class="rs-postbox-details-wrapper">
                        <div class="rs-postbox-content rs-split-text-enable split-in-fade">
                            <h3 class="rs-postbox-details-title wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
                                {!! __('message.sub') !!}
                            </h3>
                        </div>
                        <div class="rs-postbox-details-content">
                            <p class="wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s" style="white-space: pre-line;font-size:18px">  {!! __('message.content_career') !!}</p>
                                <h6 class="wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">   {!! __('message.ol') !!}</h6>
                                <ol type="1"  class="wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
                                    <li>   {!! __('message.li_1') !!}</li>
                                    <li>   {!! __('message.li_2') !!}</li>
                                    <li>   {!! __('message.li_3') !!}</li>
                                </ol>
                               
                        </div>
                       
                    </div>
                </div>
               
            </div>
        </div>
    </section> --}}

    {{-- <section class="primary-bg section-space">
        <div class="row  g-5 justify-content-center section-title-space align-items-center">
                <div class="col-xxl-8 col-xl-9 col-lg-9">
                    <div class="rs-section-title-wrapper text-center">
                        <span class="rs-section-subtitle has-theme-orange rs-split-text-enable split-in-fade" style="font-size: 3rem">
                            {{__('message.said')}}
                        </span>
                    </div>
                </div>
            </div>
        <div class="swiper-container testimonial-carousel">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="card">
                    <img src="avatar1.jpg" class="avatar" />
                    <p>"Testimoni 1: Layanan sangat luar biasa!"</p>
                    <h4>John Doe</h4>
                    <span>CEO - ABC Corp</span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <img src="avatar2.jpg" class="avatar" />
                    <p>"Testimoni 2: Sangat puas dengan hasilnya!"</p>
                    <h4>Jane Smith</h4>
                    <span>Marketing Manager</span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <img src="avatar2.jpg" class="avatar" />
                    <p>"Testimoni 3: Sangat puas dengan hasilnya!"</p>
                    <h4>Test User</h4>
                    <span>Marketing</span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <img src="avatar2.jpg" class="avatar" />
                    <p>"Testimoni 3: Sangat puas dengan hasilnya!"</p>
                    <h4>Test User</h4>
                    <span>Marketing</span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <img src="avatar2.jpg" class="avatar" />
                    <p>"Testimoni 3: Sangat puas dengan hasilnya!"</p>
                    <h4>Test User</h4>
                    <span>Marketing</span>
                </div>
            </div>
            <!-- Tambah slide lainnya -->
        </div>
        </div>
    </section> --}}

    <section class="rs-elements-testimonial-area section-space rs-testimonial-four rs-swiper primary-bg">
        <div class="container has-large">
             <div class="row  g-5 justify-content-center section-title-space align-items-center">
                <div class="col-xxl-8 col-xl-9 col-lg-9">
                    <div class="rs-section-title-wrapper text-center">
                        <span class="rs-section-subtitle has-theme-orange rs-split-text-enable split-in-fade" style="font-size: 3rem">
                            {{__('message.said')}}
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="rs-testimonial-slider-wrapper">
                    <div class="swiper" data-clone-slides="false" data-pagination="false" data-loop="true" data-speed="1500" data-autoplay="false" data-dots-dynamic="false" data-center-mode="true" data-hover-pause="true" data-effect="false" data-delay="1500" data-item="3" data-item-xl="3" data-item-lg="3" data-item-md="2" data-item-sm="1" data-item-xs="1" data-item-mobile="1" data-margin="30" data-margin-xl="30" data-margin-lg="30" data-margin-md="30" data-margin-sm="30" data-margin-xs="30" data-margin-mobile="30">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="rs-testimonial-item">
                                    <div class="rs-testimonial-quote">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="96" height="39" viewBox="0 0 96 39" fill="none">
                                            <g opacity="0.06">
                                                <path d="M0 29.2815H21.4286L7.14275 0.190567H28.5713L42.8572 29.2815V72.918H0V29.2815Z" fill="#023B4A"></path>
                                                <path d="M52.8574 72.918V29.2815H74.286L60.0002 0.190567H81.4288L95.7146 29.2815V72.918H52.8574Z" fill="#023B4A"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="rs-testimonial-content">
                                        <div class="rs-testimonial-top">
                                            <div class="rs-testimonial-avater-wrapper">
                                                <div class="rs-testimonial-avater-thumb">
                                                    <img src="assets/images/user/user-thumb-01.png" alt="image">
                                                </div>
                                                <div class="rs-testimonial-avater-info">
                                                    <h5 class="rs-testimonial-title">Best Company!</h5>
                                                    <div class="rs-testimonial-rating">
                                                        <div class="rs-rating">
                                                            <span><i class="ri-star-fill"></i></span>
                                                            <span><i class="ri-star-fill"></i></span>
                                                            <span><i class="ri-star-fill"></i></span>
                                                            <span><i class="ri-star-fill"></i></span>
                                                            <span><i class="ri-star-half-line"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rs-testimonial-description">
                                            <p> Hampden-Sydney College in Virginia, looked up one of the more obscure latin
                                                words consectetur.</p>
                                        </div>
                                        <div class="rs-testimonial-desig-info">
                                            <h6 class="rs-testimonial-avater-title">Abdur Rashid</h6>
                                            <div class="rs-testimonial-separator">/</div>
                                            <span class="rs-testimonial-avater-designation">Founder &amp; CEO</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="rs-testimonial-item">
                                    <div class="rs-testimonial-quote">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="96" height="39" viewBox="0 0 96 39" fill="none">
                                            <g opacity="0.06">
                                                <path d="M0 29.2815H21.4286L7.14275 0.190567H28.5713L42.8572 29.2815V72.918H0V29.2815Z" fill="#023B4A"></path>
                                                <path d="M52.8574 72.918V29.2815H74.286L60.0002 0.190567H81.4288L95.7146 29.2815V72.918H52.8574Z" fill="#023B4A"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="rs-testimonial-content">
                                        <div class="rs-testimonial-top">
                                            <div class="rs-testimonial-avater-wrapper">
                                                <div class="rs-testimonial-avater-thumb">
                                                    <img src="assets/images/user/user-thumb-02.png" alt="image">
                                                </div>
                                                <div class="rs-testimonial-avater-info">
                                                    <h5 class="rs-testimonial-title">Popular Industry! </h5>
                                                    <div class="rs-testimonial-rating">
                                                        <div class="rs-rating">
                                                            <span><i class="ri-star-fill"></i></span>
                                                            <span><i class="ri-star-fill"></i></span>
                                                            <span><i class="ri-star-fill"></i></span>
                                                            <span><i class="ri-star-fill"></i></span>
                                                            <span><i class="ri-star-half-line"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rs-testimonial-description">
                                            <p> Hampden-Sydney College in Virginia, looked up one of the more obscure latin
                                                words consectetur.</p>
                                        </div>
                                        <div class="rs-testimonial-desig-info">
                                            <h6 class="rs-testimonial-avater-title">Christopher</h6>
                                            <div class="rs-testimonial-separator">/</div>
                                            <span class="rs-testimonial-avater-designation">Engineer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="rs-testimonial-item">
                                    <div class="rs-testimonial-quote">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="96" height="39" viewBox="0 0 96 39" fill="none">
                                            <g opacity="0.06">
                                                <path d="M0 29.2815H21.4286L7.14275 0.190567H28.5713L42.8572 29.2815V72.918H0V29.2815Z" fill="#023B4A"></path>
                                                <path d="M52.8574 72.918V29.2815H74.286L60.0002 0.190567H81.4288L95.7146 29.2815V72.918H52.8574Z" fill="#023B4A"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="rs-testimonial-content">
                                        <div class="rs-testimonial-top">
                                            <div class="rs-testimonial-avater-wrapper">
                                                <div class="rs-testimonial-avater-thumb">
                                                    <img src="assets/images/user/user-thumb-03.png" alt="image">
                                                </div>
                                                <div class="rs-testimonial-avater-info">
                                                    <h5 class="rs-testimonial-title">Best Company!</h5>
                                                    <div class="rs-testimonial-rating">
                                                        <div class="rs-rating">
                                                            <span><i class="ri-star-fill"></i></span>
                                                            <span><i class="ri-star-fill"></i></span>
                                                            <span><i class="ri-star-fill"></i></span>
                                                            <span><i class="ri-star-fill"></i></span>
                                                            <span><i class="ri-star-half-line"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rs-testimonial-description">
                                            <p> Hampden-Sydney College in Virginia, looked up one of the more obscure latin
                                                words consectetur.</p>
                                        </div>
                                        <div class="rs-testimonial-desig-info">
                                            <h6 class="rs-testimonial-avater-title">Nayeem</h6>
                                            <div class="rs-testimonial-separator">/</div>
                                            <span class="rs-testimonial-avater-designation">Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="rs-testimonial-item">
                                    <div class="rs-testimonial-quote">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="96" height="39" viewBox="0 0 96 39" fill="none">
                                            <g opacity="0.06">
                                                <path d="M0 29.2815H21.4286L7.14275 0.190567H28.5713L42.8572 29.2815V72.918H0V29.2815Z" fill="#023B4A"></path>
                                                <path d="M52.8574 72.918V29.2815H74.286L60.0002 0.190567H81.4288L95.7146 29.2815V72.918H52.8574Z" fill="#023B4A"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="rs-testimonial-content">
                                        <div class="rs-testimonial-top">
                                            <div class="rs-testimonial-avater-wrapper">
                                                <div class="rs-testimonial-avater-thumb">
                                                    <img src="assets/images/user/user-thumb-04.png" alt="image">
                                                </div>
                                                <div class="rs-testimonial-avater-info">
                                                    <h5 class="rs-testimonial-title">Best Company!</h5>
                                                    <div class="rs-testimonial-rating">
                                                        <div class="rs-rating">
                                                            <span><i class="ri-star-fill"></i></span>
                                                            <span><i class="ri-star-fill"></i></span>
                                                            <span><i class="ri-star-fill"></i></span>
                                                            <span><i class="ri-star-fill"></i></span>
                                                            <span><i class="ri-star-half-line"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rs-testimonial-description">
                                            <p> Hampden-Sydney College in Virginia, looked up one of the more obscure latin
                                                words consectetur.</p>
                                        </div>
                                        <div class="rs-testimonial-desig-info">
                                            <h6 class="rs-testimonial-avater-title">Joshua Pul</h6>
                                            <div class="rs-testimonial-separator">/</div>
                                            <span class="rs-testimonial-avater-designation">CEO Industry</span>
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

 <section class="rs-postbox-area section-space">
    <div class="container gap-3">
       <div class="row g-5 justify-content-center section-title-space align-items-center">
            <div class="col-xxl-8 col-xl-9 col-lg-9">
                <div class="rs-section-title-wrapper text-center">
                    <span class="rs-section-subtitle has-theme-orange rs-split-text-enable split-in-fade" style="font-size: 3rem">
                       Activities
                    </span>
                </div>
            </div>
        </div>

        <div class="rs-postbox-details-thumb-wrapper mb-30">
            <div class="carousel1 owl-carousel owl-theme">
                <div class="item">
                    <div class="rs-postbox-details-thumb">
                        <img src="{{ asset('assets/images/blog/details/blog-details-02.png') }}" alt="image">
                    </div>
                </div>
                <div class="item">
                    <div class="rs-postbox-details-thumb">
                        <img src="{{ asset('assets/images/blog/details/blog-details-03.png') }}" alt="image">
                    </div>
                </div>
                <div class="item">
                    <div class="rs-postbox-details-thumb">
                        <img src="{{ asset('assets/images/blog/details/blog-details-03.png') }}" alt="image">
                    </div>
                </div>
                <div class="item">
                    <div class="rs-postbox-details-thumb">
                        <img src="{{ asset('assets/images/blog/details/blog-details-03.png') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <div class="rs-postbox-details-thumb-wrapper mb-30">
            <div class="carousel2 owl-carousel owl-theme">
                <div class="item">
                    <div class="rs-postbox-details-thumb">
                        <img src="{{ asset('assets/images/blog/details/blog-details-02.png') }}" alt="image">
                    </div>
                </div>
                <div class="item">
                    <div class="rs-postbox-details-thumb">
                        <img src="{{ asset('assets/images/blog/details/blog-details-03.png') }}" alt="image">
                    </div>
                </div>
                <div class="item">
                    <div class="rs-postbox-details-thumb">
                        <img src="{{ asset('assets/images/blog/details/blog-details-03.png') }}" alt="image">
                    </div>
                </div>
                <div class="item">
                    <div class="rs-postbox-details-thumb">
                        <img src="{{ asset('assets/images/blog/details/blog-details-03.png') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  <!-- services style 03 -->
<section class="rs-elements-services-area section-space-bottom rs-services-six primary-bg">
    <div class="container">
        <div class="row  g-5 justify-content-center section-title-space align-items-center">
            <div class="col-xxl-8 col-xl-9 col-lg-9">
                <div class="rs-section-title-wrapper text-center">
                    <span class="rs-section-subtitle has-theme-orange rs-split-text-enable split-in-fade" style="font-size: 3rem">
                        {{__('message.avail')}}
                    </span>
                </div>
            </div>
        </div>
        <div class="row g-5">
            {{-- <div class="card orange-bg radius-16">
                <div class="card-body">
                    <div class="form-group">
                        <label><strong>Approved :</strong></label>
                        <select id='approved' class="form-control" style="width: 200px">
                            <option value="">Approved</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
            </div> --}}
            <div class="table-responsive">
            <table class="table table-bordered table-responsive">
                <thead>
                    <th>No</th>
                    <th>Position</th>
                    <th>Work Location</th>
                    <th>Experience</th>
                    <th>Closing Date</th>
                    <th>Detail</th>
                </thead>
                <tbody>
                    @forelse ($vacancies as $vacancy)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $vacancy->title }}</td>
                        <td>{{ $vacancy->province->name }}</td>
                        <td>{{ $vacancy->min_year }} years</td>
                        <td>{{ $vacancy->due_date->format('d M Y') }}</td>
                        <td>  <a class="rs-btn3 has-theme-orange has-bg" href="{{ route('web.vacancy.show', $vacancy->slug) }}"> detail
                        </a></td>
                    </tr>
                    @empty
                    <tr><td colspan="6" class="text-center has-theme-red">  <div class="alert alert-secondary text-center">
                        {{ __('message.nocareer')}}
                    </div>
                        </td>
                    </tr>
                    
                    @endforelse

                </tbody>
            </table>
        </div>
        </div>
    </div>
     <div class="col-xl-6">
        <div class="pagination-wrapper mt-40">
            <div class="common-pagination text-start">
                <nav>
                    {{ $vacancies->links('vendor.pagination.custom') }}
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- services style 03 -->


<!-- pagination style end -->
<!-- rs-postbox area end -->

<!-- faq area start -->
<section class="rs-faq-area section-space">
    <div class="container">
        <div class="row  g-5 justify-content-center section-title-space align-items-center">
            <div class="col-xxl-8 col-xl-8 col-lg-9 col-md-10">
                <div class="rs-section-title-wrapper text-center">
                        {{-- <span class="rs-section-subtitle has-theme-orange rs-split-text-enable split-in-fade" style="font-size: 3rem">
                            {{__('message.avail')}}
                        </span> --}}
                    <h4 class="rs-section-title has-theme-orange rs-split-text-enable split-in-fade">{{__('message.faq')}}</h4>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="rs-faq-content rs-accordion-one">
                    <div class="accordion-wrapper">
                        <div class="accordion" id="accordionExampleOne">
                            <div class="rs-accordion-item">
                                <h4 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        {{ __('message.faq_1')}}
                                        <span class="accordion-btn"></span>
                                    </button>
                                </h4>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExampleOne">
                                    <div class="accordion-body">{{ __('message.faq_1_content')}}
                                    </div>
                                </div>
                            </div>
                            <div class="rs-accordion-item">
                                <h6 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        {{ __('message.faq_3')}}
                                        <span class="accordion-btn"></span>
                                    </button>
                                </h6>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExampleOne">
                                    <div class="accordion-body">{{ __('message.faq_2_content')}}</div>
                                </div>
                            </div>
                            <div class="rs-accordion-item">
                                <h6 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        {{ __('message.faq_3')}}
                                        <span class="accordion-btn"></span>
                                    </button>
                                </h6>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExampleOne">
                                    <div class="accordion-body">
                                        {{ __('message.faq_3_content')}}
                                    </div>
                                </div>
                            </div>
                            <div class="rs-accordion-item">
                                <h6 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        {{ __('message.faq_4')}}
                                        <span class="accordion-btn"></span>
                                    </button>
                                </h6>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExampleOne">
                                    <div class="accordion-body">
                                        {!! __('message.faq_4_content') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="rs-accordion-item">
                                <h6 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        {{ __('message.faq_5')}}
                                        <span class="accordion-btn"></span>
                                    </button>
                                </h6>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExampleOne">
                                    <div class="accordion-body">
                                        {{ __('message.faq_5_content')}}
                                    </div>
                                </div>
                            </div>
                            <div class="rs-accordion-item">
                                <h6 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        {{ __('message.faq_6')}}
                                        <span class="accordion-btn"></span>
                                    </button>
                                </h6>
                                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExampleOne">
                                    <div class="accordion-body">
                                        {{ __('message.faq_6_content')}}
                                    </div>
                                </div>
                            </div>
                            <div class="rs-accordion-item">
                                <h6 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        {{ __('message.faq_7')}}
                                        <span class="accordion-btn"></span>
                                    </button>
                                </h6>
                                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExampleOne">
                                    <div class="accordion-body">
                                        {{ __('message.faq_7_content')}}
                                    </div>
                                </div>
                            </div>
                            <div class="rs-accordion-item">
                                <h6 class="accordion-header" id="headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        {{ __('message.faq_8')}}
                                        <span class="accordion-btn"></span>
                                    </button>
                                </h6>
                                <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExampleOne">
                                    <div class="accordion-body">
                                    {{ __('message.faq_8_content')}}
                                    </div>
                                </div>
                            </div>
                            <div class="rs-accordion-item">
                                <h6 class="accordion-header" id="headingNine">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        {{ __('message.faq_9')}}
                                        <span class="accordion-btn"></span>
                                    </button>
                                </h6>
                                <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExampleOne">
                                    <div class="accordion-body">
                                        {{ __('message.faq_9_content')}}
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
<!-- faq area end -->


<div class="popup-overlay" id="popup">
  <div class="popup">
    <button onclick="closePopup()">Tutup</button>
    <h2>Notice on Recruitment Scams / Peringatan Penipuan Rekrutmen</h2>
    <div class="popup-content">

      <!-- English Column -->
      <div class="popup-column">
        <p>
          It has come to our attention that fictitious job offers are being made by individuals, organizations and published in various Internet sites, which claim that they are representing Pro Energi. Please be aware that these are fraudulent and not originating from Pro Energi.
        </p>
        <p>We are sincerely sorry for any inconveniences caused.</p>
       
      </div>

      <!-- Indonesian Column -->
      <div class="popup-column">
        <p>
          Kami telah mengetahui bahwa ada tawaran pekerjaan palsu yang dilakukan oleh individu atau organisasi yang mengatasnamakan Pro Energi dan dipublikasikan di berbagai situs internet. Harap diketahui bahwa informasi tersebut tidak benar dan bukan berasal dari Pro Energi.
        </p>
        <p>Kami mohon maaf atas ketidaknyamanan yang ditimbulkan.</p>
       
      </div>

    </div>
  </div>
</div>

@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
    $(".carousel1").owlCarousel({
        // rtl: true,
        loop: true,
        margin: 10,
        dots:false,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        autoplayTimeout: 3500, // Waktu antar slide (default: 2000)
        smartSpeed: 3000,      // Kecepatan transisi antar slide (default: 250)
        responsive: {
            0: {
                items: 2
            },
            576: {
                items: 3
            },
            768: {
                items: 4
            },
            992: {
                items: 4
            },
            1200: {
                items: 4
            }
        }
    });
    $(".carousel2").owlCarousel({
        rtl: true,
        loop: true,
        margin: 10,
        dots:false,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        autoplayTimeout: 3500, // Waktu antar slide (default: 2000)
        smartSpeed: 3000,      // Kecepatan transisi antar slide (default: 250)
        responsive: {
            0: {
                items: 2
            },
            576: {
                items: 3
            },
            768: {
                items: 4
            },
            992: {
                items: 4
            },
            1200: {
                items: 4
            }
        }
    });
 document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper('.testimonial-carousel', {
        loop: true,
        centeredSlides: true,
        spaceBetween: 0,
        autoplay: {
        delay: 5000,
        disableOnInteraction: false
        },
        // navigation: {
        //     nextEl: ".swiper-button-next",
        //     prevEl: ".swiper-button-prev",
        // },
        breakpoints: {
        0: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 1
        },
        1024: {
            slidesPerView: 5
        }
        }
    });
  });
     function closePopup() {
    document.getElementById("popup").style.display = "none";
  }

  // Auto-show on page load
  window.addEventListener("load", () => {
    document.getElementById("popup").style.display = "flex";
  });
    </script>
@endsection