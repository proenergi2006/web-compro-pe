@extends('company.layout.main')

@section('css')
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    
@endsection
@section('content')
    <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative">
        <div class="rs-breadcrumb-bg" data-background="{{ asset('assets/images/pe-bg/career_hi_rev.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="rs-breadcrumb-content-wrapper">
                    <div class="rs-breadcrumb-title-wrapper text-center">
                        <h1 class="rs-breadcrumb-title radius-10" style="background: #EA5501;display: inline-block;padding: 10px 40px;">  {!! __('message.title_career') !!}</h1>
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
                        <button data-bs-toggle="modal" data-bs-target="#exampleModalWizard" class="rs-btn2 has-theme-orange">{{ strtolower(__('message.apply')) }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- rs-postbox area end -->

@include('company.pages.wizard')
 <!-- Modal -->
    {{-- <div class="modal fade has-theme-orange" id="wizardModal" tabindex="-1" aria-labelledby="wizardModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="wizardForm">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Form Wizard</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id_vacancy" value="{{$vacancy->id}}">
                        <div class="step step-1">
                            <div class="mb-3">
                                <label>Nama:</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                             <div class="mb-3">
                                <label>Email:</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Lokasi:</label>
                                <input type="text" name="location" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Pendidikan Terakhir:</label>
                                <div class="rs-contact-input">
                                <select name="education" id="education">
                                    <option value="">Pilih Pendidikan Terakhir</option>
                                    <option value="SMA">SMA/SMK</option>
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                                </div>
                            </div>
                            <br><br>
                            <div class="mb-3">
                                <label>Jurusan:</label>
                                <input type="text" name="major" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Pengalaman:</label>
                                <textarea name="experience" class="form-control" rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="step step-2 d-none">
                            
                            <div class="mb-3">
                                <label>Upload CV (PDF/DOC):</label>
                                <input type="file" name="cv" class="form-control" accept=".pdf,.doc,.docx" required>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary prev-step d-none">Previous</button>
                        <button type="button" class="btn btn-primary next-step">Next</button>
                        <button type="submit" class="btn btn-success d-none">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div> --}}


@endsection

@section('script')
<!-- Don't forget to add it after jQuery and Bootstrap -->
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
           $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                    $('#wizardForm').submit(function (e) {
                        e.preventDefault();
                        const formData = new FormData(this);
                        // console.log(formData)

                        $.ajax({
                            url: '{{ route('form.submit') }}',
                            method: 'POST',
                            data: formData,
                            contentType: false,
                            processData: false,
                            success: function (res) {
                                alert(res.message);
                                $('#exampleModalWizard').modal('hide');
                                $('#wizardForm')[0].reset();
                                // currentStep = 1;
                                // showStep(currentStep);
                            },
                            error: function (err) {
                                console.log(err)
                                alert('Terjadi kesalahan. Pastikan semua data benar.');
                            }
                        });
                    });
           })
        // let currentStep = 1;

        // function showStep(step) {
        //     $('.step').addClass('d-none');
        //     $('.step-' + step).removeClass('d-none');
        //     $('.prev-step').toggleClass('d-none', step === 1);
        //     $('.next-step').toggleClass('d-none', step === 2);
        //     $('button[type="submit"]').toggleClass('d-none', step !== 2);
        // }

        // $('.next-step').click(function() {
        //     if (currentStep === 1) {
        //         const name = $('input[name="name"]').val();
        //         console.log(name)
        //         if (!name) {
        //             alert('Nama wajib diisi!');
        //             return;
        //         }
        //         currentStep++;
        //         showStep(currentStep);
        //     }
        // });

        // $('.prev-step').click(function() {
        //     currentStep--;
        //     showStep(currentStep);
        // });
      


        // Init step
        // showStep(currentStep);
    </script>
@endsection
