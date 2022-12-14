<?php

namespace App\Http\Controllers\Timacc;

use App\Http\Controllers\Controller;
use App\Kendaraaan;
use App\Pegawai;
use App\Pinjam;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Pinjam::all();
        $pegawai = Pegawai::all()->where('nama');
        $kendaraan = Kendaraaan::all()->where('nama');
        return view('timacc.pinjam.index', compact('data', 'pegawai', 'kendaraan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Pinjam::find($id);
        $pegawai = Pegawai::all()->where('nama');
        $kendaraan = Kendaraaan::all()->where('nama');
        return view('timacc.pinjam.edit', compact('data', 'pegawai', 'kendaraan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = Pinjam::find($id);
        $data->kendaraan_id = $request->get('kendaraan');
        $data->pegawai_id = $request->get('pegawai');
        $data->konsumsi_bbm = $request->get('bbm');
        $data->jaminan = $request->get('jaminan');
        $data->status = $request->get('status');
        $data->save();
        return redirect()->route('pinjam');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
