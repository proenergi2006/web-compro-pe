@extends('admin.layout.app')

{{-- @section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

@endsection --}}
@section('content')
<h1 class="h3 mb-3">Activities Management</h1>

<div class="row">
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <a href="javascript:;" class="btn btn-primary add-activity"><i class="align-middle me-2" data-feather="plus-circle"></i>add activity</a>
                {{-- <a href="{{ route('trashed.products')}}" class="btn btn-secondary"><i class="align-middle me-2" data-feather="trash"></i>trashed product</a> --}}
                {{-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#customModal">
                    Tampilkan Modal
                  </button> --}}
                
            </div>
            <div class="card-body">
                {{-- @if (session('success'))
                <span class="alert alert-success">
                        {{ session('success') }}
                </span>
                @endif --}}
               
                <table class="table table-hover my-1 table-responsive" id="activities-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Position</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     
                    </tbody>
                </table>
                {{-- <div class="d-flex justify-content-center">
                    {{ $activities->links() }}
                </div> --}}
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="add-modal" tabindex="-1" aria-labelledby="add-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content shadow-sm border-0">
        <div class="modal-header bg-primary ">
          <h5 class="modal-title title-act text-white" id="add-modalLabel">Add Activity</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="addActForm" data-mode="create" enctype="multipart/form-data" >
            <input type="hidden" name="id" class="id-act">
            <div class="modal-body">
                <div class="mb-3">

                    <label for="title">Title*</label>
                    <input type="text" class="form-control title-activity" required name="title" id="title">
                </div>
                 <img src="" width="200" height="auto" style="object-fit:cover; border-radius:5px;" class="mb-4 act_image"> 
                <div class="mb-3">
                    <label for="title">Photo*</label>
                  <input type="file" class="form-control photo-activity" name="image" id="image">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="title">Position*</label>
                    <select name="position" class="form-select mb-3" required>
                        <option value="" selected>choose position</option>
                        <option value="1">First Row</option>
                        <option value="2">Second Row</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
            </div>
        </form>
      </div>
    </div>
  </div>
<div class="modal fade" id="customModal" tabindex="-1" aria-labelledby="customModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content shadow-sm border-0">
    <div class="modal-header bg-primary ">
        <h5 class="modal-title text-white" id="customModalLabel">Detail Product</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <h4 class="product_name"></h4>
        <img src="" width="100" height="auto" style="object-fit:cover; border-radius:5px;" class="mb-4 product_image">

        <div class="row">
        <div class="col-md-2">
            Description:
        </div>
        <div class="col-md-10">
            <p class="product_desc"></p>
        </div>
        </div>
        <div class="row">
        <div class="col-md-2">
            Quote:
        </div>
        <div class="col-md-10">
            <p class="product_quote"></p>
        </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
    
    </div>
    </div>
</div>
</div>
@endsection

@section('scripts')
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> --}}
<script>
    $(document).ready(function() {

        $('#products-table').on('click', '.btn-show', function() {
            let id = $(this).data('id');

            $.ajax({
                url: '/show-product/' + id,
                type: 'GET',
                success: function (response) {
                    data = response.data
                    console.log(data.image)
                  $('.product_name').text(data.name);
                  $('.product_desc').html(data.description);
                  $('.product_quote').text(data.quote);
                  $('.product_image').attr('src',"{{ asset('storage') }}" +'/'+ data.image)
                  $('#customModal').modal('show');
                },
                error: function () {
                    console.log('errror')
                    // Swal.fire('Gagal!', 'Terjadi kesalahan.', 'error');
                }
            });
            

        });
        var activity=$('#activities-table').DataTable({
            responsive: true,
            scrollY:true,
            ajax: '{{ url("/admin-activities/data") }}',
            stateSave: false,
            columns: [
                { data: 'no' },
                {
                    data: 'image',
                    render: function(data, type, row) {
                        return `<img src="${data}" width="100" height="auto" style="object-fit:cover; border-radius:5px;">`;
                    }
                },
                { data: 'title' },
                { data: 'position' },
                { data: 'action', orderable: false, searchable: false },
            ],
            drawCallback: function () {
            feather.replace(); // 🔥 render icons setelah data muncul
        }
        });
        
        function reloadActivitiesTable() {
            activity.ajax.reload(null, true); // `true` = reset sort, filter, page
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
                    title: 'Apakah Anda yakin ingin hapus?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonText: 'Batal',
                    confirmButtonText: 'Ya, hapus!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '/delete-product/' + id,
                            type: 'DELETE',
                            success: function (response) {
                                Swal.fire('Berhasil!', response.message, 'success')
                                    .then(() => reloadProductsTable());
                            },
                            error: function () {
                                Swal.fire('Gagal!', 'Terjadi kesalahan.', 'error');
                            }
                        });
                    }
                });
            });

            
            $('.add-activity').on('click', function (e) {
                $('#addActForm')[0].reset();
                $('#add-modal').modal('show');
                $('#addActForm').attr('data-mode', 'create');
            })

            $('#addActForm').on('submit', function (e) {
                e.preventDefault(); // Cegah form submit biasa

                let mode = $(this).attr('data-mode');
                let url=''
                let method = '';
                if(mode == 'create'){
                    url="{{ route('store.activity') }}"
                    // method = 'POST'
                    
                }else{
                    let idact = $('.id-act').val();
                    url="/edit-activity/"+idact;
                    // method = 'PUT'
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
                                const formData = new FormData(this);
                                console.log(formData)
                                if (mode === 'update') {
                                    formData.append('_method', 'PUT'); // 🔥 magic line
                                }
                                $.ajax({
                                    url: url,
                                    method: 'POST',
                                    data: formData,
                                    contentType: false,
                                    processData: false,
                                    success: function (res) {
                                        $('#add-modal').modal('hide');
                                        $('#addActForm')[0].reset();
                                        reloadActivitiesTable()
                                        // currentStep = 1;
                                        // showStep(currentStep);
                                    },
                                    error: function (err) {
                                        console.log(err)
                                        alert('Terjadi kesalahan. Pastikan semua data benar.');
                                    }
                                });
                        }else{
                            $('#add-modal').modal('show');
                        }
                    });
            });

              // Edit
            $('#activities-table').on('click', '.btn-edit-act', function() {
                let id = $(this).data('id');
                $.ajax({
                    url: '/edit-activity/' + id,
                    type: 'GET',
                    success: function (response) {
                        data = response.data
                        $('.title-act').text('Edit Activity');
                        $('.title-activity').val(data.title);
                        $('.act_image').attr('src',"{{ asset('storage') }}" +'/'+ data.image)
                        $('.id-act').val(data.id);
                        $('select[name="position"]').val(data.position);
                        $('#addActForm').attr('data-mode', 'update');
                        $('#add-modal').modal('show');
                    },
                    error: function () {
                        console.log('error')
                        // Swal.fire('Gagal!', 'Terjadi kesalahan.', 'error');
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
