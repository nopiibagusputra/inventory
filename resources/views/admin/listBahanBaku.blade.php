@extends('layouts.app')

@section('title', 'Data Bahan Baku')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bahan Baku</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Bahan Baku .</li>
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
                <div class="alert alert-{{ session('info') ? 'success' : 'danger' }} alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ session('info') ?? session('error') }}
                </div>
            @endif
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Bahan Baku</h3>
                <button type="button" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#tambahBahanBakuModal">
                    Tambah Bahan Baku
                </button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama Bahan Baku</th>
                    <th>Satuan Bahan Baku</th>
                    <th style="text-align: center">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $item)
                    <tr>
                      <td>{{$item->nama}}</td>
                      <td>{{$item->satuan}}</td>
                      <td style="text-align: center">
                        <button type="button" class="btn btn-sm btn-success variant-button" data-toggle="modal" data-target="#variantmodal" data-id="{{ $item->id }}" data-name="{{ $item->nama }}">
                          Tambah Variant
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

  <div class="modal fade" id="tambahBahanBakuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Bahan Baku</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Form for adding new material -->
          <form method="POST" action="{{ route('store.bahan') }}">
            @csrf
            <div class="form-group">
              <label for="materialName">Nama Bahan Baku</label>
              <input type="text" class="form-control" id="materialName" name="materialName" placeholder="Masukkan Nama Bahan Baku" required>
            </div>
            <div class="form-group">
              <label for="materialStock">Satuan Bahan Baku</label>
              <input type="text" class="form-control" id="materialtype" name="materialtype" placeholder="Contoh : Kaleng, Pcs, Pack" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

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
                <form id="variantForm" action="{{ route('store.variant') }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_id" id="itemId" value="">
                    <div class="form-group">
                        <label for="nama">Nama Variant</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required>
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" class="form-control" id="stock" name="stock" placeholder="Masukkan Stock" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga" required>
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

@push('scripts')
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>   
<script>
  $(document).ready(function () {
    $('.variant-button').click(function() {
      var itemId = $(this).data('id');
      var itemName = $(this).data('name');
      $('#itemId').val(itemId);
      $('#variantmodalTitle').text('Tambah Variant untuk ' + itemName);
    });
  });
</script>  
@endpush
@endsection