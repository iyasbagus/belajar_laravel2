<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = ['id','name_product','price','description','id_brand','cover'];
    public $timestamps = true;

    //relasi ke tabel brand
    public function brand()
    {
        return $this->BelongsTo(Brand::class, 'id_brand');
    }

    //mengapus image
    public function deleteImage(){
        if($this->cover && file_exists(public_path('images/product' . $this->cover))){
            return unlink(public_path('images/product' . $this->cover));
        }
    }
}
