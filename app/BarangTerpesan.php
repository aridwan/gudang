<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangTerpesan extends Model
{
    protected $fillable = [
        'pesanan_barang_id',
        'barang_id',
        'kuantitas',
        'tanggal_butuh'
    ];
}
