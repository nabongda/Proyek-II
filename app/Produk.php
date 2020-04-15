<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table='produk';

    protected $primaryKey='id_produk';

    protected $fillable = [
        'nama_produk', 'harga', 'stok', 'kategori', 'gambar',
    ];

    public function kategori(){
        return $this->belongsTo(Kategori::class,'kategori','id_kategori');
    }

}
