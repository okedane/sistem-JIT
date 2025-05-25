<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BahanBaku extends Model
{
    use HasFactory;

    protected $table = 'bahan_bakus';

    protected $fillable = [
        'id_bahan_baku',
        'nama',
        'jenis',
        'satuan',
        'harga',
        'stok',
        'gambar',
    ];
}
