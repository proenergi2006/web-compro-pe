@extends('admin.layout.app')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection
@section('content')
<h1 class="h3 mb-3">Candidate Detail</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Position - {{ $candidate->vacancy->title }}</h4>
            </div>
            <div class="card-body">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-6">
                                <table class="table responsive">
                                <tr>
                                    <th>Name</th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" value="{{ $candidate->name }}" readonly></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" value="{{ $candidate->email }} " readonly></td>
                                </tr>
                              <tr>
                                    <th>Phone</th>
                                    <td>:</td>
                                    <td class="d-flex align-items-center gap-2">
                                        <input type="text" class="form-control" value="{{ $candidate->phone }}" readonly>
                                        @php
                                            $phone = preg_replace('/[^0-9]/', '', $candidate->phone); // hanya angka
                                            $waPhone = ltrim($phone, '0'); // hapus 0 di depan
                                            $waPhone = '62' . $waPhone; // tambahkan kode negara Indonesia
                                        @endphp
                                        <a href="https://wa.me/{{ $waPhone }}" target="_blank" class="btn btn-success" title="Hubungi via WhatsApp">
                                            <i class="fab fa-whatsapp"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Location</th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" value="{{ $candidate->location }} " readonly></td>
                                </tr>
                                <tr>
                                    <th>Education</th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" value="{{ $candidate->education }} " readonly></td>
                                </tr>
                                <tr>
                                    <th>Major</th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" value="{{ $candidate->major }} " readonly></td>
                                </tr>
                                <tr>
                                    <th>Experience</th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" value="{{ $candidate->experience }} " readonly></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-xl-6">
                            <iframe src="{{ asset('storage/' . $candidate->cv_path)}}" width="100%" height="100%" frameborder="0"></iframe>
                        </div>
                    </div>

                </div>
                
                <div class="m-sm-2">
                    
                </div>
                <a href="{{ route('get.candidates', Crypt::encrypt($candidate->id_vacancy))}}" class="btn btn-md btn-secondary">Back</a>
              
            </div>
        </div>
    </div>
</div>
@endsection
