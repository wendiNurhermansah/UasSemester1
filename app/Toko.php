<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    protected $table ='tm_produk';
    protected $fillable = ['id', 'gambar', 'merek', 'ket', 'harga', 'created_at', 'updated_at'];
}
