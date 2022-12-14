@extends('layout.master')

@section('content')
<div class="container-fluid page-body-wrapper">
    @include('timacc.sidebar')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Pinjaman Kendaraan</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pegawai</th>
                                            <th>Kendaraan</th>
                                            <th>Konsumsi BBM</th>
                                            <th>Jaminan</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($data as $i=>$row)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>{{$row->pegawai->nama}}</td>
                                            <td>{{$row->kendaraan->nama}}</td>
                                            <td>{{$row->konsumsi_bbm}}</td>
                                            <td>
                                                @if ($row->jaminan == 1)
                                                <label class="badge badge-success">Ada</label>
                                                @else
                                                <label class="badge badge-danger">Tidak</label>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($row->status == 2)
                                                <label class="badge badge-warning">Pending</label>
                                                @endif
                                                @if ($row->status == 3)
                                                <label class="badge badge-success">Diterima</label>
                                                @endif
                                                @if ($row->status == 1)
                                                <label class="badge badge-danger">Ditolak</label>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('pinjam.edit' ,$row->id) }}"><button type="button" class="btn btn-outline-secondary btn-icon-text">
                                                        Edit
                                                        <i class="typcn typcn-edit  btn-icon-append"></i>
                                                    </button>
                                                </a>
                                            </td>
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