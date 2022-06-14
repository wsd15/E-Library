<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table = 'wishlists';
    protected $fillable = [
        'produk_id',
        'user_id',
    ];

    public function produk () {
        return $this->belongsTo(Books::class, 'produk_id');
    } 
    public function user () {
        return $this->belongsTo(User::class, 'user_id');
    }
}
