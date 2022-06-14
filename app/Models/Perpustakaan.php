<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perpustakaan extends Model
{
    use HasFactory;

    protected $table ='perpustakaans';
    protected $fillable = [
        'user_id',
        'nama_perpustakaan',
        'email_perpustakaan',
        'alamat_perpustakaan'

    ];

    public function user()
    {
        return $this->hasOne(User::class,'user_id');
    }
    public function cartdetail()
    {
        return $this->hasMany(CartDetail::class,'id');
    }
}
