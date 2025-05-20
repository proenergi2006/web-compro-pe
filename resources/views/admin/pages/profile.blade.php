@extends('admin.layout.app')

@section('content')
<h1 class="h3 mb-3">Profile Management</h1>

<div class="row">
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h5 class="card-title mb-0">Detail</h5>

                {{-- <a href="{{ route('trashed.articles')}}" class="btn btn-secondary"><i class="align-middle me-2" data-feather="trash"></i>trashed article</a> --}}
            </div>
            <div class="card-body">
                <table class="table responsive">
                    <tr>
                        <th>Name</th>
                        <td>:</td>
                        <td><input type="text" class="form-control" value="{{ $user->name }}" readonly></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>:</td>
                        <td><input type="text" class="form-control" value="{{ $user->email }} " readonly></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script>
    </script>
    <!-- SweetAlert2 Script (Untuk Menampilkan Alert) -->
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ session('error') }}',
            });
        </script>
    @endif
@endsection
