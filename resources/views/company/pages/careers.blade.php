@extends('company.layout.main')

@section('content')
    <!-- breadcrumb area start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative">
        <div class="rs-breadcrumb-bg" data-background="{{ asset('assets/images/pe-bg/career_hi_rev.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="rs-breadcrumb-content-wrapper">
                    <div class="rs-breadcrumb-title-wrapper text-center">
                        <h2 class="rs-breadcrumb-title radius-10" style="background: #EA5501;display: inline-block;padding: 10px 40px;">  {!! __('message.title_career') !!}</h2>
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
                            <h3 class="rs-postbox-details-title wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
                                {!! __('message.sub') !!}
                            </h3>
                        </div>
                        <div class="rs-postbox-details-content">
                            <p class="wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s" style="white-space: pre-line;font-size:18px">  {!! __('message.content_career') !!}</p>
                                <h6 class="wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">   {!! __('message.ol') !!}</h6>
                                <ol type="1"  class="wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
                                    <li>   {!! __('message.li_1') !!}</li>
                                    <li>   {!! __('message.li_2') !!}</li>
                                    <li>   {!! __('message.li_3') !!}</li>
                                </ol>
                               
                        </div>
                       
                    </div>
                </div>
               
            </div>
        </div>
    </section>

  <!-- services style 03 -->
<section class="rs-elements-services-area section-space-bottom rs-services-six">
    <div class="container">
        <div class="row  g-5 justify-content-center section-title-space align-items-center">
            <div class="col-xxl-8 col-xl-9 col-lg-9">
                <div class="rs-section-title-wrapper text-center">
                    <span class="rs-section-subtitle has-theme-orange rs-split-text-enable split-in-fade" style="font-size: 3rem">
                        {{__('message.avail')}}
                    </span>
                </div>
            </div>
        </div>
        <div class="row g-5">
            {{-- <div class="card orange-bg radius-16">
                <div class="card-body">
                    <div class="form-group">
                        <label><strong>Approved :</strong></label>
                        <select id='approved' class="form-control" style="width: 200px">
                            <option value="">Approved</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
            </div> --}}
            <div class="table-responsive">
            <table class="table table-bordered table-responsive">
                <thead>
                    <th>No</th>
                    <th>Position</th>
                    <th>Work Location</th>
                    <th>Experience</th>
                    <th>Closing Date</th>
                    <th>Detail</th>
                </thead>
                <tbody>
                    @forelse ($vacancies as $vacancy)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $vacancy->title }}</td>
                        <td>{{ $vacancy->province->name }}</td>
                        <td>{{ $vacancy->min_year }} years</td>
                        <td>{{ $vacancy->due_date->format('d M Y') }}</td>
                        <td>  <a class="rs-btn3 has-theme-orange has-bg" href="{{ route('web.vacancy.show', $vacancy->slug) }}"> detail
                        </a></td>
                    </tr>
                    @empty
                    <tr><td colspan="6" class="text-center has-theme-red">  <div class="alert alert-secondary text-center">
                        {{ __('message.nocareer')}}
                    </div>
                        </td>
                    </tr>
                    
                    @endforelse

                </tbody>
            </table>
        </div>
        </div>
    </div>
</section>
<!-- services style 03 -->

<div class="row">
    <div class="col-xl-6">
        <div class="pagination-wrapper mt-40">
            <div class="common-pagination text-start">
                <nav>
                    {{ $vacancies->links('vendor.pagination.custom') }}
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- pagination style end -->
<!-- rs-postbox area end -->

 <!-- faq area start -->
        <section class="rs-faq-area section-space-bottom">
            <div class="container">
                <div class="row  g-5 justify-content-center section-title-space align-items-center">
                    <div class="col-xxl-8 col-xl-8 col-lg-9 col-md-10">
                        <div class="rs-section-title-wrapper text-center">
                               {{-- <span class="rs-section-subtitle has-theme-orange rs-split-text-enable split-in-fade" style="font-size: 3rem">
                                    {{__('message.avail')}}
                                </span> --}}
                            <h4 class="rs-section-title has-theme-orange rs-split-text-enable split-in-fade">{{__('message.faq')}}</h4>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="rs-faq-content rs-accordion-one">
                            <div class="accordion-wrapper">
                                <div class="accordion" id="accordionExampleOne">
                                    <div class="rs-accordion-item">
                                        <h4 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                {{ __('message.faq_1')}}
                                                <span class="accordion-btn"></span>
                                            </button>
                                        </h4>
                                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExampleOne">
                                            <div class="accordion-body">{{ __('message.faq_1_content')}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rs-accordion-item">
                                        <h6 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                               {{ __('message.faq_3')}}
                                                <span class="accordion-btn"></span>
                                            </button>
                                        </h6>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExampleOne">
                                            <div class="accordion-body">{{ __('message.faq_2_content')}}</div>
                                        </div>
                                    </div>
                                    <div class="rs-accordion-item">
                                        <h6 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                              {{ __('message.faq_3')}}
                                                <span class="accordion-btn"></span>
                                            </button>
                                        </h6>
                                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExampleOne">
                                            <div class="accordion-body">
                                              {{ __('message.faq_3_content')}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rs-accordion-item">
                                        <h6 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                               {{ __('message.faq_4')}}
                                                <span class="accordion-btn"></span>
                                            </button>
                                        </h6>
                                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExampleOne">
                                            <div class="accordion-body">
                                                {{ __('message.faq_4_content')}}

                                            </div>
                                        </div>
                                    </div>
                                    <div class="rs-accordion-item">
                                        <h6 class="accordion-header" id="headingFive">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                              {{ __('message.faq_5')}}
                                                <span class="accordion-btn"></span>
                                            </button>
                                        </h6>
                                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExampleOne">
                                            <div class="accordion-body">
                                                {{ __('message.faq_5_content')}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rs-accordion-item">
                                        <h6 class="accordion-header" id="headingSix">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                             {{ __('message.faq_6')}}
                                                <span class="accordion-btn"></span>
                                            </button>
                                        </h6>
                                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExampleOne">
                                            <div class="accordion-body">
                                               {{ __('message.faq_6_content')}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rs-accordion-item">
                                        <h6 class="accordion-header" id="headingSeven">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                             {{ __('message.faq_7')}}
                                                <span class="accordion-btn"></span>
                                            </button>
                                        </h6>
                                        <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExampleOne">
                                            <div class="accordion-body">
                                              {{ __('message.faq_7_content')}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rs-accordion-item">
                                        <h6 class="accordion-header" id="headingEight">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                              {{ __('message.faq_8')}}
                                                <span class="accordion-btn"></span>
                                            </button>
                                        </h6>
                                        <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExampleOne">
                                            <div class="accordion-body">
                                            {{ __('message.faq_8_content')}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rs-accordion-item">
                                        <h6 class="accordion-header" id="headingNine">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                             {{ __('message.faq_9')}}
                                                <span class="accordion-btn"></span>
                                            </button>
                                        </h6>
                                        <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExampleOne">
                                            <div class="accordion-body">
                                              {{ __('message.faq_9_content')}}
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
        <!-- faq area end -->
@endsection
