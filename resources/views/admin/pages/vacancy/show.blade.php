@extends('admin.layout.app')

@section('content')
<h1 class="h3 mb-3">Vacancies Management</h1>

<div class="row">
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h4 class="card-title mb-0">Preview</h4>
            </div>
            <div class="card-body">
                <div class="m-sm-2">
                    <div class="col-10 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h5 class="card-title text-black mb-0"><u>{{$vacancy->title}}</u></h5>
                            </div>
                            <div class="card-body">
                                <table class="mb-3">
                                    <tr>
                                        <th>Work Location </th>
                                        <td>: {{$vacancy->province->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Min year of Experience </th>
                                        <td>: {{$vacancy->min_year}} years</td>
                                    </tr>
                                    <tr>
                                        <th>Employment Status </th>
                                        <td>: {{$vacancy->employee_status}} </td>
                                    </tr>
                                    <tr>
                                        <th>Closing Date </th>
                                        <td>: {{$vacancy->due_date->format('d M Y')}}</td>
                                    </tr>
                                </table>
                                <h6><b>Description</b></h6>
                                <p class="card-text">{!!$vacancy->description!!}</p>
                                <h6><b>Requirement</b></h6>
                                <p class="card-text">{!!$vacancy->requirement!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('admin.vacancies')}}" class="btn btn-md btn-secondary">Back</a>
                <a href="{{ route('edit.vacancy', $vacancy->id)}}" class="btn btn-warning"><i data-feather="edit"></i> Edit</a>
                @if ($vacancy->status == 0)
                    <button class="btn btn-primary btn-publish" data-id="{{ $vacancy->id }}">
                        <i data-feather="upload"></i> Publish
                    </button> 
                @else
                    <button class="btn btn-secondary btn-draft" data-id="{{ $vacancy->id }}">
                        <i data-feather="file-text"></i> Draft
                    </button> 
                    
                @endif
              
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
$(document).ready(function () {
    $('.btn-publish').on('click', function () {
        const vacancyId = $(this).data('id');

        Swal.fire({
            title: '<h3>Apakah Anda yakin?</h3>',
            text: 'Lowongan pekerjaan ini akan dipublikasikan.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, publish!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect ke route publish
                window.location.href = '/publish-vacancy/' + vacancyId;
            }
        });
    });

    $('.btn-draft').on('click', function () {
        const vacancyId = $(this).data('id');

        Swal.fire({
            title: '<strong style="font-size: 20px;">Apakah Anda yakin ingin arsip?</strong>',
            text: "Lowongan kerja tidak akan tampil di website.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, arsip!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect ke route publish
                window.location.href = '/draft-vacancy/' + vacancyId;
            }
        });
    });
});
</script>
@endsection