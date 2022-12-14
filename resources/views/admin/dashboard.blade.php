@extends('layout.master')

@section('content')
<div class="container-fluid page-body-wrapper">
    <!-- partial -->
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-6">
                    <p>Selamat datang</p>
                    <h3 class="mb-0 font-weight-bold">{{Auth::user()->name}}</h3>
                </div>

            </div>
            <div style="margin-top: 30px;" class="col-sm-6">
            </div>
            <div class="row">
                <div class="col-xl-12 d-flex grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-wrap justify-content-between">
                                <h4 class="card-title mb-3">Jumlah peminjaman</h4>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-md-flex mb-4">
                                        <div class="mr-md-5 mb-4">
                                            <h5 class="mb-1"><i class="typcn typcn-globe-outline mr-1"></i>Pinjaman Sepeda</h5>
                                            <h2 class="text-warning mb-1 font-weight-bold"> {{$pinjam}}</h2>
                                        </div>
                                        <div class="mr-md-5 mb-4">
                                            <h5 class="mb-1"><i class="typcn typcn-archive mr-1"></i>Gagal</h5>
                                            <h2 class="text-danger mb-1 font-weight-bold">{{$pinjamgagal}}</h2>
                                        </div>
                                        <div class="mr-md-5 mb-4">
                                            <h5 class="mb-1"><i class="typcn typcn-tags mr-1"></i>Sukses</h5>
                                            <h2 class="text-success mb-1 font-weight-bold">{{$pinjamsukses}}</h2>
                                        </div>
                                    </div>
                                    <canvas id="salesanalyticChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main-panel ends -->
</div>
@endsection