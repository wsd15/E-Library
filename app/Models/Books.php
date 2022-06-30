<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table ='books';
    protected $fillable = [
        'nama_buku',
        'penerbit',
        'penulis',
        'perpustakaan_id',
        'isbn',
        'tahun_terbit',
        'stok',
        'deskripsi',
        'deposit',
        'file_path'

    ];

    public function bukuperpus()
    {
        return $this->belongsTo(Perpustakaan::class,'perpustakaan_id');
    }
}
