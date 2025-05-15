@extends('company.layout.main')

@section('content')
    <!-- breadcrumb area start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative">
        <div class="rs-breadcrumb-bg" data-background="{{ asset('assets/images/pe-bg/Hi_rev3-1.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="rs-breadcrumb-content-wrapper">
                    <div class="rs-breadcrumb-title-wrapper text-center">
                        <h1 class="rs-breadcrumb-title" style="background: #db4052;display: inline-block;font-size:3em;padding: 14px 50px;">  {!! __('message.title_contact') !!}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- team details area start -->
        <section class="rs-team-details-area section-space rs-team-details">
            <div class="container">
                <div class="row g-5">
                    <div class="col-xl-7 col-lg-7">
                           <!-- Google map area start -->
                           {{-- <div class="rs-map-area rs-map-one">
                            </div> --}}
                            <!-- Google map area end-->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.113312314931!2d106.83133901944846!3d-6.233828917368586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3eedebde489%3A0xc9edb769a02d0eaf!2sPT.%20Pro%20Energi!5e0!3m2!1sid!2sid!4v1744791367437!5m2!1sid!2sid" width="650" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        
                        <div class="rs-contact-form rs-contact-four">
                            <div class="rs-contact-form-bg-thumb" data-background="{{asset('assets/images/bg/contact-bg-03.png')}}"></div>
                            <h3 class="rs-contact-form-title">Let’s Get in Touch</h3>
                           
                            <form id="contact-form" action="{{ url('assets/mailer.php')}}" method="POST">
                                <div class="row g-4">
                                    <div class="col-md-12">
                                        <div class="rs-contact-input">
                                            <input id="name" name="name" type="text" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="rs-contact-input">
                                            <input id="email" name="email" type="email" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="rs-contact-input">
                                        <select>
                                            <option>Choose Subject</option>
                                            <option>Quotation</option>
                                            <option>Partnership - Agent</option>
                                            <option>Partnership - Invetor</option>
                                            <option>Partnership - Supplier</option>
                                            <option>Product Information</option>
                                            <option>Other</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="rs-contact-input">
                                            <textarea id="message" name="message" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="rs-contact-btn">
                                            <button type="submit" class="rs-btn white-bg w-100">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div id="form-messages" class="text-white"></div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="rs-team-details-content">
                            <div class="sidebar-widget mb-4 wow fadeInLeft" data-wow-delay="1s" data-wow-duration="1s" >
                                <h6 class="sidebar-widget-title" style="color: #EA5501">HEAD OFFICE</h6>
                                    Gedung Graha Irama, Lt. 6 unit G, Jl. HR. Rasuna Said Blok X1, Kav 1-2, Jakarta 12950
                                    DKI Jakarta - Indonesia
                                    <div class="rs-team-details-info-wrapper p-0">
                                        <div class="rs-team-details-info-item ">
                                            <span class="rs-team-details-info-title">
                                                Phone: 
                                            </span>
                                            <span class="rs-team-details-info-content">
                                                + 62-21-52892321
                                            </span>
                                            <span class="rs-team-details-info-title">
                                                Fax:
                                            </span>
                                            <span class="rs-team-details-info-content">
                                                + 62-21-52892310
                                            </span>
                                            <span class="rs-team-details-info-title">
                                                Email:
                                            </span>
                                            <span class="rs-team-details-info-content">
                                                <a href="mailto:info@proenergi.com">info@proenergi.com</a>
                                            </span>
                                        </div>
                                    </div>
                            </div>
                            <div class="sidebar-widget wow fadeInLeft" data-wow-delay="1s" data-wow-duration="1s">
                                <h6 class="sidebar-widget-title" style="color: #EA5501">REPRESENTATIVE OFFICE</h6>
                                    <div class="rs-team-details-info-wrapper">
                                        <h6 class="sidebar-widget-title"><u>JAKARTA</u></h6>
                                        <p>Gedung Graha Irama, Lt. 6 unit 6G, Jl. HR. Rasuna Said Blok X1, Kav 1-2, Jakarta 12950
                                        DKI Jakarta - Indonesia</p>
                                        <div class="rs-team-details-info-item p-0">
                                            <span class="rs-team-details-info-title">
                                                Phone: 
                                            </span>
                                            <span class="rs-team-details-info-content">
                                                + 62-21-52892321
                                            </span>
                                            <span class="rs-team-details-info-title">
                                                Fax:
                                            </span>
                                            <span class="rs-team-details-info-content">
                                                + 62-21-52892310
                                            </span>
                                            <span class="rs-team-details-info-title">
                                                Email:
                                            </span>
                                            <span class="rs-team-details-info-content">
                                                <a href="mailto:info@proenergi.com">info@proenergi.com</a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="rs-team-details-info-wrapper">
                                        <h6 class="sidebar-widget-title"><u>SURABAYA</u></h6>
                                        Gedung Graha Irama, Lt. 6 unit 6G, Jl. HR. Rasuna Said Blok X1, Kav 1-2, Jakarta 12950
                                        DKI Jakarta - Indonesia
                                        <div class="rs-team-details-info-item">
                                            <span class="rs-team-details-info-title">
                                                Phone: 
                                            </span>
                                            <span class="rs-team-details-info-content">
                                                + 62-31-99850204
                                            </span>
                                            <span class="rs-team-details-info-title">
                                                Fax:
                                            </span>
                                            <span class="rs-team-details-info-content">
                                                + 62-31-99004285
                                            </span>
                                        </div>
                                    </div>
                                    <div class="rs-team-details-info-wrapper">
                                        <h6 class="sidebar-widget-title"><u>SAMARINDA</u></h6>
                                        Jl. Trikora No. 1, Simpang Pasir, Palaran, Kawasan Mangkujenang Harmoni Sinergi, Samarinda East Kalimantan - Indonesia
                                        <div class="rs-team-details-info-item">
                                            <span class="rs-team-details-info-title">
                                                Phone: 
                                            </span>
                                            <span class="rs-team-details-info-content">
                                                + 62-541-7277667
                                            </span>
                                            <span class="rs-team-details-info-title">
                                                Fax:
                                            </span>
                                            <span class="rs-team-details-info-content">
                                                + 62-541-7277667
                                            </span>
                                        </div>
                                    </div>
                                    <div class="rs-team-details-info-wrapper">
                                        <h6 class="sidebar-widget-title"><u>PALEMBANG</u></h6>
                                        Komplek Ruko Golden Boulevard, Blok D 01 No. 01, Citra Grand City South Sumatera - Indonesia
                                        <div class="rs-team-details-info-item">
                                            <span class="rs-team-details-info-title">
                                                Phone: 
                                            </span>
                                            <span class="rs-team-details-info-content">
                                                + 62-711-5645549
                                            </span>
                                            <span class="rs-team-details-info-title">
                                                Fax:
                                            </span>
                                            <span class="rs-team-details-info-content">
                                                + 62-711-5640399
                                            </span>
                                        </div>
                                    </div>
                                    <div class="rs-team-details-info-wrapper">
                                        <h6 class="sidebar-widget-title"><u>SAMARINDA</u></h6>
                                        Komplek Royal Serdam 2 no. A1 Jln. Sungai Raya Dalam
                                        Bangka Belitung - Pontianak
                                        West Kalimantan - Indonesia
                                        <div class="rs-team-details-info-item">
                                            <span class="rs-team-details-info-title">
                                                Phone 1: 
                                            </span>
                                            <span class="rs-team-details-info-content">
                                                +62-561-6730299
                                            </span>
                                            <span class="rs-team-details-info-title">
                                                Phone 2: 
                                            </span>
                                            <span class="rs-team-details-info-content">
                                                +62-561-6730854
                                            </span>
                                            <span class="rs-team-details-info-title">
                                                Fax:
                                            </span>
                                            <span class="rs-team-details-info-content">
                                                +62-561-6730854
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class="rs-team-details-info-wrapper">
                                        <h6 class="sidebar-widget-title"><u>BANJARMASIN</u></h6>
                                        Jl. Gubernur Soebarjo Liang Anggang RT 10 RW 03 Landasan Ulin Barat Banjarbaru Kalimantan Selatan
                                        <div class="rs-team-details-info-item">
                                            <span class="rs-team-details-info-title">
                                                Phone: 
                                            </span>
                                            <span class="rs-team-details-info-content">
                                                +62-511-7947234
                                            </span>
                                            <span class="rs-team-details-info-title">
                                                Fax:
                                            </span>
                                            <span class="rs-team-details-info-content">
                                                +62-511-7947234
                                            </span>
                                        </div>
                                    </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team details area end -->

@endsection
