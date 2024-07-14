@extends('layouts.app')

@section('title', 'Data Restock')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Restock</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Restock</li>
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
                            <h3 class="card-title">Daftar Restock Product</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="text-align: center">Kode Pemesanan</th>
                                        <th>Product</th>
                                        <th>Variant</th>
                                        <th style="text-align: center">Request</th>
                                        <th style="text-align: center">Request In</th>
                                        <th>Total Harga</th>
                                        <th style="text-align: center">Status</th>
                                        <th>Catatan</th>
                                        <th style="text-align: center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $item)
                                        <tr>
                                            <td style="text-align: center">{{ $item->kode_pemesanan }}</td>
                                            <td>{{ $item->namaProduct }}</td>
                                            <td>{{ $item->namaVariant }}</td>
                                            <td style="text-align: center">{{ $item->stock.' '.$item->satuan }}</td>
                                            <td style="text-align: center">{{ $item->stock_in.' '.$item->satuan }}</td>
                                            <td>Rp {{ number_format($item->total_harga, 0, ',', '.') }}</td>
                                            <td style="text-align: center">
                                                @if($item->status == 0)
                                                    <span class="badge badge-warning">Pending</span>
                                                @elseif($item->status == 1)
                                                    <span class="badge badge-success">Complete</span>
                                                @elseif($item->status == 2)
                                                    <span class="badge badge-danger">Not Match</span>
                                                @endif
                                            </td>
                                            <td>{{ $item->notes }}</td>
                                            <td style="text-align: center">
                                                @if($item->status == 1)
                                                    <button type="button" disabled class="btn btn-sm btn-danger">
                                                        Sudah Validasi
                                                    </button>
                                                @else
                                                    <button type="button" class="btn btn-sm btn-info variant-button validasi" data-toggle="modal" data-target="#updateStatusModal" data-kode="{{ $item->kode_pemesanan }}" data-variantid="{{ $item->idVariant }}" data-variant="{{ $item->namaVariant }}" data-product="{{ $item->namaProduct }}" data-jumlah="{{ $item->stock }}" data-kondisi="{{ $item->kondisi }}" data-catatan="{{ $item->notes }}">
                                                        Update Status
                                                    </button>                                                
                                                @endif
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

<div class="modal fade" id="updateStatusModal" tabindex="-1" role="dialog" aria-labelledby="editSupplierModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editSupplierModalLabel">Validasi Stock</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form for update status -->
                <form id="validasiForm" method="POST" action="{{ route('update.restock') }}">
                    @csrf
                    @method("PATCH")
                    <input type="hidden" name="kode" id="kode" value="">
                    <input type="hidden" name="variantId" id="variantId" value="">
                    <div class="form-group">
                        <label for="namaBarang">Nama Barang</label>
                        <input type="text" class="form-control" id="namaBarang" name="namaBarang" disabled>
                    </div>
                    <div class="form-group">
                        <label for="permintaanBarang">Jumlah Permintaan Barang</label>
                        <input type="number" class="form-control" id="permintaanBarang" name="permintaanBarang" disabled>
                    </div>
                    <div class="form-group">
                        <label for="jumlahBarang">Jumlah Barang Datang*</label>
                        <input type="number" class="form-control" id="jumlahBarang" name="jumlahBarang" required>
                    </div>
                    <div class="form-group">
                        <label>Kondisi Barang*</label>
                        <select name="kondisiBarang" id="kondisiBarang" class="form-control" required>
                            <option disabled selected>Pilih Status</option>
                            <option value=1>Baik</option>
                            <option value=2>Kurang Baik</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="catatan">Catatan</label>
                        <textarea rows="4" cols="50" class="form-control" id="catatan" name="catatan"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Validasi</button>
            </div>
            </form>
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
                "ordering": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });

    </script>
    <script>
        $(document).on('click', '.validasi', function () {
            var kode = $(this).data('kode');
            var product = $(this).data('product');
            var variant = $(this).data('variant');
            var variantId = $(this).data('variantid');
            var jumlah = $(this).data('jumlah');
            var kondisi = $(this).data('kondisi');
            var catatan = $(this).data('catatan');
    
            $('#kode').val(kode);
            $('#variantId').val(variantId);
            $('#namaBarang').val(product + ' ' + variant);
            $('#permintaanBarang').val(jumlah);
            $('#kondisiBarang').val(kondisi);
            $('#catatan').val(catatan);
        });
    </script>
@endpush
@endsection
