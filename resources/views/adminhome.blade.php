@extends('layouts/main')

@section('title', 'Admin')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a></h1>
    </div>
    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-m font-weight-bold text-danger text-uppercase mb-1">Books</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlah_buku }}</div>
                        </div>
                        <div class="col-auto">
                            <img height="40" width="45" src="http://localhost:8000/news.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
<!-- Content Row -->
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">

            </div>
        </div>    
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
@endsection