@extends('company.layout.main')

@section('content')
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
    <!-- postbox area start -->
    <section class="rs-postbox-area section-space-bottom mt-3">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-12 col-lg-12">
                    <div class="rs-postbox-details-wrapper">
                        <div class="flex justify-center items-center">
                            <div class="rs-postbox-content">
                                {{-- <div class="rs-postbox-meta-list">
                                    <span class="rs-postbox-meta-text">{{ $vacancy->department->name}}</span>
                                </div> --}}
                                <p class="text-white" style="background: #EA5501; border-radius:20px; padding:7px 7px 7px 17px;font-weight:bold;font-size:17px">Job Information:</p>
                                {{-- <h5>
                                    {{ $vacancy->title}}
                                </h5> --}}
                            </div>
                        </div>

                        <div class="rs-postbox-details-content mb-3">
                           <table class="mb-3" style="font-size: 18px;margin-left:10px">
                            <tr>
                                <th class="pt-3">Position Name </th>
                                <td class="pt-3">:&nbsp;&nbsp;{{$vacancy->title}}</td>
                            </tr>
                            <tr>
                                <th class="pt-3">Work Location </th>
                                <td class="pt-3">:&nbsp;&nbsp;{{$vacancy->province->name}}</td>
                            </tr>
                            <tr>
                                <th class="pt-3">Min year of Experience </th>
                                <td class="pt-3">:&nbsp;&nbsp;{{$vacancy->min_year}} years</td>
                            </tr>
                            <tr>
                                <th class="pt-3">Employment Status </th>
                                <td class="pt-3">:&nbsp;&nbsp;{{$vacancy->employee_status}} </td>
                            </tr>
                            <tr>
                                <th class="pt-3">Closing Date </th>
                                <td class="pt-3">:&nbsp;&nbsp;{{$vacancy->due_date->format('d M Y')}}</td>
                            </tr>
                        </table>
                        </div>
                        @if(!empty($vacancy->description))
                        <div class="rs-postbox-details-content mb-4">
                            <h6 class="text-white" style="background: #EA5501; border-radius:20px; padding:7px 7px 7px 17px;font-weight:bold;font-size:17px">Description :</h6>
                            <div class="pt-2" style="font-size: 18px;margin-left:10px">
                              {!! html_entity_decode($vacancy->description) !!}
                            </div>
                        </div>
                        @endif

                        @if(!empty($vacancy->requirement))
                        
                        <div class="rs-postbox-details-content">
                            <h6 class="text-white" style="background: #EA5501; border-radius:20px; padding:7px 7px 7px 17px;font-weight:bold;font-size:17px">Requirement:</h6>
                            <div class="pt-2" style="font-size: 18px;margin-left:10px">
                            {!! html_entity_decode($vacancy->requirement) !!}
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="rs-cart-coupon">
                    <div class="rs-cart-coupon-input  align-items-center">
                        <a href="{{ url(app()->getLocale() . '/careers') }}" class="rs-btn2 has-theme-blue">back</a>
                        <button type="submit" class="rs-btn2 has-theme-orange">{{ __('message.apply')}}
                        </button>
                    </div>
                </div>
                {{-- <div class="col-xl-4 col-lg-4">
                    <div class="rs-sidebar-wrapper rs-sidebar-sticky">
                        <div class="sidebar-widget mb-30">
                            <h5 class="sidebar-widget-title">Recent Posts</h5>
                            <div class="sidebar-widget-content">
                                <div class="sidebar-blog-item-wrapper">
                                    <div class="sidebar-blog-item">
                                        <div class="sidebar-blog-thumb">
                                            <a href="blog-details.html">
                                                <img src="assets/images/blog/sidebar/blog-sm-01.png" alt="image">
                                            </a>
                                        </div>
                                        <div class="sidebar-blog-content">
                                            <h6 class="sidebar-blog-title">
                                                <a href="blog-details.html"> Construction of a new high tech plant</a>
                                            </h6>
                                            <div class="sidebar-blog-meta">
                                                <i class="ri-calendar-line"></i>
                                                <span>May 20, 2024</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- rs-postbox area end -->

@endsection
