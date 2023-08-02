<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = "kategori";
    protected $fillable = [
      'namaKategori',
      'deskripsiKategori',
      'gambarKategori',
      'hargaKategori'
    ];

    public function pelanggan()
    {
        return $this->belongsToMany(Pelanggan::class, 'detail_penjualan')
        ->withPivot('id', 'kuantitas', 'total', 'kode')
        ->withTimestamps();
    }
 }
