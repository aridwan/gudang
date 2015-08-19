<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesananBarang extends Model
{
    protected $fillable = [
        'pemesan',
        'tanggal',
        'keterangan',
        'catatan'
    ];

    public function barangs() {
        return $this
            ->belongsToMany('App\Barang', 'barang_terpesans', 'pesanan_barang_id', 'barang_id')
            ->withPivot([
                'id',
                'kuantitas',
                'tanggal_butuh'
            ])
            ->withTimestamps();
    }
}
