<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengadaanBarang extends Model
{
    protected $fillable = [
        'penerima',
        'tanggal',
        'catatan'
    ];

    public function barangs() {
        return $this
            ->belongsToMany('App\Barang', 'barang_terimas', 'pengadaan_barang_id', 'barang_id')
            ->withPivot([
                'id',
                'kuantitas'
            ])
            ->withTimestamps();
    }
}
