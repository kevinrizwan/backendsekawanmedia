<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    //
    protected $table = "pegawais";
    protected $fillable = [
        'nama', 'jabatan', 'alamat'
    ];
    public function Pinjam()
    {
        return $this->hasMany(Pinjam::class);
    }
}
