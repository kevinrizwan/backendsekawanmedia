<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kendaraaan extends Model
{
    //
    protected $table = "kendaraaans";
    protected $fillable = [
        'nama', 'plate', 'nomor_rangka'
    ];
    public function Pinjam()
    {
        return $this->hasMany(Pinjam::class);
    }
}
