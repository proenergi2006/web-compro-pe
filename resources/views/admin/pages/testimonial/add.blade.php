@extends('admin.layout.app')

@section('css')
<style>
    .ck-editor__editable_inline {
        min-height: 300px;
    }
</style>
@endsection

@section('content')
<h1 class="h3 mb-3">Testimonials Management</h1>

<div class="row">
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h4 class="card-title mb-0">Add Testimonial</h4>
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
                    <form action="{{ route('store.testimonial') }}" method="POST" enctype="multipart/form-data" id="add-testi-form">
                        @csrf
                
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input class="form-control form-control-lg" type="text" name="name" placeholder="Enter name" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Position</label>
                            <input class="form-control form-control-lg" type="text" name="position" placeholder="Enter position" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input class="form-control" type="file" name="image" id="image" accept="image/*" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Testimonial</label>
                            <textarea name="testimonial" class="form-control" rows="5" id="editor" ></textarea>
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('admin.testimonials')}}" class="btn btn-md btn-secondary">Back</a>
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

    $('#add-testi-form').on('submit', function(e) {
        e.preventDefault(); // Mencegah form disubmit langsung

        // Tampilkan SweetAlert untuk konfirmasi
        Swal.fire({
            title: '<strong style="font-size: 20px;">Apakah Anda yakin ingin simpan data?</strong>',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, simpan!',
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
