@extends('admin.layout.app')

@section('content')
<h1 class="h3 mb-3">Testimonials Management</h1>

<div class="row">
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                @if ($count < 5)
                <a href="{{ route('add.testimonial')}}" class="btn btn-primary"><i class="align-middle me-2" data-feather="plus-circle"></i>add testimonial</a>
                    
                @endif
                {{-- <a href="{{ route('trashed.testimonials')}}" class="btn btn-secondary"><i class="align-middle me-2" data-feather="trash"></i>trashed testimonial</a> --}}
            </div>
            <div class="card-body">
                {{-- @if (session('success'))
                <div class="alert alert-success">
                        {{ session('success') }}
                </div>
                @endif --}}

                <div class="alert alert-warning">
                        You can only input up to 5 data entries.
                </div>
                <table class="table table-hover responsive" id="testimonials-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Testimonial</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($articles as $article)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->slug }}</td>
                            <td>
                                @if ($article->thumbnail)
                                    <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="Thumbnail" width="80" height="auto">
                                @else
                                    <span class="text-muted">No image</span>
                                @endif
                            </td>
                            <td>{{ $article->content }}</td>
                            <td>{{ $article->user->name ?? '' }} </td>
                            <td>{{ $article->created_at->format('d M Y') }}</td>
                        </tr>
                        @endforeach --}}
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
        var testimonial=$('#testimonials-table').DataTable({
            responsive: true,
            scrollY:true,
            ajax: '{{ url("/admin-testimonials/data") }}',
            stateSave: false,
            columns: [
                { data: 'no' },
                { data: 'name' },
                { data: 'position' },
                { data: 'testimonial' },
                { data: 'status' },
                { data: 'action', orderable: false, searchable: false },
            ],
            drawCallback: function () {
            feather.replace(); // 🔥 render icons setelah data muncul
        }
        });
        
        function reloadTestimonialTable() {
            testimonial.ajax.reload(null, true); // `true` = reset sort, filter, page
        }
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
                    title: 'Apakah Anda yakin ingin hapus?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonText: 'Batal',
                    confirmButtonText: 'Ya, hapus!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '/delete-testimonial/' + id,
                            type: 'DELETE',
                            success: function (response) {
                                Swal.fire('Berhasil!', response.message, 'success')
                                    .then(() => reloadTestimonialTable());
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
