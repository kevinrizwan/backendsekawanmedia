<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    //
    protected $table = "pinjams";
    protected $primaryKey = 'id';
    protected $fillable = [
        'pegawai_id', 'kendaraan_id', 'konsumsi_bbm', 'jaminan', 'status'
    ];
    public function Kendaraan()
    {
        return $this->belongsTo(Kendaraaan::class);
    }
    public function Pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
