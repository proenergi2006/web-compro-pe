@extends('admin.layout.app')

@section('content')
<h1 class="h3 mb-3">Candidates</h1>

<div class="row">
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                {{-- <h5 class="card-title mb-0">Articles</h5> --}}

                {{-- <a href="{{ route('trashed.articles')}}" class="btn btn-secondary"><i class="align-middle me-2" data-feather="trash"></i>trashed article</a> --}}
            </div>
            <div class="card-body">
                {{-- @if (session('success'))
                <span class="alert alert-success">
                        {{ session('success') }}
                </span>
                @endif --}}
               
                <table class="table table-hover responsive">
                    <thead>
                         <tr>
                            <th>No</th>
                            <th>Position</th>
                            <th>Total Candidate</th>
                            <th>Due Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vacancies as $candidate)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $candidate->title }}</td>
                            <td>{{ $candidate->candidate_count }}</td>
                            <td>{{ $candidate->due_date }} </td>
                            <td> <a class="btn btn-primary" href="{{ route('get.candidates', Crypt::encrypt($candidate->id)) }}"> detail
                            </a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script>
    $(document).ready(function() {
        // var candidate=$('#candidates-table').DataTable({
        //     responsive: true,
        //     scrollY:true,
        //     ajax: '{{ url("/admin-candidates/data") }}',
        //     stateSave: false,
        //     columns: [
        //         { data: 'id' },
        //         { data: 'title' },
        //         { data: 'name' },
        //         { data: 'education' },
        //         { data: 'created_at' },
        //         { data: 'action', orderable: false, searchable: false },
        //     ],
        //     drawCallback: function () {
        //     feather.replace(); // 🔥 render icons setelah data muncul
        // }
        // });
        
        function reloadVacanciesTable() {
            candidate.ajax.reload(null, true); // `true` = reset sort, filter, page
        }
        // $('.btn-delete').on('click', function (e) {
        //     alert()
        //     e.preventDefault();
        //     let id = $(this).data('id');
        //     if (confirm('Yakin mau hapus?')) {
        //         $.ajax({
        //             url: '/delete-article/' + id,
        //             type: 'DELETE',
        //             data: {
        //                 _token: '{{ csrf_token() }}'
        //             },
        //             success: function (response) {
        //                 alert('Artikel berhasil dihapus');
        //                 location.reload();
        //             }
        //         });
        //     }
        // });
           // CSRF Token setup for AJAX
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Delete handler with SweetAlert2
            $(document).on('click', '.btn-delete', function (e) {
                e.preventDefault();
                let id = $(this).data('id');

                Swal.fire({
                    title: '<h2>Apakah Anda yakin ingin hapus?</h2>',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonText: 'Batal',
                    confirmButtonText: 'Ya, hapus!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '/delete-vacancy/' + id,
                            type: 'DELETE',
                            success: function (response) {
                                Swal.fire('Berhasil!', response.message, 'success')
                                    .then(() => reloadVacanciesTable());
                            },
                            error: function () {
                                Swal.fire('Gagal!', 'Terjadi kesalahan.', 'error');
                            }
                        });
                    }
                });
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
