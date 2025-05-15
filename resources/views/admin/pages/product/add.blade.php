@extends('admin.layout.app')

@section('css')
<style>
    .ck-editor__editable_inline {
        min-height: 400px;
    }
</style>
@endsection

@section('content')
<h1 class="h3 mb-3">Products Management</h1>

<div class="row">
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h4 class="card-title mb-0">Add Product</h4>
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
                    <form action="{{ route('store.product') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input class="form-control form-control-lg" type="text" name="name" placeholder="Enter product name" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input class="form-control" type="file" name="image" id="image" accept="image/*">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="5" id="editor" ></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Quote</label>
                            <textarea name="quote" class="form-control" rows="6"></textarea>
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('admin.articles')}}" class="btn btn-md btn-secondary">Back</a>
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
</script>
@endsection
