@extends('company.layout.main')

@section('title', __('message.nav_contact') . ' - Pro Energi')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css')}}">
    <style>
.card-overlay {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(255, 255, 255, 0.7);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 10;
}

.spinner {
    width: 40px;
    height: 40px;
    border: 4px solid #ccc;
    border-top-color: #3f51b5;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

.card-overlay.active {
    display: flex; /* langsung tampil tanpa animasi */
}

@keyframes spin {
    to {
        transform: rotate(360deg);
    }
}

    </style>
@endsection

@section('content')
    <!-- breadcrumb area start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative">
        <div class="rs-breadcrumb-bg" data-background="{{ asset('assets/images/pe-bg/Hi_rev3-1.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="rs-breadcrumb-content-wrapper">
                    <div class="rs-breadcrumb-title-wrapper text-center">
                        <h2 class="text-white radius-10" style="background: #EA5501;display: inline-block;padding: 10px 40px;">  {!! __('message.title_contact') !!}</h2>
                        {{-- <h2 class="rs-breadcrumb-title radius-10" style="background: #EA5501;display: inline-block;padding: 10px 40px;">  {!! __('message.title_contact') !!}</h2> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Google map area start -->
                           {{-- <div class="rs-map-area rs-map-one">
                            </div> --}}
                            <!-- Google map area end-->
        <!-- team details area start -->
        <section class="rs-team-details-area section-space rs-team-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <div class="card-overlay">
                            <div class="spinner"></div>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.113312314931!2d106.83133901944846!3d-6.233828917368586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3eedebde489%3A0xc9edb769a02d0eaf!2sPT.%20Pro%20Energi!5e0!3m2!1sid!2sid!4v1744791367437!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class="rs-contact-form rs-contact-four">
                            <div id="responseMessage"></div>
                            <div class="rs-contact-form-bg-thumb" data-background="{{asset('assets/images/bg/contact-bg-03.png')}}"></div>
                            <h5 class="rs-contact-form-title mb-2">{{ __('message.lets')}}</h5>
                            {{-- @if (session('status')) --}}
                            {{-- <div class="alert alert-primary" role="alert">
                            {{ session('status') }}</div>
                             @endif --}}
                            {{-- <form id="contact-form" action="{{ url('assets/mailer.php')}}" method="POST"> --}}
                            {{-- <form action="{{ url('post-email') }}" method="POST"> --}}
                            <div class="card-overlay">
                                <div class="spinner"></div>
                            </div>
                            <form id="contactForm">
                                @csrf
                                <div class="row g-4">
                                    <div class="col-md-12">
                                        <div class="rs-contact-input">
                                            <input id="name" name="name" type="text" placeholder="{{ __('message.your_name')}}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="rs-contact-input">
                                            <input id="email" name="email" type="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="rs-contact-input">
                                        <select name="subject" id="subject">
                                            <option value="">{{ __('message.your_subject')}}</option>
                                            <option value="Quotation">Quotation</option>
                                            <option value="Partnership">Partnership</option>
                                            <option value="Career">Career</option>
                                            <option value="Product Information">Product Information</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="rs-contact-input">
                                            <textarea id="message" name="message" placeholder="{{ __('message.your_mess')}}"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="rs-contact-btn">
                                            <button type="submit" class="rs-btn white-bg w-100">{{ __('message.send')}}</button>
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
                                   <p style="margin-bottom:5px">Gedung Graha Irama, Lt. 6 unit G, Jl. HR. Rasuna Said Blok X1, Kav 1-2, Jakarta 12950
                                    DKI Jakarta - Indonesia</p> 
                                    <div class="rs-team-details-info-wrapper" style="margin-top:0px;margin-bottom:0px">
                                        <div class="rs-team-details-info-item" style="margin-bottom:0px">
                                            <span class="rs-team-details-info-title" style="font-size: 16px">
                                               Phone
                                            </span>
                                            <span class="rs-team-details-info-content">
                                               <p>: + 62-21-52892321</p> 
                                            </span>
                                        </div>
                                        <div class="rs-team-details-info-item" style="margin-bottom:0px">
                                            <span class="rs-team-details-info-title" style="font-size: 16px">
                                                Fax
                                            </span>
                                            <span class="rs-team-details-info-content">
                                               <p>: + 62-21-52892310</p> 
                                            </span>
                                        </div>
                                        <div class="rs-team-details-info-item" style="margin-bottom:0px">
                                             <span class="rs-team-details-info-title" style="font-size: 16px">
                                                Email
                                            </span>
                                            <span class="rs-team-details-info-content">
                                                : <a href="mailto:info@proenergi.com" style="font-size: 16px">info@proenergi.com</a>
                                            </span>
                                        </div>
                                    </div>
                            </div>
                            <div class="sidebar-widget wow fadeInLeft" data-wow-delay="1s" data-wow-duration="1s">
                                <h6 class="sidebar-widget-title" style="color: #EA5501">REPRESENTATIVE OFFICE</h6>
                                    <div class="rs-team-details-info-wrapper">
                                        <h6 class="sidebar-widget-title"><u>JAKARTA</u></h6>
                                        <p style="margin-bottom:0px">Gedung Graha Irama, Lt. 6 unit 6G, Jl. HR. Rasuna Said Blok X1, Kav 1-2, Jakarta 12950
                                        DKI Jakarta - Indonesia</p>
                                        <div class="rs-team-details-info-item" style="margin-bottom:0px">
                                            <span class="rs-team-details-info-title" style="font-size: 16px">
                                                Phone: 
                                            </span>
                                            <span class="rs-team-details-info-content">
                                                <p>+ 62-21-52892321</p>
                                            </span>
                                        </div>
                                        <div class="rs-team-details-info-item" style="margin-bottom:0px">
                                              <span class="rs-team-details-info-title" style="font-size: 16px">
                                                Fax:
                                            </span>
                                            <span class="rs-team-details-info-content">
                                               <p>+ 62-21-52892310</p> 
                                            </span>
                                        </div>
                                        <div class="rs-team-details-info-item" style="margin-bottom:0px">
                                            <span class="rs-team-details-info-title" style="font-size: 16px">
                                                Email:
                                            </span>
                                            <span class="rs-team-details-info-content">
                                                <a href="mailto:info@proenergi.com">info@proenergi.com</a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="rs-team-details-info-wrapper">
                                        <h6 class="sidebar-widget-title"><u>SURABAYA</u></h6>
                                        <p  style="margin-bottom:0px"> JL. Tenggilis Utara II No. 1/Prapen Indah Blok P1 Surabaya 60299
                                        East Java – Indonesia</p>
                                        <div class="rs-team-details-info-item" style="margin-bottom:0px">
                                            <span class="rs-team-details-info-title" style="font-size: 16px">
                                               <p>Phone: </p>
                                            </span>
                                            <span class="rs-team-details-info-content">
                                               <p> + 62-31-99850204</p>
                                            </span>
                                        </div>
                                        <div class="rs-team-details-info-item" style="margin-bottom:0px">
                                             <span class="rs-team-details-info-title" style="font-size: 16px">
                                                Fax:
                                            </span>
                                            <span class="rs-team-details-info-content">
                                                <p>+ 62-31-99004285</p>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="rs-team-details-info-wrapper">
                                        <h6 class="sidebar-widget-title"><u>SAMARINDA</u></h6>
                                        <p>Jl. Trikora No. 1, Simpang Pasir, Palaran, Kawasan Mangkujenang Harmoni Sinergi, Samarinda East Kalimantan - Indonesia</p>
                                        <div class="rs-team-details-info-item" style="margin-bottom:0px">
                                            <span class="rs-team-details-info-title" style="font-size: 16px">
                                                Phone: 
                                            </span>
                                            <span class="rs-team-details-info-content">
                                                <p>+ 62-541-7277667</p>
                                            </span>
                                        </div>
                                         <div class="rs-team-details-info-item" style="margin-bottom:0px">
                                             <span class="rs-team-details-info-title" style="font-size: 16px">
                                                Fax:
                                            </span>
                                            <span class="rs-team-details-info-content">
                                                <p>+ 62-541-7277667</p>
                                            </span>
                                         </div>
                                    </div>
                                    <div class="rs-team-details-info-wrapper">
                                        <h6 class="sidebar-widget-title"><u>PALEMBANG</u></h6>
                                        <p>Komplek Ruko Golden Boulevard, Blok D 01 No. 01, Citra Grand City South Sumatera - Indonesia</p>
                                        <div class="rs-team-details-info-item" style="margin-bottom:0px">
                                            <span class="rs-team-details-info-title" style="font-size: 16px">
                                                Phone: 
                                            </span>
                                            <span class="rs-team-details-info-content">
                                               <p>+ 62-711-5645549</p> 
                                            </span>
                                        </div>
                                         <div class="rs-team-details-info-item" style="margin-bottom:0px">
                                             <span class="rs-team-details-info-title" style="font-size: 16px">
                                                Fax:
                                            </span>
                                            <span class="rs-team-details-info-content">
                                                <p>+ 62-711-5640399</p>
                                            </span>
                                         </div>
                                    </div>
                                    <div class="rs-team-details-info-wrapper">
                                        <h6 class="sidebar-widget-title"><u>PONTIANAK</u></h6>
                                        <p>Komplek Royal Serdam 2 no. A1 Jln. Sungai Raya Dalam
                                        Bangka Belitung - Pontianak
                                        West Kalimantan - Indonesia</p>
                                        <div class="rs-team-details-info-item" style="margin-bottom:0px">
                                            <span class="rs-team-details-info-title" style="font-size: 16px">
                                                Phone 1: 
                                            </span>
                                            <span class="rs-team-details-info-content">
                                                <p>+62-561-6730299</p>
                                            </span>
                                        </div>
                                        <div class="rs-team-details-info-item" style="margin-bottom:0px">
                                            <span class="rs-team-details-info-title" style="font-size: 16px">
                                                Phone 2: 
                                            </span>
                                            <span class="rs-team-details-info-content">
                                                <p>+62-561-6730854</p>
                                            </span>
                                        </div>
                                        <div class="rs-team-details-info-item" style="margin-bottom:0px">
                                            <span class="rs-team-details-info-title" style="font-size: 16px">
                                                Fax:
                                            </span>
                                            <span class="rs-team-details-info-content">
                                                <p>+62-561-6730854</p>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class="rs-team-details-info-wrapper">
                                        <h6 class="sidebar-widget-title"><u>BANJARMASIN</u></h6>
                                        <p  style="margin-bottom:0px">Jl. Gubernur Soebarjo Liang Anggang RT 10 RW 03 Landasan Ulin Barat Banjarbaru Kalimantan Selatan</p>
                                        <div class="rs-team-details-info-item" style="margin-bottom:0px">
                                            <span class="rs-team-details-info-title" style="font-size: 16px">
                                                Phone: 
                                            </span>
                                            <span class="rs-team-details-info-content">
                                                +62-511-7947234
                                            </span>
                                        </div>
                                        <div class="rs-team-details-info-item" style="margin-bottom:0px">
                                             <span class="rs-team-details-info-title" style="font-size: 16px">
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

@section('script')
<script src="{{ asset('assets/js/plugins/nice-select.min.js')}}"></script>
    <script>
    var messages = {
        success: "{{ __('message.thank_you') }}",
        error: "{{ __('message.error') }}"
    };

    $(document).ready(function() {
         if ($.fn.niceSelect) {
            $('select').niceSelect();
        } else {
            console.warn('niceSelect plugin not loaded!');
        }
        $('#contactForm').submit(function(event) {
           
            event.preventDefault();  // Mencegah form untuk reload halaman setelah submit

            var lang = window.location.pathname.split('/')[1]; 
            
            // Ambil data form
            var formData = $(this).serialize();
            //  alert(formData);
            // Kirim data menggunakan AJAX
            $.ajax({
                url: '/' + lang + '/post-email', // Ganti dengan route yang sesuai
                type: 'POST',
                data: formData,
                beforeSend: function() {
                    $('.card-overlay').addClass('active'); // Munculkan overlay
                },
                success: function(response) {
                    $('#responseMessage').html('<div class="alert alert-success">' + messages.success + '</div>');
                    $('#contactForm')[0].reset();  // Reset form setelah sukses
                    $('#subject').val('');
                },
                error: function(xhr, status, error) {
                    var errors = xhr.responseJSON.errors;
                    var errorMessage = '';
                    
                    $.each(errors, function(key, value) {
                        errorMessage += value + '<br>';
                    });

                    $('#responseMessage').html('<div class="alert alert-warning">' + messages.error + '</br>' + errorMessage + '</div>');
                },
                complete: function() {
                     $('.card-overlay').removeClass('active'); 
                }
            });
        });
    });

    </script>
@endsection
