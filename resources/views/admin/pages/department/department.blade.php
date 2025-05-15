@extends('admin.layout.app')

@section('content')
<h1 class="h3 mb-3">Department Management</h1>

<div class="row">
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                {{-- <h5 class="card-title mb-0">Articles</h5> --}}

                <a href="#" class="btn btn-primary add-dept"><i class="align-middle me-2" data-feather="plus-circle"></i>add department</a>
                {{-- <a href="{{ route('trashed.articles')}}" class="btn btn-secondary"><i class="align-middle me-2" data-feather="trash"></i>trashed article</a> --}}
            </div>
            <div class="card-body">
                {{-- @if (session('success'))
                <span class="alert alert-success">
                        {{ session('success') }}
                </span>
                @endif --}}
               
                <table class="table table-hover responsive" id="department-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Department</th>
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
                <div class="d-flex justify-content-center">
                    {{ $department->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="add-modal" tabindex="-1" aria-labelledby="add-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content shadow-sm border-0">
        <div class="modal-header bg-primary ">
          <h5 class="modal-title text-white" id="add-modalLabel">Detail Product</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="addDeptForm" data-mode="create">
            <input type="hidden" name="id" class="id-dept">
            <div class="modal-body">
                <label for="nama">Department Name</label>
                <input type="text" class="form-control name-dept" name="name" id="name">
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('scripts')

<script>
    $(document).ready(function() {
        var department=$('#department-table').DataTable({
            responsive: true,
            scrollY:true,
            ajax: '{{ url("/admin-department/data") }}',
            stateSave: false,
            columns: [
                { data: 'id' },
                { data: 'name' },
                { data: 'action', orderable: false, searchable: false },
            ],
            drawCallback: function () {
            feather.replace(); // 🔥 render icons setelah data muncul
        }
        });
        
        function reloadDepartmentTable() {
            department.ajax.reload(null, true); // `true` = reset sort, filter, page
        }


       
        // $('#department-table').on('click', '.btn-show', function() {
        //     let id = $(this).data('id');

        //     $.ajax({
        //         url: '/store-department/' + id,
        //         type: 'GET',
        //         success: function (response) {
        //             data = response.data
        //             console.log(data.image)
        //           $('.product_name').text(data.name);
        //           $('.product_desc').html(data.description);
        //           $('.product_quote').text(data.quote);
        //           $('.product_image').attr('src',"{{ asset('storage') }}" +'/'+ data.image)
        //           $('#customModal').modal('show');
        //         },
        //         error: function () {
        //             console.log('errror')
        //             // Swal.fire('Gagal!', 'Terjadi kesalahan.', 'error');
        //         }
        //     });
        // });

           // CSRF Token setup for AJAX
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.add-dept').on('click', function (e) {
                $('#addDeptForm')[0].reset();
                $('#add-modal').modal('show');
                $('#addDeptForm').attr('data-mode', 'create');
            })

            $('#addDeptForm').on('submit', function (e) {
                e.preventDefault(); // Cegah form submit biasa

                let deptName = $('#name').val();
                let mode = $(this).attr('data-mode');
                let url=''
                let method = '';
                if(mode == 'create'){
                    url="{{ route('store.department') }}"
                    method = 'POST'
                    
                }else{
                    let idDept = $('.id-dept').val();
                    url="/edit-department/"+idDept;
                    method = 'PUT'
                }

                    Swal.fire({
                        title: '<h3>Apakah Anda yakin ingin simpan?</h3>',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonText: 'Batal',
                        confirmButtonText: 'Ya, simpan!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: url, 
                                type: method,
                                data: {
                                    name: $('#name').val()
                                },
                                success: function(response) {
                                    Swal.fire('Berhasil!', response.message, 'success')
                                    .then(() => { 
                                        reloadDepartmentTable();
                                        $('#add-modal').modal('hide');
                                        $('#addDeptForm')[0].reset();
                                });
                                },
                                error: function(xhr) {
                                    Swal.fire('Gagal!', xhr.message, 'error');
                                }
                            });
                        }else{
                            $('#add-modal').modal('show');
                        }
                    });
            });

            // Edit
            $('#department-table').on('click', '.btn-edit', function() {
                let id = $(this).data('id');

                $.ajax({
                    url: '/edit-department/' + id,
                    type: 'GET',
                    success: function (response) {
                        data = response.data
                        console.log(data)
                        $('.name-dept').val(data.name);
                        $('.id-dept').val(data.id);
                        $('#addDeptForm').attr('data-mode', 'update');
                        $('#add-modal').modal('show');
                    },
                    error: function () {
                        console.log('error')
                        // Swal.fire('Gagal!', 'Terjadi kesalahan.', 'error');
                    }
                });
            });
            //delete
            $(document).on('click', '.btn-delete', function (e) {
                e.preventDefault();
                let id = $(this).data('id');

                Swal.fire({
                    title: '<h3>Apakah Anda yakin ingin hapus?</h3>',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonText: 'Batal',
                    confirmButtonText: 'Ya, hapus!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '/delete-department/' + id,
                            type: 'DELETE',
                            success: function (response) {
                                Swal.fire('Berhasil!', response.message, 'success')
                                    .then(() => reloadDepartmentTable());
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
