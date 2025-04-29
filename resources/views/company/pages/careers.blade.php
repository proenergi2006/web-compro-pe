@extends('company.layout.main')

@section('content')
    <!-- breadcrumb area start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative">
        <div class="rs-breadcrumb-bg" data-background="{{ asset('assets/images/pe-bg/career_hi_rev.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="rs-breadcrumb-content-wrapper">
                    <div class="rs-breadcrumb-title-wrapper text-center">
                        <h1 class="rs-breadcrumb-title" style="background: #db4052;display: inline-block;font-size:3em;padding: 14px 50px;">  {!! __('message.title_career') !!}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="rs-postbox-area section-space-bottom">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-12 col-lg-12">
                    <div class="rs-postbox-details-wrapper">
                        <div class="rs-postbox-content rs-split-text-enable split-in-fade">
                            <h3 class="rs-postbox-details-title">
                                {!! __('message.sub') !!}
                            </h3>
                        </div>
                        <div class="rs-postbox-details-content">
                            <p style="white-space: pre-line;">  {!! __('message.content_career') !!}
                                <h6 class="wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">   {!! __('message.ol') !!}</h6>
                                <ol type="1"  class="wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
                                    <li>   {!! __('message.li_1') !!}</li>
                                    <li>   {!! __('message.li_2') !!}</li>
                                    <li>   {!! __('message.li_3') !!}</li>
                                </ol>
                               
                          </p>
                           
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>

@endsection
