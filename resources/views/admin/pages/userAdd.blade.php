@extends('admin.layout.app')

@section('content')
<h1 class="h3 mb-3">User Management</h1>

<div class="row">
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h5 class="card-title mb-0">Add New User</h5>

                {{-- <a href="{{ route('trashed.articles')}}" class="btn btn-secondary"><i class="align-middle me-2" data-feather="trash"></i>trashed article</a> --}}
            </div>
            <div class="card-body">
               <form method="POST" action="{{ route('user.register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-2 col-form-label">{{ __('Name') }}</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-2 col-form-label">{{ __('Email Address') }}</label>

                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="role" class="col-md-1 col-form-label">Role</label>
                            <div class="col-md-3">
                               <select name="role" id="role" class="form-select" required>
                                    <option value="">Choose Role</option>
                                    <option value="admin">Admin</option>
                                    <option value="article">Article</option>
                                    <option value="content">Content</option>
                                    <option value="hr">HR</option>
                                </select>
                            </div>
                        </div>
                        {{-- <div class="row mb-3">
                           <label for="role" class="col-md-2 col-form-label">Role</label>

                            <div class="col-md-6">
                               <select name="role" id="role" class="form-select" required>
                                    <option value="">Choose Role</option>
                                    <option value="admin">Admin</option>
                                    <option value="article">Article</option>
                                    <option value="content">Content</option>
                                    <option value="hr">HR</option>
                                </select>
                            </div>
                        </div> --}}

                        <div class="row mb-3">
                            <label for="password" class="col-md-2 col-form-label">{{ __('Password') }}</label>

                            <div class="col-md-4">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-2 col-form-label">{{ __('Confirm Password') }}</label>

                            <div class="col-md-4">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h5 class="card-title mb-0">List User</h5>
            </div>
            <div class="card-body">
                  <table class="table table-hover my-1 table-responsive" id="users-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                     
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script>
       var article=$('#users-table').DataTable({
            responsive: true,
            scrollY:true,
            ajax: '{{ url("/admin-users/data") }}',
            stateSave: false,
            columns: [
                { data: 'no' },
                { data: 'name' },
                { data: 'email' },
                { data: 'role' },
            ],
            drawCallback: function () {
            feather.replace(); // 🔥 render icons setelah data muncul
        }
        });
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
