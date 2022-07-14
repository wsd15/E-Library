<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    protected $table = 'cart_details';
    protected $fillable = [
        'produk_id',
        'cart_id',
        'qty',
        'harga',
        // 'diskon',
        'subtotal',
    ];

    public function cart() {
        return $this->belongsTo(Cart::class, 'cart_id');
    }

    public function buku() {
        return $this->belongsTo(Books::class, 'produk_id');
    }

    // function untuk update qty, sama subtotal
    public function updatedetail($itemdetail, $harga) {
        // $this->attributes['qty'] = $itemdetail->qty;
        $this->attributes['subtotal'] = $itemdetail->subtotal + ( $harga);
        self::save();
    }
}
