@extends('layout.master')

@section('content')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    @include('admin.sidebar')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tambah Pinjaman</h4>
                            <form class="forms-sample" action="{{route('pinjam.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <label for="exampleSelectGender">Nama Kendaraan</label>
                                    <select class="form-control" id="exampleSelectGender" name="kendaraan">
                                        <option value="" selected disabled> Pilih Kendaraan</option>
                                        @foreach ($kendaraan as $data)
                                        <option value="{{$data->id}}">{{$data->nama}}, {{$data->plate}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Nama Pegawai</label>
                                    <select class="form-control" id="exampleSelectGender" name="pegawai">
                                        <option value="" selected disabled> Pilih Pegawai/Driver</option>
                                        @foreach ($pegawai as $data)
                                        <option value="{{$data->id}}">{{$data->nama}}, {{$data->jabatan}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Konsumsi BBM</label>
                                    <input name="bbm" type="text" class="form-control" id="exampleInputName1" placeholder="Konsumsi BBM">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Jaminan</label>
                                    <select class="form-control" id="exampleSelectGender" name="jaminan">
                                        <option value="" selected disabled> Jaminan ada atau tidak</option>
                                        <option value="1">Ada</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Status</label>
                                    <select class="form-control" id="exampleSelectGender" name="status">
                                        <option value="2">Proses</option>
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