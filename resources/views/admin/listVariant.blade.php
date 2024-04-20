@extends('layouts.app')

@section('title', 'Data Variants')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Variant</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Variant</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if(session('info') || session('error'))
                        <div
                            class="alert alert-{{ session('info') ? 'success' : 'danger' }} alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            {{ session('info') ?? session('error') }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Variant</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr style="text-align: center">
                                        <th >Product</th>
                                        <th >Stock</th>
                                        <th >Safety Stock</th>
                                        <th >Harga</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $userId = Auth::user()->id_user;
                                        $userName = Auth::user()->nama_karyawan;
                                    @endphp
                                    @foreach($data as $item)
                                        <tr>
                                            <td style="font-weight: bold">{{ $item->nama_produk.' '.$item->nama_variant }}</td>
                                            <td style="text-align: center">{{ $item->stock_variant.' '.$item->satuan }}</td>
                                            <td style="text-align: center">{{ $item->safety_stock.' '.$item->satuan }}</td>
                                            <td>Rp {{ number_format($item->harga_variant, 0, ',', '.') }}</td>
                                            <td style="text-align: center">
                                                <button type="button" class="btn btn-sm btn-success restock"
                                                    data-toggle="modal" data-target="#restockmodal"
                                                    data-userId="{{ $userId }}" data-userName="{{ $userName }}" data-id="{{ $item->id_variant }}" data-nama="{{ $item->nama_produk }}" data-variant="{{ $item->nama_variant }}" data-harga="{{ $item->harga_variant }}" data-itemId="{{ $item->id_produk}}">
                                                    Restock
                                                </button>
                                                <button type="button" class="btn btn-sm btn-info edit-variant"
                                                    data-toggle="modal" data-target="#variantmodal"
                                                    data-id="{{ $item->id_variant }}" data-nama="{{ $item->nama_produk }}" data-variant="{{ $item->nama_variant }}" data-harga="{{ $item->harga_variant }}" data-itemId="{{ $item->id_produk}}">
                                                    Edit
                                                </button>
                                                <button type="button" class="btn btn-sm btn-danger variant-button delete-variant"
                                                    data-id="{{ $item->id_variant }}">
                                                    Hapus
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<div class="modal fade" id="variantmodal" tabindex="-1" role="dialog" aria-labelledby="variantmodalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="variantmodalTitle">Nama Bahan Baku</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="variantForm" action="{{ route('update.variant') }}" method="POST">
                    @csrf
                    @method("PUT")
                    <input type="hidden" name="item_id" id="itemId" value="">
                    <input type="hidden" name="id_variant" id="id_variant" value="">
                    <div class="form-group">
                        <label for="nama">Nama Variant</label>
                        <input type="text" class="form-control" id="edit_nama" name="nama" placeholder="Masukkan Nama" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" id="edit_harga" name="harga" placeholder="Masukkan Harga" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="restockmodal" tabindex="-1" role="dialog" aria-labelledby="variantmodalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="variantmodalTitle">Form Restock</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="restockForm" action="{{ route('request.restock') }}" method="POST">
                    @csrf
                    <input type="hidden" name="userId" id="userId" value="">
                    <input type="hidden" name="productId" id="productId" value="">
                    <input type="hidden" name="variantId" id="variantId" value="">
                    <input type="hidden" name="variantPrice" id="variantPrice" value="">
                    <div class="form-group">
                        <label for="nama">Nama Karyawan</label>
                        <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" disabled>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Produk</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" disabled>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Variant</label>
                        <input type="text" class="form-control" id="nama_variant" name="nama_variant" disabled>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Variant</label>
                        <input type="number" class="form-control" id="harga_variant" name="harga_variant" disabled>
                    </div>
                    <div class="form-group">
                        <label for="nama">Jumlah Restock</label>
                        <input type="text" class="form-control" id="restock" name="restock" placeholder="Masukkan Jumlah Restock" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Estimasi Pengiriman</label>
                        <input type="text" class="form-control" id="lead_time" name="lead_time" placeholder="Masukkan Lama Estimasi Pengiriman (Hari)" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Pengajuan Stock</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
    <script>
        $(document).ready(function () {
          $('.edit-variant').click(function() {
            var itemId = $(this).data('id');
            var itemName = $(this).data('nama');
            $('#itemId').val(itemId);
            $('#variantmodalTitle').text('Edit Variant untuk Produk ' + itemName);
          });
        });
    </script>
    <script>
        $(document).on('click', '.edit-variant', function () {
            var id_variant = $(this).data('id');
            var harga = $(this).data('harga');
            var nama = $(this).data('variant');
            var item_id = $(this).data('itemId');
      
            $('#id_variant').val(id_variant);
            $('#item_id').val(item_id);
            $('#edit_harga').val(harga);
            $('#edit_nama').val(nama);
        });
      
        $('#variantForm').submit(function (e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                type: 'PUT',
                url: '{{ route("update.variant") }}',
                data: formData,
                success: function (response) {
                    $('#variantmodal').modal('hide');
                    location.reload();
                },
                error: function (xhr, status, error) {
                    // Handle errors
                    console.log(xhr)
                }
            });
        });
    </script>
    <script>
        $(document).on('click', '.restock', function () {
            var variantId = $(this).data('id');
            var variantName = $(this).data('variant');
            var variantPrice = $(this).data('harga');
            var productId = $(this).data('itemid');
            var productName = $(this).data('nama');
            var userId = $(this).data('userid');
            var userName = $(this).data('username');
      
            $('#nama_karyawan').val(userName);
            $('#nama_produk').val(productName);
            $('#nama_variant').val(variantName);
            $('#harga_variant').val(variantPrice);

            // post data
            $('#userId').val(userId);
            $('#productId').val(productId);
            $('#variantId').val(variantId);
            $('#variantPrice').val(variantPrice);
        });
    </script>
    <script>
    $(document).on('click', '.delete-variant', function () {
        var variant_id = $(this).data('id');
        Swal.fire({
            title: 'Apakah anda yakin ?',
            text: "Data yang sudah dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus!',
            cancelButtonText: 'Batalkan'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'DELETE',
                    url: '{{ route("delete.variant") }}',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": variant_id
                    },
                    success: function (data) {
                        Swal.fire(
                            'Berhasil!',
                            'Data Variant dihapus!.',
                            'success'
                        ).then((result) => {
                            location.reload();
                        });
                    }
                });
            }
        });
    });
    </script> 
@endpush
@endsection
