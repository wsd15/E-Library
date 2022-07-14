<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    protected $table ='transaction_details';
    protected $fillable = [
        'transaction_id',
        'status_buku',
        'catatan',
        'denda',


    ];


    public function transaction() {
        return $this->belongsTo(Transaction::class, 'transaction_id');
    }

    

}
