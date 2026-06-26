<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;

    protected $fillable = ['transaksi_id', 'produk_id', 'jumlah', 'subtotal'];

    // Menghubungkan detail kembali ke data induk transaksi
    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }

    // Menghubungkan detail untuk mengambil nama/harga menu dari tabel produk
    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}