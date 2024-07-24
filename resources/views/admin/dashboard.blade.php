@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        @if(session('info') || session('error'))
        <div class="alert alert-{{ session('info') ? 'success' : 'danger' }} alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ session('info') ?? session('error') }}
        </div>
        @endif
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>

                            <p>New Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>

                            <p>Bounce Rate</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>

                            <p>User Registrations</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>

                            <p>Unique Visitors</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-6 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Daftar Peringatan Stock Bahan Baku</h3>
                          <a href="{{ route('update.safety.stock') }}" class="btn btn-primary btn-sm float-right">Update Safety Stock</a>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr style="text-align: center">
                              <th>Produk</th>
                              <th>Stock</th>
                              <th >Safety Stock</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr style="text-align: center">
                                        <td>{{$item->namaProduct.' '.$item->namaVariant}}</td>
                                        <td style="background-color: {{ $item->safetystock !== null && $item->safetystock > 0 ? 'red' : 'transparent' }}; color: {{ $item->safetystock !== null && $item->safetystock > 0 ? 'white' : 'black' }}">{{$item->stock.' '.$item->satuanProduct}}</td>
                                        <td >
                                            {{ $item->safetystock !== null ? $item->safetystock.' '.$item->satuanProduct : 0 }}
                                        </td>
                                    </tr>                                    
                                @endforeach
                            </tbody>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                </section>
                <section class="col-lg-6 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Daftar Stock Out</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="stockOuts" class="table table-bordered table-striped">
                            <thead>
                            <tr style="text-align: center">
                                <th>Nama Product</th>
                                <th>Nama Variant</th>
                                <th>Tanggal Keluar</th>
                                <th>Total Terjual</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($stock_out as $stockOut)
                                    <tr style="text-align: center">
                                        <td>{{ $stockOut->nama_product }}</td>
                                        <td>{{ $stockOut->nama_variant }}</td>
                                        <td>{{ $stockOut->sale_date }}</td>
                                        <td>{{ $stockOut->total_sold }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                </section>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                {{-- <section class="col-lg-5 connectedSortable">

                    
                </section> --}}
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@push('scripts')
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": true,
                "ordering": false,
                "buttons": ["copy", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });

    </script>
     <script>
        $(function () {
            $("#stockOuts").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": true,
                "ordering": false,
                "buttons": ["copy", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#stockOuts_wrapper .col-md-6:eq(0)');
        });

    </script>
@endpush
@endsection