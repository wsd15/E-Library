<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $fillable = [
        'nama_buku',
        'penerbit',
        'penulis',
        'perpustakaan_id',
        'isbn',
        'tahun_terbit',
        'stok',
        'deskripsi',
        'file_path'

    ];
}
