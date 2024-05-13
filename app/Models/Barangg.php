<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangg extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_barang','harga','stok'];
    //protected $table =['baranggs'];
    public $timestamps = true;

     //relasi ke tabel transaksi
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
