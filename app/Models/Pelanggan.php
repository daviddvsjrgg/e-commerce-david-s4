<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = "pelanggan";
    protected $fillable = [
      'namaPelanggan',
      'alamatPelanggan',
      'nbiPelanggan'
    ];
    
    public function kategori()
    {
        return $this->belongsToMany(Kategori::class, 'detail_penjualan');
        
    }
}
