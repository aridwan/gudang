<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangTerima extends Model
{
    protected $fillable =[
        'barang_id',
        'kuantitas'
    ];
}
