@extends('layout.master')

@section('content')
<div class="container-fluid page-body-wrapper">
    @include('admin.sidebar')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">List Kendaraan</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pegawai</th>
                                            <th>Jabatan</th>
                                            <th>Alamat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($data as $i=>$row)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>{{$row->nama}}</td>
                                            <td>{{$row->jabatan}}</td>
                                            <td>{{$row->alamat}}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td onscroll="6" style="text-align: center;">Belum ada data yang tersimpan</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- partial -->
    </div>
    @endsection