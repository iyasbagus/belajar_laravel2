<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

     protected $fillable = ['id','name_brand'];
    public $timestamps = true;

    //relasi ke tabel product
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
