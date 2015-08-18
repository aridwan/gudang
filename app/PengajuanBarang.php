<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengajuanBarang extends Model
{
    protected $fillable = [
        'nama',
        'keterangan'
    ];
}
