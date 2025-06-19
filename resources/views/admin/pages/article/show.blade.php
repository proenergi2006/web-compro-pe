@extends('admin.layout.app')

@section('content')
<h1 class="h3 mb-3">Articles Management</h1>

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
                            <img class="card-img-top" width="150" src="{{ asset('storage/' . $article->thumbnail) }}">
                            
                            <div class="card-header">
                                <h5 class="card-title mb-0">{{$article->title}}</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">{!!$article->content!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('admin.articles')}}" class="btn btn-md btn-secondary">Back</a>
                <a href="{{ route('edit.article', Crypt::encrypt($article->id))}}" class="btn btn-warning"><i data-feather="edit"></i> Edit</a>
                @if ($article->status == 0)
                    <button class="btn btn-primary btn-publish" data-id="{{ $article->id }}">
                        <i data-feather="upload"></i> Publish
                    </button> 
                @else
                    <button class="btn btn-secondary btn-draft" data-id="{{ $article->id }}">
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
        const articleId = $(this).data('id');

        Swal.fire({
            title: '<strong style="font-size: 20px;">Apakah Anda yakin ingin publish?</strong>',
            text: "Artikel akan ditampilkan di website.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, publish!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect ke route publish
                window.location.href = '/publish-article/' + articleId;
            }
        });
    });

    $('.btn-draft').on('click', function () {
        const articleId = $(this).data('id');

        Swal.fire({
            title: '<strong style="font-size: 20px;">Apakah Anda yakin ingin arsip?</strong>',
            text: "Artikel tidak akan tampil di website.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, arsip!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect ke route publish
                window.location.href = '/draft-article/' + articleId;
            }
        });
    });
});
</script>
@endsection