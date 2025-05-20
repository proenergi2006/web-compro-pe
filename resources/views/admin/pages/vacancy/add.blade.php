@extends('admin.layout.app')

@section('css')
{{-- <style>
    .ck-editor__editable_inline {
        min-height: 400px;
    }
</style> --}}
<link href="{{ asset('adm_assets/css/select2.min.css')}}" rel="stylesheet" />

@endsection

@section('content')
<h1 class="h3 mb-3">Vancancies Management</h1>

<div class="row">
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h4 class="card-title mb-0">Add Vacancy</h4>
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
                    <form action="{{ route('store.vacancy') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                
                        <div class="col-md-7 mb-3">
                            <label class="form-label">Title</label>
                            <input class="form-control form-control-lg" type="text" name="title" placeholder="Enter your title" required/>
                        </div>
                        <div class="col-md-7 mb-3">
                            <label class="form-label">Department</label>
                            <select name="department_id" class="form-select mb-3" required>
                                <option value="" selected>choose department</option>
                                @foreach ($departments as $dept)
                                    <option value="{{ $dept->id }}">{{ $dept->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-7 mb-3">
                            <label class="form-label">Work Location</label>
                            <select name="location_id" class="form-select mb-3 location_id" required>
                                <option value="" selected>choose work location</option>
                                @foreach ($provinces as $prov)
                                    <option value="{{ $prov->id }}">{{ $prov->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-7 mb-3">
                            <label class="form-label">Employee Status</label>
                            <select name="employee_status" class="form-select mb-3" required>
                                <option value="" selected>choose employee status</option>
                                <option value="permanent">Permanet</option>
                                <option value="contract">Contract</option>
                                <option value="internship">Internship</option>
                            </select>
                        </div>
                        <div class="col-md-7 mb-3">
                            <label class="form-label">Min year of experience</label>
                            <input class="form-control form-control-lg" type="text" name="min_year" required/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="10" id="editor" ></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Requirement</label>
                            <textarea name="requirement" class="form-control" rows="10" id="editor2" ></textarea>
                        </div>
                        <div class="col-md-5 mb-3">
                            <label class="form-label">Due Date</label>
                            <input class="form-control form-control-lg" type="date" name="due_date" />
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
<script src="{{ asset('adm_assets/js/select2.min.js')}}"></script>

<script>
    $(document).ready(function() {
        $('.location_id').select2();
    });
   document.querySelectorAll('#editor, #editor2').forEach((el) => {
    ClassicEditor
        .create(el)
        .catch(error => {
            console.error(error);
        });
});


</script>
@endsection
