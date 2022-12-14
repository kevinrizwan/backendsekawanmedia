<?php

namespace App\Http\Controllers\Admin;

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
        return view('admin.pinjam.index', compact('data', 'pegawai', 'kendaraan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kendaraan = Kendaraaan::all();
        $pegawai = Pegawai::all();
        return view('admin.pinjam.tambah', compact('kendaraan', 'pegawai'));
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
        $request->validate([
            'kendaraan' => 'required',
            'pegawai' => 'required',
            'jaminan' => 'required',
        ]);

        $data = new Pinjam([
            'kendaraan_id' => $request->get('kendaraan'),
            'pegawai_id' => $request->get('pegawai'),
            'konsumsi_bbm' => $request->get('bbm'),
            'jaminan' => $request->get('jaminan'),
            'status' => $request->get('status'),
        ]);
        $data->save();
        return redirect()->route('pinjam');
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
