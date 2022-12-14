@extends('layout.master')

@section('content')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    @include('timacc.sidebar')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Ubah Status Pinjaman</h4>
                            <form class="forms-sample" action="{{route('pinjam.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <label for="exampleSelectGender">Nama Kendaraan</label>
                                    <select class="form-control" id="exampleSelectGender" name="kendaraan">
                                        <option value="{{$data->kendaraan_id}}">{{$data->kendaraan->nama}}, {{$data->kendaraan->plate}}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Nama Pegawai</label>
                                    <select class="form-control" id="exampleSelectGender" name="pegawai">
                                        <option value="{{$data->pegawai_id}}">{{$data->pegawai->nama}}, {{$data->pegawai->jabatan}}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Konsumsi BBM</label>
                                    <input name="bbm" type="text" class="form-control" value="{{$data->konsumsi_bbm}}" id="exampleInputName1" placeholder="Konsumsi BBM">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Jaminan</label>
                                    <select class="form-control" id="exampleSelectGender" name="jaminan">
                                        @if ($data->jaminan == 1)
                                        <option value="1">Ada</option>
                                        @else
                                        <option value="2">Tidak</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Status</label>
                                    <select class="form-control" id="exampleSelectGender" name="status">
                                        @if ($data->status == 2)
                                        <option value="2">Proses</option>
                                        <option value="1">Tolak</option>
                                        <option value="3">Sukses</option>
                                        @else
                                        <option value="{{$data->status}}">Status Tidak dapat Dirubah</option>
                                        @endif
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- partial -->
    </div>
    @endsection