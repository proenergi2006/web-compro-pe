@extends('admin.layout.app')

@section('content')
<h1 class="h3 mb-3">Department Management</h1>

<div class="row">
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h4 class="card-title mb-0">Add Department</h4>
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
                    <form action="{{ route('store.article') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                
                        <div class="mb-3">
                            <label class="form-label">Department Name</label>
                            <input class="form-control form-control-lg" type="text" name="name"  />
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('admin.department')}}" class="btn btn-md btn-secondary">Back</a>
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
