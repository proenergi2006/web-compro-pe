@extends('admin.layout.app')
{{-- 
@section('css')
<style>
    .ck-editor__editable_inline {
        min-height: 400px;
    }
</style>
@endsection --}}

@section('content')
<h1 class="h3 mb-3">Vacancies Management</h1>

<div class="row">
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h4 class="card-title mb-0">Edit Vacancy</h4>
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
                    <form action="{{ route('update.vacancy', $vacancy->id) }}" method="POST" enctype="multipart/form-data" id="update-vacancy-form">
                        @csrf
                        @method('PUT') <!-- Method PUT di sini untuk memverifikasi update -->
                        <div class="col-md-7 mb-3">
                            <label class="form-label">Title</label>
                            <input class="form-control form-control-lg" type="text" name="title" value="{{ old('title', $vacancy->title) }}"/>
                        </div>
                        <div class="col-md-7 mb-3">
                            <label class="form-label">Department</label>
                            <select name="department_id" class="form-select mb-3">
                                @foreach ($departments as $dept)
                                    <option value="{{ $dept->id }}" {{ $dept->id == $vacancy->id_dept ? 'selected' : '' }}>
                                        {{ $dept->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="10" id="editor" >{{ old('title', $vacancy->description) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Requirement</label>
                            <textarea name="requirement" class="form-control" rows="10" id="editor2" >{{ old('title', $vacancy->requirement) }}</textarea>
                        </div>
                        <div class="col-md-5 mb-3">
                            <label class="form-label">Due Date</label>
                            <input class="form-control form-control-lg" type="date" name="due_date"  value="{{ old('title', $vacancy->due_date) }}"/>
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('admin.vacancies')}}" class="btn btn-md btn-secondary">Back</a>
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
   document.querySelectorAll('#editor, #editor2').forEach((el) => {
        ClassicEditor
            .create(el)
            .catch(error => {
                console.error(error);
            });
    });

        $('#update-article-form').on('submit', function(e) {
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
    });
</script>
@endsection
