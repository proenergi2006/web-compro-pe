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
                        <th width="15%">Name</th>
                        <td width="5%">:</td>
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

<div class="row">
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h5 class="card-title mb-0">Change Password</h5>
                {{-- <a href="{{ route('trashed.articles')}}" class="btn btn-secondary"><i class="align-middle me-2" data-feather="trash"></i>trashed article</a> --}}
            </div>
          
            <div class="card-body">
                 @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul style="margin: 0;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <table class="table responsive">
                    <form method="POST" id="change-password-form" action="{{ route('change.password') }}">
                        @csrf
                    <tr>
                        <th width="15%">Current Password</th>
                        <td width="5%">:</td>
                        <td><input type="password" name="current_password" class="form-control"></td>
                    </tr>
                    <tr>
                        <th>New password</th>
                        <td>:</td>
                        <td><input type="password" name="new_password" class="form-control"></td>
                    </tr>
                    <tr>
                        <th>confirm password</th>
                        <td>:</td>
                        <td><input type="password" name="new_password_confirmation" class="form-control"></td>
                    </tr>
                </table>
                
                <button type="submit" class="btn btn-primary">Change Password</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script>
    $('#change-password-form').on('submit', function(e) {
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
