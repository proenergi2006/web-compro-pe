@extends('admin.layout.app')

@section('css')
<style>
    /* .ck-editor__editable_inline {
        min-height: 300px;
    } */
</style>
@endsection

@section('content')
<h1 class="h3 mb-3">Testimonials Management</h1>

<div class="row">
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h4 class="card-title mb-0">Edit Testimonial</h4>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <span class="badge bg-success">
                        {{ session('success') }}
                    </span>
                @endif

                @if ($errors->any())
                    <span class="badge bg-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </span>
                @endif
                <div class="m-sm-2">
                    <form action="{{ route('update.testimonial', $testimonial->id) }}" method="POST" enctype="multipart/form-data" id="update-testi-form">
                        @csrf
                        @method('PUT') 
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input class="form-control form-control-lg" type="text" name="name" required value="{{ old('name', $testimonial->name) }}"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Position</label>
                            <input class="form-control form-control-lg" type="text" name="position" required value="{{ old('position', $testimonial->position) }}" />
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-3">

                                    <label>Image:</label><br>
                                    @if($testimonial->image)
                                        <img src="{{ asset('storage/' . $testimonial->image) }}" width="200">
                                    @else
                                        <p><em>Belum ada image</em></p>
                                    @endif
                                </div>
                                <div class="col-md-8">
                                    <label class="form-label">image</label>
                                    <input class="form-control" type="file" name="image" id="image" accept="image/*">
                                </div>
                                
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Testimonial</label>
                            <textarea name="testimonial" class="form-control" rows="5" id="editor" >{{ old('testimonial', $testimonial->testimonial) }}</textarea>
                        </div>
                       
                        <a href="{{ route('admin.testimonials')}}" class="btn btn-md btn-secondary">Back</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                        {{-- <div class="text-center mt-3">
                            <a href="index.html" class="btn btn-lg btn-primary">Add Article</a>
                            <!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });

    $('#update-testi-form').on('submit', function(e) {
        e.preventDefault(); // Mencegah form disubmit langsung

        // Tampilkan SweetAlert untuk konfirmasi
        Swal.fire({
            title: '<strong style="font-size: 20px;">Apakah Anda yakin ingin simpan perubahan?</strong>',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, perbarui!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika dikonfirmasi, kirimkan form
                $(this).off('submit').submit(); // Form disubmit
            }
        });
    })
</script>
@endsection
