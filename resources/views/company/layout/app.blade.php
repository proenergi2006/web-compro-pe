<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pro Energi - Energy Service & Solution</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="proenergi,minyak,perusahaan,diesel,distribusi">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/pe-logo-icon.png')}}">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css')}}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css')}}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/odometer.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/fontawesome-pro.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/spacing.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/remixicon.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/flag-icons.min.css') }}">
    @yield('css')
</head>

<body class="rs-smoother-yes rtl">

    <div id="splash-screen">
        <div class="splash-inner">
            <div class="splash-year" id="splash-year">2006</div>
           {{-- <img id="splash-logo" src="{{ asset('assets/images/logo_pe.png') }}" width="300px" alt="Logo" class="logo-fade" /> --}}
        </div>
    </div>
    <!-- preloader start -->
    <div id="pre-load">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="{{ asset('assets/images/logo_pe.png')}}" alt=""></div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- preloader start -->

    <div id="rs-mouse">
        <div id="cursor-ball"></div>
    </div>

    <!-- preloader end -->

    <!-- Header area start -->
    <header>
        <div class="rs-header-area rs-header-two header-transparent has-bg-white has-border" id="header-sticky">
            <div class="container-fluid">
                <div class="rs-header-inner">
                    <div class="rs-header-left">
                        <div class="rs-header-logo">
                            <a href="/"><img src="{{ asset('assets/images/logo_pe.png')}}" alt="logo" width="125px"></a>
                        </div>
                    </div>
                    <div class="rs-header-menu">
                        <nav id="mobile-menu" class="main-menu">
                            <ul class="onepage-menu">
                                {{-- <li> <a href="#">Home</a></li> --}}
                                <li><a href="#homeabout">{{ __('message.nav_about') }}</a></li>
                                <li> <a href="#homeproducts">{{ __('message.nav_product') }}</a></li>
                                <li> <a href="#homeservices">{{ __('message.nav_service') }}</a></li>
                                <li> <a href="#homenetworks">{{ __('message.nav_network') }}</a></li>
                                <li> <a href="#homenews">{{ __('message.nav_news') }}</a> </li>
                                <li><a href="#homecareer">{{ __('message.nav_career') }}</a> </li>
                                <li><a href="{{ url(app()->getLocale() . '/contact') }}">{{ __('message.nav_contact') }}</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="rs-header-right">
                         <ul class="multipage-menu" style="color: black">Lang :
                   </ul>    
                        <a href="{{ url('/en') }}"> <span class="fi fi-gb" style="width: 20px; height: auto;"></span>  </a> |
                        <a href="{{ url('/id') }}"><span class="fi fi-id"  style="width: 20px; height: auto;"></span> </a>
                        <!-- sidebar start -->
                        <div class="rs-header-hamburger toggle-mobile-only">
                            <div class="sidebar-toggle">
                                <a class="bar-icon" href="javascript:void(0)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                        <path d="M8.55566 11H1.55566C1.29045 11 1.03609 11.1054 0.848557 11.2929C0.661021 11.4804 0.555664 11.7348 0.555664 12V19C0.555664 19.2652 0.661021 19.5196 0.848557 19.7071C1.03609 19.8946 1.29045 20 1.55566 20H8.55566C8.82088 20 9.07523 19.8946 9.26277 19.7071C9.45031 19.5196 9.55566 19.2652 9.55566 19V12C9.55566 11.7348 9.45031 11.4804 9.26277 11.2929C9.07523 11.1054 8.82088 11 8.55566 11ZM7.55566 18H2.55566V13H7.55566V18ZM19.5557 0H12.5557C12.2904 0 12.0361 0.105357 11.8486 0.292893C11.661 0.48043 11.5557 0.734784 11.5557 1V8C11.5557 8.26522 11.661 8.51957 11.8486 8.70711C12.0361 8.89464 12.2904 9 12.5557 9H19.5557C19.8209 9 20.0752 8.89464 20.2628 8.70711C20.4503 8.51957 20.5557 8.26522 20.5557 8V1C20.5557 0.734784 20.4503 0.48043 20.2628 0.292893C20.0752 0.105357 19.8209 0 19.5557 0ZM18.5557 7H13.5557V2H18.5557V7ZM19.5557 11H12.5557C12.2904 11 12.0361 11.1054 11.8486 11.2929C11.661 11.4804 11.5557 11.7348 11.5557 12V19C11.5557 19.2652 11.661 19.5196 11.8486 19.7071C12.0361 19.8946 12.2904 20 12.5557 20H19.5557C19.8209 20 20.0752 19.8946 20.2628 19.7071C20.4503 19.5196 20.5557 19.2652 20.5557 19V12C20.5557 11.7348 20.4503 11.4804 20.2628 11.2929C20.0752 11.1054 19.8209 11 19.5557 11ZM18.5557 18H13.5557V13H18.5557V18ZM8.55566 0H1.55566C1.29045 0 1.03609 0.105357 0.848557 0.292893C0.661021 0.48043 0.555664 0.734784 0.555664 1V8C0.555664 8.26522 0.661021 8.51957 0.848557 8.70711C1.03609 8.89464 1.29045 9 1.55566 9H8.55566C8.82088 9 9.07523 8.89464 9.26277 8.70711C9.45031 8.51957 9.55566 8.26522 9.55566 8V1C9.55566 0.734784 9.45031 0.48043 9.26277 0.292893C9.07523 0.105357 8.82088 0 8.55566 0ZM7.55566 7H2.55566V2H7.55566V7Z" fill="#616161"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <!-- sidebar end -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end -->

    <!-- Offcanvas area start -->
    <div class="fix">
        <div class="offcanvas-area" data-lenis-prevent>
            <div class="offcanvas-wrapper">
                <div class="offcanvas-content">
                    <div class="offcanvas-top d-flex justify-content-between align-items-center mb-20">
                        <div class="offcanvas-logo">
                            <a class="logo-black" href="/"><img src="{{ asset('assets/images/logo_pe.png')}}" alt="" width="150px"></a>
                        </div>
                        <div class="offcanvas-close">
                            <button class="offcanvas-close-icon animation--flip">
                                <span class="offcanvas-m-lines">
                                <span class="offcanvas-m-line line--1"></span><span
                                    class="offcanvas-m-line line--2"></span><span
                                    class="offcanvas-m-line line--3"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="offcanvas-about mb-30 d-none d-sm-block">
                        <p> Industrie is a modern factory website. specifically designed for who need construction,
                            firms, oil, architecture and any other small business.
                        </p>
                    </div>
                    <div class="mobile-menu">
                        <div class="rs-offcanvas-menu mb-25">
                            <nav></nav>
                        </div>
                    </div>
                    
                   
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-overlay"></div>
    <div class="offcanvas-overlay-white"></div>
    <!-- Offcanvas area start -->

    <!-- Body main wrapper start -->
    <main>
        @yield('content')

    </main>
    <!-- Body main wrapper end -->

    <!-- footer area start -->
    @include('company.layout.footer')
    <!-- footer area end -->

    <!-- back to top -->
    <!-- Backtotop start -->
    <div class="backtotop-wrap cursor-pointer">
        <svg class="backtotop-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Backtotop end -->

    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/jquery-3.7.1.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/waypoints.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/meanmenu.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/swiper.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/wow.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/nice-select.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/jarallax.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/ajax-form.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/easypie.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/headding-title.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/lenis.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/gsap.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/rs-anim-int.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/rs-scroll-trigger.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/rs-splitText.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.lettering.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/parallax-effect.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.appear.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/marquee.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/chart.umd.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/nouislider.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/purecounter.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/odometer.min.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.nivo.slider.js')}}"></script>

    @yield('script')
   <script>
    document.addEventListener("DOMContentLoaded", function () {
    const splash = document.getElementById("splash-screen");
    const yearText = document.getElementById("splash-year");
    let startYear = 2006;
    const endYear = 2025;
    const delay = 100; // ms per tahun

    const logo = document.getElementById('splash-logo');

 
    function showNextYear() {
      if (startYear <= endYear) {
        yearText.textContent = startYear;
        startYear++;
        setTimeout(showNextYear, delay);
      } else {
            // Setelah selesai, hilangkan splash
            // splash.style.transition = 'opacity 1.5s';
            // splash.style.opacity = 0;
            // setTimeout(() => splash.style.display = 'none', 1600);
           // Munculkan logonya perlahan
           // Ganti elemen tahun dengan logo
            yearText.style.transition = 'opacity 0.5s';
            yearText.style.opacity = 0; // Hilangkan teks tahun

            setTimeout(() => {
            yearText.style.display = 'none'; // Sembunyikan elemen tahun
            logo.style.opacity = 1; // Munculkan logo
            }, 600); // Waktu sedikit setelah tahun menghilang

            // Setelah logo muncul, tutup splash
            setTimeout(() => {
            splash.style.transition = 'opacity 1.5s';
            splash.style.opacity = 0;
            setTimeout(() => splash.style.display = 'none', 1600);
            }, 2000); // Tunggu 4 detik sebelum splash ditutup
            
      }
    }

    showNextYear();
  });
</script>


</body>

</html>