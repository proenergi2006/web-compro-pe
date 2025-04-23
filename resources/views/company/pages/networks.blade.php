@extends('company.layout.main')

@section('content')
    <!-- breadcrumb area start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative">
        <div class="rs-breadcrumb-bg" data-background="{{ asset('assets/images/pe-bg/network_hi_rev.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="rs-breadcrumb-content-wrapper">
                    <div class="rs-breadcrumb-title-wrapper text-center">
                        <h1 class="rs-breadcrumb-title" style="background: #db4052;display: inline-block;font-size:4em;padding: 14px 50px;">Networks</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- services area start -->
    <section class="rs-services-area section-space rs-services-one p-relative">
        <div class="container">
            @include('company.pages.maps')
        </div>
    </section>
    
    <!-- services area end -->
@endsection
