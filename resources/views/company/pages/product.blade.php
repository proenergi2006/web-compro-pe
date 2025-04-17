@extends('company.layout.main')

@section('content')
    <!-- breadcrumb area start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative">
        <div class="rs-breadcrumb-bg" data-background="{{ asset('assets/images/pe-bg/product_hi_rev.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="rs-breadcrumb-content-wrapper">
                    <div class="rs-breadcrumb-title-wrapper text-center">
                        <h1 class="rs-breadcrumb-title" style="background: #db4052;display: inline-block;font-size:4em;padding: 14px 50px;">Products</h1>
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
                        <h6 class="rs-section-title rs-split-text-enable split-in-fade text-center"><i style="color: #db4052">“Pro Energi provide a high quality product and ensure that it is environmentally friendly.”</i></h6>
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
                                                    <p class="rs-services-tab-word "><b>ProDiesel</b> is a High Speed Diesel (HSD), a fuel for industrial or boilers that are designed to burn distillate fuel. 
                                                        ProDiesel is also often used for high-speed diesel engines in diesel-powered vehicle, as well as on stationary diesel engines. ProDiesel is recommended 
                                                        for all types of diesel vehicles because it's keeping the machine clean and free of deposits. ProDiesel's quality is in accordance with the specifications 
                                                        set by the Indonesian Directorate General of Oil and Gas.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4">
                                                <div class="rs-services-tab-content wow fadeInRight" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <img src="{{ asset('assets/images/produk/pe-product-prodiesel-1.png')}}" alt="image">
                                                </div>
                                                <div class="mt-4 rs-services-tab-content wow fadeInRight" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <h6 style="color: #db4052">“ProDiesel is recommended for all types of diesel vehicles, because it’s keeping the machine to stay clean and free of deposits.”</h6>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-item-two" role="tabpanel" aria-labelledby="pills-item-two-tab" tabindex="0">
                                    <div class="rs-services-tab-content-wrapper p-relative">
                                        <div class="row">
                                            <div class="col-xl-8 col-lg-8">
                                                <div class="rs-services-tab-content wow fadeInLeft" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <p class="rs-services-tab-word "><b>ProDiesel Bio</b> is a High Speed Diesel (HSD) combined with FAME or BioDiesel. 
                                                        ProDiesel Bio has low sulphur and high cetane, which making it really good for the diesel engines.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4">
                                                <div class="rs-services-tab-content wow fadeInRight" data-wow-delay=".7s" data-wow-duration="1s">
                                                    <img src="{{ asset('assets/images/produk/pe-product-prodieselbio-1.png')}}" alt="image">
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
                                                    <p class="rs-services-tab-word "><b>Fuel oil</b>, (also known as heavy oil, marine fuel or furnace oil) is a fraction obtained from petroleum distillation, 
                                                        either as a distillate or a residue. Broadly speaking, fuel oil is any liquid fuel that is burned in a furnace or boiler for the generation of heat or used in an engine 
                                                        for the generation of power, except oils having a flash point of approximately 42 °C (108 °F) and oils burned in cotton or wool-wick burners. In this sense, diesel is a type of fuel oil. Fuel oil is made of long hydrocarbon chains, particularly alkanes, cycloalkanes and aromatics. The term fuel oil is also used in a stricter sense to refer only to the heaviest commercial fuel that can be obtained from crude oil, i.e., heavier than gasoline and naphtha.
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
                                                    <p class="rs-services-tab-word "><b>Lubricant</b> is a substance, which serves to reduce the wear between two surfaces moving objects 
                                                        rubbing together. A liquid material can be categorized as a lubricant if it contains the basic ingredient. New technology applied for engine sustainability by control the viscosity stability.
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
                                                    <p class="rs-services-tab-word "><b>Gasoline</b> is a formulated unleaded gasoline. Gasoline High Octane is recommended for vehicles that use gasoline engines 
                                                        equivalent of technology with electronic fuel injection (EFI) and catalytic converters, as well as for all types of vehicles seeking to improve the performance of the machine. 
                                                        Gasoline High Octane makes a vehicle work better, more powerful, knock-free and low emissions.
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
