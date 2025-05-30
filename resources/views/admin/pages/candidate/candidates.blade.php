@extends('admin.layout.app')

@section('content')
<h1 class="h3 mb-3">Candidates</h1>

<div class="row">
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h5 class="card-title text-black">Position - {{$vacancy->title}} </h5>
                <div class="col-xl-4">
                    <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-0">
                                <h5 class="card-title">Total Applicants</h5>
                            </div>

                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="align-middle" data-feather="users"></i>
                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3">{{ $vacancy->candidates->count() }}</h1>
                    </div>
                </div>
                </div>
                
                {{-- <a href="{{ route('trashed.articles')}}" class="btn btn-secondary"><i class="align-middle me-2" data-feather="trash"></i>trashed article</a> --}}
            </div>
            <div class="card-body">
                {{-- @if (session('success'))
                <span class="alert alert-success">
                        {{ session('success') }}
                </span>
                @endif --}}
               
                <table class="table table-hover responsive" id="candidates-table">
                    <thead>
                         <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Education</th>
                            <th>Major</th>
                            <th>Apply Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<a href="{{ route('admin.candidates')}}" class="btn btn-md btn-secondary">Back</a>


@endsection

@section('scripts')

<script>
    $(document).ready(function() {
        var candidate=$('#candidates-table').DataTable({
            responsive: true,
            scrollY:true,
            ajax: {
                url: '{{ url("/admin-candidates/data") }}',
                data: function (d) {
                    d.id_vacancy = window.location.pathname.split('/')[2]; // ambil dari URL segmen ke-2
                }
            },
            stateSave: false,
            columns: [
                { data: 'no' },
                { data: 'name' },
                { data: 'education' },
                { data: 'major' },
                { data: 'created_at' },
                { data: 'action', orderable: false, searchable: false },
            ],
            drawCallback: function () {
            feather.replace(); // 🔥 render icons setelah data muncul
        }
        });
        
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
            $(document).on('click', '.btn-cv', function (e) {
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
