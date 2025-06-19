@extends('admin.layout.app')

@section('content')
<h1 class="h3 mb-3">Testimonials Management</h1>

<div class="row">
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h4 class="card-title mb-0">Preview</h4>
            </div>
            <div class="card-body">
                <div class="m-sm-2">
                    <div class="col-7 d-flex">
                       <div class="card mb-3">
                            <div class="card-body text-center">
                                <img src="{{ asset('storage/' . $testimonial->image) }}"  class="img-fluid rounded-circle mb-2" width="128" height="128" />
                                <h5 class="card-title mb-0">{{$testimonial->name}}</h5>
                                <div class="text-muted mb-2">{{$testimonial->position}}</div>
                            </div>
                            <hr class="my-0" />
                            <div class="card-body">
                                <p class="card-text">{!!$testimonial->testimonial!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                   <a href="{{ route('admin.testimonials')}}" class="btn btn-md btn-secondary">Back</a>
                <a href="{{ route('edit.testimonial', Crypt::encrypt($testimonial->id))}}" class="btn btn-warning"><i data-feather="edit"></i> Edit</a>
                @if ($testimonial->status == 0)
                    <button class="btn btn-primary btn-publish" data-id="{{ $testimonial->id }}">
                        <i data-feather="upload"></i> Publish
                    </button> 
                @else
                    <button class="btn btn-info btn-draft" data-id="{{ $testimonial->id }}">
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
        const testimonialId = $(this).data('id');

        Swal.fire({
            title: '<strong style="font-size: 20px;">Apakah Anda yakin ingin publish?</strong>',
            text: "Testimonial akan ditampilkan di website.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, publish!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect ke route publish
                window.location.href = '/publish-testimonial/' + testimonialId;
            }
        });
    });

    $('.btn-draft').on('click', function () {
        const testimonialId = $(this).data('id');

        Swal.fire({
            title: '<strong style="font-size: 20px;">Apakah Anda yakin ingin arsip?</strong>',
            text: "Testimonial tidak akan tampil di website.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, arsip!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect ke route publish
                window.location.href = '/draft-testimonial/' + testimonialId;
            }
        });
    });
});
</script>
@endsection