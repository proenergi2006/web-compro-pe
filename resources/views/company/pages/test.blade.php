@extends('company.layout.main')

@section('css')
    <style>

.rs-services-area {
  margin-top: -1px;
  overflow: hidden;
}

.timeline-wrapper {
  position: relative;
  height: 100vh;
  overflow: hidden;
}

.truck-pin {
  position: fixed;
  top: 50%;
  left: 40px;
  transform: translateY(-50%);
  z-index: 10;
  width: 100px;
}

.truck-pin img {
  width: 100%;
  height: auto;
}

/* Scroll area yang akan digeser */
.timeline-scroll-area {
  height: 100vh;
  margin-left: 150px; /* Biar ga ketimpa truk */
  overflow: hidden;
  position: relative;
}

/* Track fleksibel yang lebar horizontal */
.timeline-track {
  display: flex;
  gap: 80px;
  padding: 100px 0;
  height: 100%;
  width: max-content;
  position: relative;
}

/* Item masing-masing */
.timeline-item {
  width: 400px;
  flex-shrink: 0;
  position: relative;
}

.timeline-content {
  background: #fff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  position: absolute;
}

/* Selang-seling atas bawah */
.timeline-item:nth-child(even) .timeline-content {
  top: 50%;
}

.timeline-item:nth-child(odd) .timeline-content {
  bottom: 50%;
}


/* Garis tengah */
.timeline-track::before {
content: '';
position: absolute;
top: 50%;
left: 0;
height: 4px;
width: 100%;
background: #ffae67;
z-index: 0;
}
    </style>
@endsection
@section('content')

 <section class="rs-services-area section-space rs-services-one primary-bg p-relative rs-portfolio-eight">
   <div class="timeline-wrapper">
        <!-- TRUCK (tetap diam di tengah) -->
        <div class="truck-pin">
            <img src="{{ asset('assets/images/truk.jpg')}}">
        </div>
   <div class="timeline-scroll-area">
    <div class="timeline-track">
    <!-- ITEM 1 -->
    <div class="timeline-item">
        <div class="timeline-img"></div>
        <div class="timeline-content js--fadeInTop">
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
    </div>
    </div>
 </section>



    <section class="rs-contact-area rs-contact-eight section-space-top">
            <div class="container">
                <div class="row  g-5 justify-content-center section-title-space align-items-center">
                    <div class="col-xl-7 col-lg-7 col-md-8">
                        <div class="rs-section-title-wrapper text-center">
                            <span class="rs-section-subtitle has-theme-orange">
                                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="15" viewBox="0 0 11 15"
                                    fill="none">
                                    <path d="M3.14286 10L0 15L8.78104e-07 0L3.14286 5V10Z" fill="#EA5501"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6.28571 10L3.14286 15L3.14286 10L4.71428 7.5L3.14286 5L3.14286 0L6.28571 5L6.28571 10ZM6.28571 10L7.85714 7.5L6.28571 5V0L11 7.5L6.28571 15V10Z"
                                        fill="#EA5501"></path>
                                </svg>
                                Global Branch
                            </span>
                            <h2 class="rs-section-title rs-split-text-enable split-in-fade mb-10">Get in touch with our
                                team</h2>
                            <p>We have the team and know-how to help scale 10x faster.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="rs-contact-wrapper">
                            <div class="rs-contact-thumb">
                                <img src="{{ asset('assets/images/maps.jpg')}}" alt="image">
                            </div>
                            <div class="rs-contact-ripple-wrapper">
                                <div class="rs-ripple-item ripple-1">
                                    <div class="rs-ripple-figure">
                                        <div class="pre-title">
                                            <h5 class="title"> San Francisco </h5>
                                        </div>
                                        <!-- Start Description -->
                                        <div class="ripple-desc">
                                            <p class="description"> 5214F Diamond Heights Blvd #553, USA</p>
                                        </div>
                                        <!-- End Description -->
                                    </div>
                                    <div class="pre-circle-ripple"></div>
                                </div>
                                <div class="mobile_item">
                                    <i class="remove-icon ri-close-line"></i>
                                    <div class="pre-title">
                                        <h5 class="title"> San Francisco </h5>
                                    </div>
                                    <div class="ripple-desc">
                                        <p class="description"> 5214F Diamond Heights Blvd #553, USA</p>
                                    </div>
                                </div>
                                <div class="rs-ripple-item ripple-2">
                                    <div class="rs-ripple-figure">
                                        <div class="pre-title">
                                            <h5 class="title"> Denver </h5>
                                        </div>
                                        <!-- Start Description -->
                                        <div class="ripple-desc">
                                            <p class="description"> 5214F Diamond Heights Blvd #553, USA</p>
                                        </div>
                                        <!-- End Description -->
                                    </div>
                                    <div class="pre-circle-ripple"></div>
                                </div>
                                <div class="mobile_item">
                                    <i class="remove-icon ri-close-line"></i>
                                    <div class="pre-title">
                                        <h5 class="title"> Denver</h5>
                                    </div>
                                    <div class="ripple-desc">
                                        <p class="description"> 5214F Diamond Heights Blvd #553, USA</p>
                                    </div>
                                </div>
                                <div class="rs-ripple-item ripple-3">
                                    <div class="rs-ripple-figure">

                                        <div class="pre-title">
                                            <h5 class="title"> Seattle </h5>
                                        </div>

                                        <!-- Start Description -->

                                        <div class="ripple-desc">
                                            <p class="description"> 5214F Diamond Heights Blvd #553, USA</p>
                                        </div>
                                        <!-- End Description -->
                                    </div>
                                    <div class="pre-circle-ripple"></div>
                                </div>
                                <div class="mobile_item">
                                    <i class="remove-icon ri-close-line"></i>
                                    <div class="pre-title">
                                        <h5 class="title"> Seattle </h5>
                                    </div>
                                    <div class="ripple-desc">
                                        <p class="description"> 5214F Diamond Heights Blvd #553, USA</p>
                                    </div>
                                </div>
                                <div class="rs-ripple-item ripple-4">
                                    <div class="rs-ripple-figure">
                                        <div class="pre-title">
                                            <h5 class="title"> Chicago </h5>
                                        </div>
                                        <!-- Start Description -->
                                        <div class="ripple-desc">
                                            <p class="description"> 5214F Diamond Heights Blvd #553, USA</p>
                                        </div>
                                        <!-- End Description -->
                                    </div>
                                    <div class="pre-circle-ripple"></div>
                                </div>
                                <div class="mobile_item">
                                    <i class="remove-icon ri-close-line"></i>
                                    <div class="pre-title">
                                        <h5 class="title"> Chicago </h5>
                                    </div>
                                    <div class="ripple-desc">
                                        <p class="description"> 5214F Diamond Heights Blvd #553, USA</p>
                                    </div>
                                </div>
                                <div class="rs-ripple-item ripple-5">
                                    <div class="rs-ripple-figure">
                                        <div class="pre-title">
                                            <h5 class="title"> New York </h5>
                                        </div>
                                        <!-- Start Description -->
                                        <div class="ripple-desc">
                                            <p class="description"> 5214F Diamond Heights Blvd #553, USA</p>
                                        </div>
                                        <!-- End Description -->
                                    </div>
                                    <div class="pre-circle-ripple"></div>
                                </div>
                                <div class="mobile_item">
                                    <i class="remove-icon ri-close-line"></i>
                                    <div class="pre-title">
                                        <h5 class="title">New York </h5>
                                    </div>
                                    <div class="ripple-desc">
                                        <p class="description"> 5214F Diamond Heights Blvd #553, USA</p>
                                    </div>
                                </div>
                                <div class="rs-ripple-item ripple-6">
                                    <div class="rs-ripple-figure">

                                        <div class="pre-title">
                                            <h5 class="title"> Australia </h5>
                                        </div>

                                        <!-- Start Description -->

                                        <div class="ripple-desc">
                                            <p class="description"> 5214F Diamond Heights Blvd #553, USA</p>
                                        </div>
                                        <!-- End Description -->
                                    </div>
                                    <div class="pre-circle-ripple"></div>
                                </div>
                                <div class="mobile_item">
                                    <i class="remove-icon ri-close-line"></i>
                                    <div class="pre-title">
                                        <h5 class="title"> Australia </h5>
                                    </div>
                                    <div class="ripple-desc">
                                        <p class="description"> 5214F Diamond Heights Blvd #553, USA</p>
                                    </div>
                                </div>
                                <div class="rs-ripple-item ripple-7">
                                    <div class="rs-ripple-figure">

                                        <div class="pre-title">
                                            <h5 class="title"> Bangladesh </h5>
                                        </div>
                                        <!-- Start Description -->
                                        <div class="ripple-desc">
                                            <p class="description"> 5214F Diamond Heights Blvd #553, USA</p>
                                        </div>
                                        <!-- End Description -->
                                    </div>
                                    <div class="pre-circle-ripple"></div>
                                </div>
                                <div class="mobile_item">
                                    <i class="remove-icon ri-close-line"></i>
                                    <div class="pre-title">
                                        <h5 class="title"> Bangladesh </h5>
                                    </div>
                                    <div class="ripple-desc">
                                        <p class="description"> 5214F Diamond Heights Blvd #553, USA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <!-- about area start -->
        <section id="homeabout" class="rs-about-area section-space-bottom rs-about-one">
            <div class="container">
                <div class="row  g-5">
                    <div class="col-xl-7 col-lg-7">
                        <div class="rs-section-title-wrapper">
                            <span class="rs-section-subtitle has-theme-orange justify-content-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="15" viewBox="0 0 11 15" fill="none">
                           <path d="M3.14286 10L0 15L8.78104e-07 0L3.14286 5V10Z" fill="#EA5501"></path>
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M6.28571 10L3.14286 15L3.14286 10L4.71428 7.5L3.14286 5L3.14286 0L6.28571 5L6.28571 10ZM6.28571 10L7.85714 7.5L6.28571 5V0L11 7.5L6.28571 15V10Z"
                              fill="#EA5501"></path>
                        </svg>
                       WHO WE ARE
                     </span>
                            <h2 class="rs-section-title rs-split-text-enable split-in-fade">We work for you <span
                           class="rs-theme-orange">since 1989.</span>
                                Industrial around the world</h2>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="rs-about-content">
                            <div class="rs-about-description">
                                <p class="descrip-1">PT Pro Energi is a fuel provider company established in 2006 and head quartered in Jakarta. Pro Energi is a growing company that continuously moving forward to become a superior commercial fuel provider that constantly meeting its customers’ needs,
                    especially for the segment of manufacturing, mining, commercial, plantation, transportation, construction, also marine and fisheries.</p>
                            </div>
                            <div class="rs-about-btn">
                                <a class="rs-btn has-theme-orange has-icon has-bg" href="about.html">Discover More
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
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="rs-about-thumb wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="rs-about-bg-thumb" data-background="{{ asset('assets/images/service-all.jpg')}}"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end -->
@endsection

@section('script')
    <!-- GSAP Core + ScrollTrigger -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/scrollreveal.js/3.3.1/scrollreveal.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            gsap.registerPlugin(ScrollTrigger);

            // Debugging - Tampilkan informasi di console
            console.log("GSAP Loaded");

            // Gambar animasi dari kiri
            // gsap.from(".rs-gsap-thumb", {
            //     scrollTrigger: {
            //         trigger: ".rs-gsap-thumb",
            //         start: "top 80%",
            //         toggleActions: "play none none none",
            //         markers: true // Tampilkan garis debugging
            //     },
            //     x: -100,
            //     opacity: 0,
            //     duration: 2,
            //     ease: "power2.out",
            //     onStart: () => console.log("Animasi dimulai pada .rs-gsap-thumb"), // Debugging: cek apakah animasi dimulai
            // });
            

            // const slides = gsap.utils.toArray(".timeline-item");

            // const tween = gsap.to(".timeline-item", {
            // ease: "none",
            // xPercent: -100 * (slides.length - 1)
            // });

            // ScrollTrigger.create({
            // trigger: ".container-timeline",
            // start: "top top",
            // end: "+=500%",
            // scrub: true,
            // pin: true,
            // animation: tween
            // //markers: true
            // });

      
        // Geser .timeline-track, bukan per-item
        const track = document.querySelector(".timeline-track");
        const wrapper = document.querySelector(".timeline-wrapper");

        gsap.to(track, {
        x: () => {
            const trackWidth = track.scrollWidth;
            const wrapperWidth = wrapper.offsetWidth;
            const truckOffset = 150; // posisi truk dari kiri (margin-left + gambar)

            // Geser hanya sampai ujung kanan track pas lewat truk
            return -(trackWidth - truckOffset - 100); // buffer sedikit biar pas
        },
        ease: "none",
        scrollTrigger: {
            trigger: ".timeline-scroll-area",
            pin: ".timeline-wrapper",
            scrub: true,
            start: "top top",
            end: () => {
            const trackWidth = track.scrollWidth;
            const wrapperWidth = wrapper.offsetWidth;
            const truckOffset = 150;
            return trackWidth - wrapperWidth + truckOffset + 100;
            },
            // markers: true
        }
        });

        // const races = document.querySelector(".races");
        // console.log(races.offsetWidth)

        // function getScrollAmount() {
        // let racesWidth = races.scrollWidth;
        // return -(racesWidth - window.innerWidth);
        // }

        // const tween = gsap.to(races, {
        // x: getScrollAmount,
        // duration: 3,
        // ease: "none",
        // });


        // ScrollTrigger.create({
        // trigger:".racesWrapper",
        // start:"top 20%",
        // end: () => `+=${getScrollAmount() * -1}`,
        // pin:true,
        // animation:tween,
        // scrub:1,
        // invalidateOnRefresh:true,
        // markers:true
        // })

        

  });

    </script>
@endsection
