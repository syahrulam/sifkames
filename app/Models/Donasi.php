<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pemdonasi',
        'email_pemdonasi',
        'telepon_pemdonasi',
        'jumlah_donasi',
        'metode_pembayaran',
        'anonim',
        'status'
    ];
}
