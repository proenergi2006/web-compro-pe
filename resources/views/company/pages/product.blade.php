@extends('company.layout.main')

@section('title', __('message.nav_product') . ' - Pro Energi')


@section('cssnice')
<link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css')}}">
@endsection
@section('content')
    <!-- breadcrumb area start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative">
        <div class="rs-breadcrumb-bg" data-background="{{ asset('assets/images/pe-bg/product_hi_rev.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="rs-breadcrumb-content-wrapper">
                    <div class="rs-breadcrumb-title-wrapper text-center">
                        <h2 class="text-white radius-10" style="background: #EA5501;display: inline-block;padding: 10px 40px;">{!! __('message.title_product') !!}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- services area start -->
        <section class="rs-services-area section-space rs-services-one primary-bg p-relative">
            <div class="container">
                <div class="row g-5 section-title-space align-items-center">
                    <div class="rs-section-title-wrapper">
                        <h6 class="rs-section-title rs-split-text-enable split-in-fade text-center"><i style="color: #db4052">{!! __('message.quotes_pro') !!}</i></h6>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-xxl-3 col-xl-4 col-lg-4">
                        <div class="rs-services-tab">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-item-one-tab" data-bs-toggle="pill" data-bs-target="#pills-item-one" type="button" role="tab" aria-controls="pills-item-one" aria-selected="true">
                                        PRODIESEL <span class="rs-services-icon"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewBox="0 0 18 12"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                       d="M0 6C0 5.66249 0.273604 5.38889 0.611111 5.38889L15.0246 5.38889L11.179 1.54323C10.9403 1.30458 10.9403 0.917645 11.179 0.678991C11.4176 0.440337 11.8046 0.440337 12.0432 0.678991L16.9321 5.56788C17.1708 5.80653 17.1708 6.19347 16.9321 6.43212L12.0432 11.321C11.8046 11.5597 11.4176 11.5597 11.179 11.321C10.9403 11.0824 10.9403 10.6954 11.179 10.4568L15.0246 6.61111L0.611111 6.61111C0.273604 6.61111 0 6.33751 0 6Z"
                                       fill="white"></path>
                                 </svg></span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-item-two-tab" data-bs-toggle="pill" data-bs-target="#pills-item-two" type="button" role="tab" aria-controls="pills-item-two" aria-selected="false"> PRODIESEL BIO<span class="rs-services-icon"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewBox="0 0 18 12"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                       d="M0 6C0 5.66249 0.273604 5.38889 0.611111 5.38889L15.0246 5.38889L11.179 1.54323C10.9403 1.30458 10.9403 0.917645 11.179 0.678991C11.4176 0.440337 11.8046 0.440337 12.0432 0.678991L16.9321 5.56788C17.1708 5.80653 17.1708 6.19347 16.9321 6.43212L12.0432 11.321C11.8046 11.5597 11.4176 11.5597 11.179 11.321C10.9403 11.0824 10.9403 10.6954 11.179 10.4568L15.0246 6.61111L0.611111 6.61111C0.273604 6.61111 0 6.33751 0 6Z"
                                       fill="white"></path>
                                 </svg></span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-item-six-tab" data-bs-toggle="pill" data-bs-target="#pills-item-six" type="button" role="tab" aria-controls="pills-item-six" aria-selected="false">
                                        CRUSHED STONE<span class="rs-services-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="18" height="12" viewBox="0 0 18 12" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                       d="M0 6C0 5.66249 0.273604 5.38889 0.611111 5.38889L15.0246 5.38889L11.179 1.54323C10.9403 1.30458 10.9403 0.917645 11.179 0.678991C11.4176 0.440337 11.8046 0.440337 12.0432 0.678991L16.9321 5.56788C17.1708 5.80653 17.1708 6.19347 16.9321 6.43212L12.0432 11.321C11.8046 11.5597 11.4176 11.5597 11.179 11.321C10.9403 11.0824 10.9403 10.6954 11.179 10.4568L15.0246 6.61111L0.611111 6.61111C0.273604 6.61111 0 6.33751 0 6Z"
                                       fill="white"></path>
                                 </svg></span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-item-three-tab" data-bs-toggle="pill" data-bs-target="#pills-item-three" type="button" role="tab" aria-controls="pills-item-three" aria-selected="false">
                                        MARINE FUEL OIL (MFO)<span class="rs-services-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="18" height="12" viewBox="0 0 18 12" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                       d="M0 6C0 5.66249 0.273604 5.38889 0.611111 5.38889L15.0246 5.38889L11.179 1.54323C10.9403 1.30458 10.9403 0.917645 11.179 0.678991C11.4176 0.440337 11.8046 0.440337 12.0432 0.678991L16.9321 5.56788C17.1708 5.80653 17.1708 6.19347 16.9321 6.43212L12.0432 11.321C11.8046 11.5597 11.4176 11.5597 11.179 11.321C10.9403 11.0824 10.9403 10.6954 11.179 10.4568L15.0246 6.61111L0.611111 6.61111C0.273604 6.61111 0 6.33751 0 6Z"
                                       fill="white"></path>
                                 </svg></span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-item-four-tab" data-bs-toggle="pill" data-bs-target="#pills-item-four" type="button" role="tab" aria-controls="pills-item-four" aria-selected="false">
                                        LUBRICANT<span class="rs-services-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="18" height="12" viewBox="0 0 18 12" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                       d="M0 6C0 5.66249 0.273604 5.38889 0.611111 5.38889L15.0246 5.38889L11.179 1.54323C10.9403 1.30458 10.9403 0.917645 11.179 0.678991C11.4176 0.440337 11.8046 0.440337 12.0432 0.678991L16.9321 5.56788C17.1708 5.80653 17.1708 6.19347 16.9321 6.43212L12.0432 11.321C11.8046 11.5597 11.4176 11.5597 11.179 11.321C10.9403 11.0824 10.9403 10.6954 11.179 10.4568L15.0246 6.61111L0.611111 6.61111C0.273604 6.61111 0 6.33751 0 6Z"
                                       fill="white"></path>
                                 </svg></span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-item-five-tab" data-bs-toggle="pill" data-bs-target="#pills-item-five" type="button" role="tab" aria-controls="pills-item-five" aria-selected="false">
                                       GASOLINE<span class="rs-services-icon"><svg xmlns="http://www.w3.org/2000/svg"
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
                                            <div class="col-xl-8 col-lg-8">
                                                <div class="rs-services-tab-content wow fadeInLeft" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <p class="rs-services-tab-word ">{!! __('message.prodiesel') !!}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4">
                                                <div class="rs-services-tab-content wow fadeInRight" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <img src="{{ asset('assets/images/produk/pe-product-prodiesel-1.png')}}" alt="image">
                                                </div>
                                                <div class="mt-4 rs-services-tab-content wow fadeInRight" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <h6 style="color: #db4052">{!! __('message.prodiesel_quotes') !!}</h6>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="pills-item-two" role="tabpanel" aria-labelledby="pills-item-two-tab" tabindex="0">
                                    <div class="rs-services-tab-content-wrapper p-relative">
                                        <div class="row">
                                            <div class="col-xl-8 col-lg-8">
                                                <div class="rs-services-tab-content fadeInLeft">
                                                    <p class="rs-services-tab-word ">{!! __('message.prodieselbio') !!}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4">
                                                <div class="rs-services-tab-content fadeInRight">
                                                    <img src="{{ asset('assets/images/produk/pe-product-prodieselbio-1.png')}}" alt="image">
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-item-six" role="tabpanel" aria-labelledby="pills-item-six-tab" tabindex="0">
                                    <div class="rs-services-tab-content-wrapper p-relative">
                                        <div class="row">
                                            <div class="col-xl-8 col-lg-8">
                                                <div class="rs-services-tab-content wow fadeInLeft" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <p class="rs-services-tab-word ">{!! __('message.crushed_stone') !!}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4">
                                                <div class="rs-services-tab-content wow fadeInRight" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <img src="{{ asset('assets/images/produk/crushed_stone.png')}}" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-item-three" role="tabpanel" aria-labelledby="pills-item-three-tab" tabindex="0">
                                    <div class="rs-services-tab-content-wrapper p-relative">
                                        <div class="row">
                                            <div class="col-xl-8 col-lg-8">
                                                <div class="rs-services-tab-content wow fadeInLeft" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <p class="rs-services-tab-word ">{!! __('message.mfo') !!}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4">
                                                <div class="rs-services-tab-content wow fadeInRight" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <img src="{{ asset('assets/images/produk/bg-mfo.png')}}" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-item-four" role="tabpanel" aria-labelledby="pills-item-four-tab" tabindex="0">
                                    <div class="rs-services-tab-content-wrapper p-relative">
                                        <div class="row">
                                            <div class="col-xl-8 col-lg-8">
                                                <div class="rs-services-tab-content wow fadeInLeft" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <p class="rs-services-tab-word ">{!! __('message.lubricant') !!}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4">
                                                <div class="rs-services-tab-content wow fadeInRight" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <img src="{{ asset('assets/images/produk/bg-lubricant.png')}}" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-item-five" role="tabpanel" aria-labelledby="pills-item-five-tab" tabindex="0">
                                    <div class="rs-services-tab-content-wrapper p-relative">
                                        <div class="row">
                                            <div class="col-xl-8 col-lg-8">
                                                <div class="rs-services-tab-content wow fadeInLeft" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <p class="rs-services-tab-word ">{!! __('message.gasoline') !!}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4">
                                                <div class="rs-services-tab-content wow fadeInRight" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <img src="{{ asset('assets/images/produk/bg-gasoline.png')}}" alt="image">
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

@section('nice')
<script src="{{ asset('assets/js/plugins/nice-select.min.js')}}"></script>
@endsection
