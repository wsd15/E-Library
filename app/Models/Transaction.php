<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table ='transactions';
    protected $fillable = [
        'user_id',
        'cart_detail_id',
        'perpustakaan_id',
        'total_deposito',
        'status_pembayaran',
        'no_invoice',
        'cart_id',
        'tanggal_pengembalian',
        'counter',
        'totaldenda'


    ];


    public function user()
    {
        return $this->hasOne(User::class,'user_id');
    }

    public function detail() {
        return $this->hasMany(TransactionDetail::class, 'transaction_id');
    }

    
    public function cart()
    {
        return $this->belongsTo(Cart::class,'cart_id');
    }

    public function bukuperpus()
    {
        return $this->belongsTo(Perpustakaan::class,'perpustakaan_id');
    }



}
