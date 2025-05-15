@extends('admin.layout.app')

@section('content')
<h1 class="h3 mb-3">Vacancies Management</h1>

<div class="row">
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                {{-- <h5 class="card-title mb-0">Articles</h5> --}}

                <a href="{{ route('add.vacancy')}}" class="btn btn-primary"><i class="align-middle me-2" data-feather="plus-circle"></i>add vacancy</a>
                {{-- <a href="{{ route('trashed.articles')}}" class="btn btn-secondary"><i class="align-middle me-2" data-feather="trash"></i>trashed article</a> --}}
            </div>
            <div class="card-body">
                {{-- @if (session('success'))
                <span class="alert alert-success">
                        {{ session('success') }}
                </span>
                @endif --}}
               
                <table class="table table-hover responsive" id="vacancies-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Description</th>
                            <th>Position</th>
                            <th>Status</th>
                            <th>Due Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $vacancies->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script>
    $(document).ready(function() {
        var vacancy=$('#vacancies-table').DataTable({
            responsive: true,
            scrollY:true,
            ajax: '{{ url("/admin-vacancies/data") }}',
            stateSave: false,
            columns: [
                { data: 'id' },
                { data: 'title' },
                { data: 'dept' },
                { data: 'status' },
                { data: 'due_date' },
                { data: 'action', orderable: false, searchable: false },
            ],
            drawCallback: function () {
            feather.replace(); // 🔥 render icons setelah data muncul
        }
        });
        
        function reloadVacanciesTable() {
            vacancy.ajax.reload(null, true); // `true` = reset sort, filter, page
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
                                    .then(() => reloadArticlesTable());
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
