<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_merek'];
    //protected $table =['mereks'];
    public $timestamps = true;

     //relasi ke tabel produk
    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
