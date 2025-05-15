@extends('company.layout.main')

@section('content')
    <!-- breadcrumb area start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative">
        <div class="rs-breadcrumb-bg" data-background="{{ asset('assets/images/pe-bg/career_hi_rev.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="rs-breadcrumb-content-wrapper">
                    <div class="rs-breadcrumb-title-wrapper text-center">
                        <h1 class="rs-breadcrumb-title" style="display: inline-block;font-size:3em;padding: 14px 50px;">  {!! __('message.title_career') !!}</h1>
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

  <!-- services style 03 -->
<section class="rs-elements-services-area section-space-bottom rs-services-six">
    <div class="container">
        <div class="row  g-5 justify-content-center section-title-space align-items-center">
            <div class="col-xxl-8 col-xl-9 col-lg-9">
                <div class="rs-section-title-wrapper text-center">
                    <span class="rs-section-subtitle has-theme-orange" style="font-size: 3rem">
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
@endsection
