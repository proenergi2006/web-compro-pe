@extends('company.layout.main')
@section('content')
    <div class="wrapper">
        <div class="rs-gsap-wrapper justify-content-center">
            <div class="rs-gsap-item">
                <div class="rs-gsap-thumb">
                    <img src="{{ asset('assets/images/pe-service.jpg') }}" alt="image">
                </div>
            </div>
        </div>

        <div class="row text-center mt-5 g-5">
            <div class="rs-testimonial-btn">
                <a class="rs-btn" href="/services">
                    <i class="ri-play-fill"></i> LEARN MORE
                </a>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- GSAP Core + ScrollTrigger -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            gsap.registerPlugin(ScrollTrigger);

            // Debugging - Tampilkan informasi di console
            console.log("GSAP Loaded");

            // Gambar animasi dari kiri
            gsap.from(".rs-gsap-thumb", {
                scrollTrigger: {
                    trigger: ".rs-gsap-thumb",
                    start: "top 80%",
                    toggleActions: "play none none none",
                    markers: true // Tampilkan garis debugging
                },
                x: -100,
                opacity: 0,
                duration: 2,
                ease: "power2.out",
                onStart: () => console.log("Animasi dimulai pada .rs-gsap-thumb"), // Debugging: cek apakah animasi dimulai
            });

            // Tombol animasi dari bawah
            gsap.from(".rs-testimonial-btn", {
                scrollTrigger: {
                    trigger: ".rs-testimonial-btn",
                    start: "top 90%",
                    toggleActions: "play none none none",
                    markers: true
                },
                y: 50,
                opacity: 0,
                duration: 1.5,
                ease: "back.out(1.7)",
                onStart: () => console.log("Animasi dimulai pada .rs-testimonial-btn"), // Debugging: cek animasi tombol
            });
        });
    </script>
@endsection
