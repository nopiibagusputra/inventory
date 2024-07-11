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
                            <h3 class="card-title">Daftar Barang Keluar</h3>
                            <button type="button" class="btn btn-sm btn-primary float-right" data-toggle="modal"
                                data-target="#formoutModal">
                                Form Pengeluaran
                            </button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="text-align: center">Kode Pemesanan</th>
                                        <th>Bahan Baku</th>
                                        <th style="text-align: center">Jumlah</th>
                                        <th style="text-align: center">Request By</th> 
                                        <th style="text-align: right">Request Date</th>                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $item)
                                        <tr>
                                            <td style="text-align: center">{{ $item->kode_pemesanan }}</td>
                                            <td>{{ $item->namaProduct.' '.$item->namaVariant }}</td>
                                            <td style="text-align: center">{{ $item->stock }}</td>
                                            <td style="text-align: center">{{ $item->nama_karyawan }}</td>    
                                            <td style="text-align: right">{{ $item->created_at }}</td>                                        
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

<div class="modal fade" id="formoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Permintaan Bahan Keluar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Form for adding new material -->
          <form method="POST" action="{{ route('store.out') }}">
            @csrf
            <div class="form-group">
                <label>Nama Bahan Baku</label>
                <input type="hidden" id="userId" name="userId" value="{{ Auth::user()->id_user }}">
                <input type="hidden" id="variantId" name="variantId" value="">
                <select name="bahan" id="bahan" class="form-control" style="width: 100%;">
                <option disabled selected>Pilih Nama Produk</option>
                @foreach ($products as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endforeach
                </select>
                <br>
                <select name="variant" id="variant" class="form-control" style="width: 100%;">
                    <option disabled selected>Pilih Nama Variant</option>
                </select>
            </div>
            <div class="form-group">
              <label for="jumlah">Jumlah</label>
              <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah Bahan Baku" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Kirim</button>
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
        $(function () {
          //Initialize Select2 Elements
          $('.select2').select2()
      
          //Initialize Select2 Elements
          $('.select2bs4').select2({
            theme: 'bootstrap4'
          })
        })
    </script>
    <script>
       document.addEventListener("DOMContentLoaded", function() {
        var bahanDropdown = document.getElementById("bahan");
        var variantIdInput = document.getElementById("variantId");

        bahanDropdown.addEventListener("change", function() {
            var selectedOption = bahanDropdown.options[bahanDropdown.selectedIndex];
            variantIdInput.value = selectedOption.value;
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $('#bahan').on('change', function() {
            var productId = $(this).val();
            var variantSelect = $('#variant');
    
            // Clear existing options
            variantSelect.empty();
            variantSelect.append('<option disabled selected>Pilih Nama Variant</option>');
    
            if (productId) {
                $.ajax({
                    url: "{{ url('/admin/data/bahan/variant/getData') }}/" + productId,
                    method: 'GET',
                    success: function(data) {
                        $.each(data, function(index, variant) {
                            variantSelect.append('<option value="' + variant.idVariant + '">' + variant.namaVariant + ' (Stock: ' + variant.stockVariant + ')</option>');
                        });
                    }
                });
            }
        });
        $('#variant').on('change', function() {
        var selectedVariantId = $(this).val();
        $('#variantId').val(selectedVariantId);
    });
    });
    </script>
@endpush
@endsection
